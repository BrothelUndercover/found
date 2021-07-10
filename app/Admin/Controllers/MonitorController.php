<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Monitor;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\Company;

class MonitorController extends AdminController
{

    protected $status = ['0' => '已备案','1'=> '未备案'];
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Monitor(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('check_time');
            $grid->column('company_id')->display(function($company_id){
                return Company::find($company_id)->platform_name;
            });
            $grid->column('is_business')->using([0 => '已备案',1=> '未备案'])->dot([0 => 'danger',1 => 'primary']);
            $grid->column('is_site')->using([0 => '已备案',1=> '未备案'])->dot([0 => 'danger',1 => 'primary']);
            $grid->column('status')->using([0 => '异常',1=> '正常'])->label([0 => 'danger',1 => 'primary']);
            $grid->column('mark');
            $grid->column('created_at');
            // $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Monitor(), function (Show $show) {
            $show->field('id');
            $show->field('check_time');
            $show->field('company_id');
            $show->field('is_business');
            $show->field('is_site');
            $show->field('status');
            $show->field('mark');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Monitor(), function (Form $form) {
            $form->display('id');
            $form->date('check_time')->format('YYYY-MM');
            $form->select('company_id')->options(Company::pluck('platform_name','id'));
            $form->switch('is_business');
            $form->switch('is_site');
            $form->switch('status');
            $form->text('mark');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
