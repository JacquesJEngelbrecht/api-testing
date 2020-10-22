<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyApi extends Controller
{
    function getData() {
        return ["name"=>"Bom",
                "email"=>"1313bom@gmail.com"
    ];
    }
}
