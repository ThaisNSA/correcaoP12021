<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlorController extends Controller
{
    public function flores()
    {

        $subtitulo = 'Lista de Flores';
        $flores = ['Rosa', 'Margarida', 'Lírio'];
        return view('admin.flores.index', compact('subtitulo', 'flores'));
    }
}
