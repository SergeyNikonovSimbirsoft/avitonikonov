<?php
Breadcrumbs::for('catalog.category', function ($trail, $category = null) {
    $trail->push('Main', route('main'));
    $trail->push('Catalog', route('catalog.catalog'));
    if (!is_null($category)) {
        foreach ($category->getParents() as $parentCat) {
            $trail->push($parentCat->name, route('catalog.category', ['code' => $parentCat->code]));
        }
        $trail->push($category->name, route('catalog.category', ['code' => $category->code]));
    }
});
Breadcrumbs::for('personal', function ($trail, $personal = null) {
    $trail->push('Main', route('main'));
    $trail->push('Personal', route('personal.personal'));
    if (!is_null($personal)) {
        $trail->push($personal);
    }
});
