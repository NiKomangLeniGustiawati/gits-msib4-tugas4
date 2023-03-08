<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswamodel;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->Mahasiswamodel = new Mahasiswamodel();
    }

    public function index(){
        $datamahasiswa = Mahasiswamodel::all();
        
        return view('datamahasiswa', $datamahasiswa);
    }

    public function welcome(){
        $datamahasiswa = Mahasiswamodel::all();
        
        return view('welcome', compact ('datamahasiswa'));
    }
     }