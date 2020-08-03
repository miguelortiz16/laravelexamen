<?php

namespace crud\Http\Controllers;

use crud\producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
   public function getAll(){
       $producto=producto::all();
       return $producto;
   }
}
