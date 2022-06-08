<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestControllet extends Controller
{
    //
    public function showServiceContainertest()
    {
        app()->bind('lifecycleTest', function(){
            return 'ライフサクル';
        });

        $test = app()->make('lifecycleTest');

        dd($test, app());
    }
}
