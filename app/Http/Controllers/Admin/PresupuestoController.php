<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresupuestoController extends Controller
{
    public function index()
    {
        return view("admin.presupuestos.index");
    }


    public function create()
    {
        return view("admin.presupuestos.create");
    }
}
