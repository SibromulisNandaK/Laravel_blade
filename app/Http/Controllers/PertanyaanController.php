<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function create(){
        return view('pertanyaan.create');
    }
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();

        return view('pertanyaan.index', ['pertanyaan' => $pertanyaan]);
    }
    public function show($id){
        return view('pertanyaan.index');
    }
    public function store(Request $request){

        DB::table('pertanyaan')->insert([
            "id"=>"1",
            "judul" => $request['judul'],
            "isi" => $request['isi'],
            "tanggal_dibuat"=>"2002-02-02",
            "profil_id"=>"2",
            "jawaban_tepat_id"=>"2",
            "tanggal_diperbaharui"=>"2002-02-02"
            ]);
        return redirect('/pertanyaan/create');
    }
}
