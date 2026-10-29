<?php
namespace App\Http\Controllers;

use App\Models\LibroDgrm;

class LibroDgrmController extends Controller
{
    public function index()
    {
        $libros = LibroDgrm::all();

        return view('libros.index', compact('libros'));
    }
}
