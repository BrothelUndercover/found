<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Company;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CompanyController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Company(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('category')->using(['1'=>'配置平台','2'=>'证券公司','3'=>'行情软件','4'=>'数字货币']);
            $grid->column('company_name');
            $grid->column('company_type');
            $grid->column('is_check')->switch();
            $grid->column('is_real')->using(['1'=>'实盘','2'=>'待验证'])->label([
                2 => 'primary',
                1 => 'info',
            ]);
            $grid->column('obline_at');
            $grid->column('platform_name');
            $grid->column('platform_logo')->image();
            $grid->column('platform_url');
            $grid->column('regauth');
            $grid->column('regi_addr');
            $grid->column('sort')->editable();
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
        return Show::make($id, new Company(), function (Show $show) {
            $show->field('id');
            $show->field('approved_at');
            $show->field('area');
            $show->field('business_creditcode');
            $show->field('business_num');
            $show->field('business_scope');
            $show->field('category');
            $show->field('company_address');
            $show->field('company_capital');
            $show->field('company_name');
            $show->field('company_paid');
            $show->field('company_person');
            $show->field('company_phone');
            $show->field('company_type');
            $show->field('Established_at');
            $show->field('industry');
            $show->field('is_check');
            $show->field('is_real');
            $show->field('obline_at');
            $show->field('operating_status');
            $show->field('organization_code');
            $show->field('period');
            $show->field('platform_introduce');
            $show->field('platform_logo');
            $show->field('platform_name');
            $show->field('platform_url');
            $show->field('record_chargeperson');
            $show->field('record_checkdate');
            $show->field('record_code');
            $show->field('regauth');
            $show->field('regi_addr');
            $show->field('service_mode');
            $show->field('service_project');
            $show->field('status');
            $show->field('supervision');
            $show->field('taxqua');
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
        return Form::make(new Company(), function (Form $form) {
            $form->tab('平台',function(Form $form){
                $form->display('id');
                $form->image('platform_logo')->uniqueName();
                $form->text('platform_name');
                $form->text('platform_url');
                $form->text('service_project');
                $form->date('obline_at');
                $form->text('platform_introduce');
                $form->text('service_mode');
                $form->radio('is_real')->options(['1'=>'实盘','2'=>'待验证'])->default(true);
                $form->select('category')->options(['1'=>'配置平台','2'=>'证券公司','3'=>'行情软件','4'=>'数字货币'])->rules('required');

                $form->text('company_address');
                $form->text('company_phone');
                $form->text('area');
                $form->switch('is_check');
                // $form->switch('status');
            })->tab('工商信息',function(Form $form){
                $form->text('company_name');
                $form->text('company_paid');
                $form->text('company_person');
                $form->text('operating_status');
                $form->date('approved_at');
                $form->text('period');
                $form->text('business_creditcode');
                $form->text('organization_code');
                $form->text('business_num');
                $form->text('business_scope');
                $form->text('company_type');
                $form->text('company_capital');
                $form->date('Established_at');
                $form->text('industry');
                $form->text('regi_addr');
                $form->text('taxqua');
                 $form->text('regauth');
            })->tab('网站备案',function(Form $form){
                $form->text('record_chargeperson');
                $form->text('record_checkdate');
                $form->text('record_code');
            })->tab('监管机构',function (Form $form){
                $form->image('supervision_logo')->uniqueName();
                $form->text('supervision_name');
                $form->text('supervision_country');
                $form->text('supervision_type');
                $form->date('supervision_card_at');
                $form->text('supervision_code');
            });
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
