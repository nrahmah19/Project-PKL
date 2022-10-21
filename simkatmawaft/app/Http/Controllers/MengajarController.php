<?php

namespace App\Http\Controllers;

use App\Models\Mengajar;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class MengajarController extends Controller
{
    public function index()
    {
        $mengajar = Mengajar::all();
        return view('mengajar.st_mengajar', compact(['mengajar']));
    }

    public function create()
    {
        $id = IdGenerator::generate(['table'=>'mengajar','field'=>'id','length'=>5,'prefix'=>'KS']);
        return view('mengajar.create', compact(['id']));
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
        Mengajar::create($data1);
        return redirect('/st_mengajar');
    }

    public function menunggu($id)
    {
        $mengajar = Mengajar::find($id);
        $mengajar -> status = 0;
        $mengajar ->save();
        return back();
    }
    
    public function setuju($id)
    {
        $mengajar = Mengajar::find($id);
        $mengajar -> status = 1;
        $mengajar ->save();
        return back();
    }

    public function tolak($id)
    {
        $mengajar = Mengajar::find($id);
        $mengajar -> status = 2;
        $mengajar ->save();
        return back();
    }

    public function surat($id)
    {
        $mengajar = mengajar::find($id);
        return view('mengajar.surat', compact(['mengajar']));
    }
}