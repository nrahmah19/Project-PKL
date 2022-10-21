<?php

namespace App\Http\Controllers;

use App\Models\Pengabdian;
use Illuminate\Http\Request;

class RekpengabdianController extends Controller
{
    public function index(){
        $pengabdian = Pengabdian::whereIn('status',[1,2])->get();
        return view('Rekap.pengabdian.rekap',compact(['pengabdian']));
    }

    public function cetak(){
        $pengabdian = Pengabdian::where('status',1)->get();
        return view('Rekap.pengabdian.cetak',compact(['pengabdian']));
    }
}