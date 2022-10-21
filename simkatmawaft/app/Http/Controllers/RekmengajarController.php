<?php

namespace App\Http\Controllers;

use App\Models\Mengajar;
use Illuminate\Http\Request;

class RekmengajarController extends Controller
{
    public function index(){
        $mengajar = Mengajar::whereIn('status',[1,2])->get();
        return view('Rekap.mengajar.rekap',compact(['mengajar']));
    }
    public function cetak(){
        $mengajar = Mengajar::where('status',1)->get();
        return view('Rekap.mengajar.cetak',compact(['mengajar']));
    }
}