<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludito() {
        return "estoy trabajando, con laravel";
    }
}
