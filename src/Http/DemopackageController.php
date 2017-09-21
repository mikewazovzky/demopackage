<?php

namespace Mikewazovzky\Demopackage\Http;

use Illuminate\Routing\Controller as BaseController;

class DemopackageController extends BaseController
{
    public function index()
    {
        $items = \Mikewazovzky\Demopackage\Models\Item::all();

        return view('mikewazovzky-demo::index', compact('items'));
    }

    public function name($name = null)
    {
        $name = $name ?: config('mikewazovzky-demo.name');

        return view('mikewazovzky-demo::name', compact('name'));
    }
}
