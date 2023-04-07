<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class InicioController extends Controller
{
    public function index(){

        return View ('admin.page.index');
        
    }
}
