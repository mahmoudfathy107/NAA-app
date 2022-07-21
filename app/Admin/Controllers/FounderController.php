<?php

namespace App\Admin\Controllers;

use App\Models\Founder;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FounderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Founder';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Founder());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('name', __('Name'));
        $grid->column('photos', __('Photos'));
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
        $show = new Show(Founder::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('name', __('Name'));
        $show->field('photos', __('Photos'));
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
        $form = new Form(new Founder());

        $form->number('user_id', __('User id'));
        $form->select('name', __('Name'))->options([1 => 'الشهادات', 2 => 'صورى من الكتب', 3 =>'صور القانزين' , 4 => 'صور كتبى', 5 => 'شخصيات هامة', 6 =>'ندوات' , 7 => 'صحف ومجلات', 8 => 'جوابات الملكة' ,9 => 'صور عادية']);
        $form->multipleImage('photos',__('photos'));
        return $form;
    }
}
