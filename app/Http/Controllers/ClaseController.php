<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;

class ClaseController extends Controller
{
    public function index()
    {
        $clase = Clase::all();
        return $clase;
    }
}
