<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.

Breadcrumbs::macro('resource', function ($name, $title, $alias) {

    // Home > $Title
    Breadcrumbs::for("$name.index", function (BreadcrumbTrail $trail) use ($name, $title) {
        $trail->parent('home');
        $trail->push($title, route("$name.index"));
    });

    // Home > $Title > Crear
    Breadcrumbs::for("$name.create", function (BreadcrumbTrail $trail) use ($name) {
        $trail->parent("$name.index");
        $trail->push('Crear', route("$name.create"));
    });

    // Home > $Title > $Title $alias
    Breadcrumbs::for("$name.show", function (BreadcrumbTrail $trail, $model) use ($name, $alias) {
        $trail->parent("$name.index");
        $trail->push($model->$alias, route("$name.show", $model));
    });

    // Home > $Title > $Title $alias > Editar
    Breadcrumbs::for("$name.edit", function (BreadcrumbTrail $trail, $model) use ($name) {
        $trail->parent("$name.show", $model);
        $trail->push('Editar', route("$name.edit", $model));
    });

    // Home > $Title > Estadisticas
    Breadcrumbs::for("$name.statistics", function (BreadcrumbTrail $trail) use ($name) {
        $trail->parent("$name.index");
        $trail->push('Estadísticas', route("$name.statistics"));
    });

});
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
});

Breadcrumbs::resource('departament', 'Departamentos', 'nombre');
Breadcrumbs::resource('town', 'Municipios', 'nombre');
