<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Group;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class GroupController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Group(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('Introduction');
            $grid->column('status')->switch();
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Group(), function (Form $form) {
            $form->display('id');
            $form->text('title');
            $form->text('Introduction');
            $form->switch('status')->default(true);
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
