<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('admin.modules.index', function (BreadcrumbTrail $breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('generator::menus.modules.management'), route('admin.modules.index'));
});

Breadcrumbs::for('admin.modules.create', function (BreadcrumbTrail $breadcrumbs) {
    $breadcrumbs->parent('admin.modules.index');
    $breadcrumbs->push(trans('generator::menus.modules.create'), route('admin.modules.create'));
});

Breadcrumbs::for('admin.modules.edit', function (BreadcrumbTrail $breadcrumbs, $id) {
    $breadcrumbs->parent('admin.modules.index');
    $breadcrumbs->push(trans('generator::menus.modules.edit'), route('admin.modules.edit', $id));
});
