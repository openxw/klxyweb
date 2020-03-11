<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *您可以在此处删除内置表单字段：
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 *或扩展自定义表格字段：
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 *或需求js和CSS资产：
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *

 */

Encore\Admin\Form::forget(['map', 'editor']);
