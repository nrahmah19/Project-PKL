<?php

namespace App\Http\Controllers;

use App\Models\Pengabdian;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    public function index()
    {
        $pengabdian = Pengabdian::all();
        return view('pengabdian.st_pengabdian', compact(['pengabdian']));
    }

    public function create()
    {
        $id = IdGenerator::generate(['table'=>'pengabdian','field'=>'id','length'=>5,'prefix'=>'PM']);
        return view('pengabdian.create', compact(['id']));
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
        Pengabdian::create($data1);
        return redirect('/st_pengabdian');
    }

    public function edit($id){
        $pengabdian = Pengabdian::find($id);
        return view('pengabdian.edit',compact(['pengabdian']));
    }
    public function update($id, Request $request){
        $pengabdian=Pengabdian::find($id);
        $pengabdian->update($request->except(['submit','_token']));
        $pengabdian->status=0;
        $pengabdian->save();
        return redirect('st_pengabdian');
    }

    public function index1()
    {
        $pengabdian = Pengabdian::all();
        return view('validasi.valpengabdian', compact(['pengabdian']));
    }

    public function menunggu($id)
    {
        $pengabdian = Pengabdian::find($id);
        $pengabdian -> status = 0;
        $pengabdian ->save();
        return back();
    }
    
    public function setuju($id)
    {
        $pengabdian = Pengabdian::find($id);
        $pengabdian -> status = 1;
        $pengabdian ->save();
        return back();
    }

    public function tolak($id)
    {
        $pengabdian = Pengabdian::find($id);
        $pengabdian-> status = 2;
        $pengabdian ->save();
        return back();
    }

    public function surat($id)
    {
        $pengabdian = Pengabdian::find($id);
        return view('pengabdian.surat', compact(['pengabdian']));
    }
}