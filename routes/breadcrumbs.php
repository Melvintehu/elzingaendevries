<?php 

Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('home', URL::to('/'));
});

Breadcrumbs::register('over ons', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('over ons', URL::to('/over-ons'));
});

Breadcrumbs::register('projecten', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('projecten ', URL::to('/projecten'));
});

Breadcrumbs::register('filter', function($breadcrumbs, $page) {
    $breadcrumbs->parent('projecten');
    $breadcrumbs->push(strtolower($page), URL::to("/projecten/$page"));
});

Breadcrumbs::register('show project', function($breadcrumbs, $page) {
    $breadcrumbs->parent('filter', $page->discipline['name']);
    $breadcrumbs->push(strtolower($page->name) , URL::to("/project/$page->id/$page->name"));
});

Breadcrumbs::register('interieur', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('betimmering interieur', URL::to('/betimmering-interieur'));
});

Breadcrumbs::register('exterieur', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('betimmering exterieur', URL::to('/betimmering-exterieur'));
});


Breadcrumbs::register('schepen', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('scheepsbetimmering', URL::to('/betimmering-schepen'));
});

Breadcrumbs::register('contact', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('contact', URL::to('/contact'));
});