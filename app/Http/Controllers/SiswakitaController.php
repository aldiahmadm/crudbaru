<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswakita;

class SiswakitaController extends Controller
{
    public function index(){
        $siswakita = Siswakita::all(); 
        return 'test';
    }
}
