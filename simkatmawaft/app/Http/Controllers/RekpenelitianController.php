<?php

namespace App\Http\Controllers;

use App\Models\Penelitian;
use Illuminate\Http\Request;

class RekpenelitianController extends Controller
{
    public function index(){
        $penelitian = Penelitian::whereIn('status',[1,2])->get();
        return view('Rekap.penelitian.rekap',compact(['penelitian']));
    }

    public function cetak(){
        $penelitian = Penelitian::where('status',1)->get();
        return view('Rekap.penelitian.cetak',compact(['penelitian']));
    }
}