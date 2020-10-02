<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
public function getindex(){
    $obj = new \stdClass();
    $obj -> name = 'ayoub chaib';
    $obj -> id = 5;
    $obj -> gender = 'male';
    return view('welcome',compact('obj'));
}

}
