<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Comment;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\Company;
use App\Models\User;

class CommentController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Comment(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('company_id')->display(function($company_id){
                return Company::find($company_id)->name;
            });
            $grid->column('user_id')->display(function($userid){
                return User::find($userid)->name;
            });
            $grid->column('content');
            $grid->column('status')->switch();
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
        return Show::make($id, new Comment(), function (Show $show) {
            $show->field('id');
            $show->field('company_id');
            $show->field('user_id');
            $show->field('content');
            $show->field('status');
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
        return Form::make(new Comment(), function (Form $form) {
            $form->display('id');
            $form->select('company_id')->options(Company::pluck('platform_name','id'));
            $form->select('user_id')->options(User::pluck('name','id'));
            $form->switch('status');
            $form->textarea('content');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
