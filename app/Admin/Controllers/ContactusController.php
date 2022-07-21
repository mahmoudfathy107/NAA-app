<?php

namespace App\Admin\Controllers;

use App\Models\Contactus;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactusController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contactus';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contactus());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('message', __('Message'));
        $grid->column('workWithUs', __('WorkWithUs'));
        $grid->column('getLegalAdvice', __('GetLegalAdvice'));
        $grid->column('advirtiseWithUs', __('AdvirtiseWithUs'));
        $grid->column('publishWithUs', __('PublishWithUs'));
        $grid->column('takePicture', __('TakePicture'));
        $grid->column('Donate', __('Donate'));
        $grid->column('WatchEpisodes', __('WatchEpisodes'));
        $grid->column('butAbook', __('ButAbook'));
        $grid->column('translate', __('Translate'));
        $grid->column('other', __('Other'));
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
        $show = new Show(Contactus::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('message', __('Message'));
        $show->field('workWithUs', __('WorkWithUs'));
        $show->field('getLegalAdvice', __('GetLegalAdvice'));
        $show->field('advirtiseWithUs', __('AdvirtiseWithUs'));
        $show->field('publishWithUs', __('PublishWithUs'));
        $show->field('takePicture', __('TakePicture'));
        $show->field('Donate', __('Donate'));
        $show->field('WatchEpisodes', __('WatchEpisodes'));
        $show->field('butAbook', __('ButAbook'));
        $show->field('translate', __('Translate'));
        $show->field('other', __('Other'));
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
        $form = new Form(new Contactus());

        $form->number('user_id', __('User id'));
        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->text('message', __('Message'));
        $form->switch('workWithUs', __('WorkWithUs'));
        $form->switch('getLegalAdvice', __('GetLegalAdvice'));
        $form->switch('advirtiseWithUs', __('AdvirtiseWithUs'));
        $form->switch('publishWithUs', __('PublishWithUs'));
        $form->switch('takePicture', __('TakePicture'));
        $form->switch('Donate', __('Donate'));
        $form->switch('WatchEpisodes', __('WatchEpisodes'));
        $form->switch('butAbook', __('ButAbook'));
        $form->switch('translate', __('Translate'));
        $form->switch('other', __('Other'));

        return $form;
    }
}
