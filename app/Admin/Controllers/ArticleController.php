<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Article;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\Group;

class ArticleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Article(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('group')->display(function($gid){
                return Group::find($gid)->title;
            });
            $grid->column('cover')->image();
            $grid->column('origin')->using([1 => '原创', 2 => '转载'])->label([
                1 => 'primary',
                2 => 'success',
            ]);
            $grid->column('publisher');
            $grid->column('is_check')->switch();
            $grid->column('view');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
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
        return Show::make($id, new Article(), function (Show $show) {
            $show->field('id');
            $show->field('group');
            $show->field('content');
            $show->field('cover');
            $show->field('origin');
            $show->field('publisher');
            $show->field('title');
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
        return Form::make(new Article(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->text('mark');
            $form->select('group')->options(Group::where('status',true)->pluck('title','id'));
            $form->image('cover')->uniqueName();
            $form->radio('origin')->options(['1'=>'原创','2'=>'转载'])->default(true);
            $form->text('publisher');
            $form->switch('is_check');
            $form->editor('content')->height('1000');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
