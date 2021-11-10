<?php

namespace App\Admin\Controllers;

use App\Models\Doctor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DoctorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Doctor';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Doctor());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('name', __('Name'));
        $grid->column('surname', __('Surname'));
        $grid->column('sex', __('Sex'));
        $grid->column('address', __('Address'));
        $grid->column('national_id', __('National id'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('profile_picture', __('Profile picture'));
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
        $show = new Show(Doctor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('name', __('Name'));
        $show->field('surname', __('Surname'));
        $show->field('sex', __('Sex'));
        $show->field('address', __('Address'));
        $show->field('national_id', __('National id'));
        $show->field('phone_number', __('Phone number'));
        $show->field('profile_picture', __('Profile picture'));
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
        $form = new Form(new Doctor());

        $form->number('user_id', __('User id'));
        $form->text('name', __('Name'));
        $form->text('surname', __('Surname'));
        $form->text('sex', __('Sex'));
        $form->text('address', __('Address'));
        $form->text('national_id', __('National id'));
        $form->text('phone_number', __('Phone number'));
        $form->image('profile_picture', __('Profile picture'));

        return $form;
    }
}
