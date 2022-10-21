<?php

namespace App\Http\Controllers;

use App\Models\Penelitian;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function index()
    {
        $penelitian = Penelitian::all();
        return view('penelitian.st_penelitian', compact(['penelitian']));
    }

    public function create()
    {
        $id = IdGenerator::generate(['table'=>'penelitian','field'=>'id','length'=>5,'prefix'=>'KP']);
        return view('penelitian.create', compact(['id']));
    }

    public function edit($id){
        $penelitian = Penelitian::find($id);
        return view('penelitian.edit',compact(['penelitian']));
    }
    public function update($id, Request $request){
        $penelitian=Penelitian::find($id);
        $penelitian->update($request->except(['submit','_token']));
        $penelitian->status=0;
        $penelitian->save();
        return redirect('st_penelitian');
    }

    public function index1()
    {
        $penelitian = Penelitian::all();
        return view('validasi.valpenelitian', compact(['penelitian']));
    }

    public function store(Request $request)
    {
        $data1 = $request->except(['_token','submit']);

        if($file = $request->hasFile('dokumen'));
        $file = $request ->file('dokumen');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path().'/file';
        $file->move($destinationPath,$fileName);
        $data1['dokumen'] = $file->getClientOriginalName();
        Penelitian::create($data1);
        return redirect('/st_penelitian');
    }

    public function menunggu($id)
    {
        $penelitian = Penelitian::find($id);
        $penelitian -> status = 0;
        $penelitian ->save();
        return back();
    }
    
    public function setuju($id)
    {
        $penelitian = Penelitian::find($id);
        $penelitian -> status = 1;
        $penelitian ->save();
        return back();
    }

    public function tolak($id)
    {
        $penelitian = Penelitian::find($id);
        $penelitian -> status = 2;
        $penelitian ->save();
        return back();
    }

    public function surat($id)
    {
        $m = Penelitian::find($id);
        return view('penelitian.surat', compact(['m']));
    }
}