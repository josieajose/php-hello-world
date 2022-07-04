<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;

class MainController extends Controller
{
    //

    public function helloWorldCommand()
    {
        return Bus::dispatch(new \App\Console\Commands\HelloWorldCommand());
    }

    public function helloWorldEvent()
    {
        return event(new \App\Events\HelloWorldEvent());
    }
}
