<?php

namespace App\Admin\Controllers;

use App\Models\Pharmacist;
use App\Models\Request;
use App\Models\Transaction;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TransactionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Transaction';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Transaction());

        $grid->column('id', __('Id'));
        $grid->column('request_id', __('Request id'));
        $grid->column('pharmacist_id', __('Pharmacist id'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Transaction::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('request_id', __('Request id'));
        $show->field('pharmacist_id', __('Pharmacist id'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Transaction());

        $form->select('request_id', __('Request id'))->options(Request::all()->pluck('name','id'));
        $form->select('pharmacist_id', __('Pharmacist id'))->options(Pharmacist::all()->pluck('name','id'));
        $form->text('status', __('Status'));

        return $form;
    }
}
