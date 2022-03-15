<?php


View::composer('frontend.widgets.__test', function ($view) {

    $data = "ok";
    dd($data);
    return $view->with('data', $data);
});
