<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function uploadFile(Request $request) {
        $result = $request->file('fileName')->store('apiDocs');
        return ["Result"=>$result];
    }
}
