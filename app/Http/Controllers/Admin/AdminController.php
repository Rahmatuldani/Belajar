<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['login', 'show']);
    }

    public function index($id){
        return "ini method invoke dalam AdminController id = ".$id;
    }

    public function login(){

    }
}
