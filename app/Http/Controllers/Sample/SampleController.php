<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    //
    public function index()
    {
        $data = [
            'msg' => 'sample controller index'
        ];

        return view('hello.index', $data);
    }

    public function other()
    {
        $data = [
            'msg' => 'sample controller other'
        ];

        return view('hello.index', $data);
    }
}
