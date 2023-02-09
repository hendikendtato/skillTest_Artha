<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelamar;
use App\Models\Position;
use App\Models\JadwalWawancara;
use App\Models\HasilWawancara;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        HasilWawancara::create([
            'pelamar_id' => $request->pelamar_id,
            'score'      => $request->score,
            'keterangan' => $request->keterangan,
        ]);

        Pelamar::where('id', $request->pelamar_id)->update([
            'status'  => $request->status,
        ]);

        return redirect()->route('pelamar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelamar = Pelamar::where('id', $id)->first();

        return view('hasil.form_hasil',[
            'pelamar' => $pelamar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hasil = HasilWawancara::where('pelamar_id', $id)->first();
        $pelamar = Pelamar::where('id', $id)->first();

        return view('hasil.update_jadwal',[
            'hasil'  => $hasil,
            'pelamar' => $pelamar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        HasilWawancara::where('pelamar_id', $id)
            ->update([
                'pelamar_id' => $request->pelamar_id,
                'score'      => $request->score,
                'keterangan' => $request->keterangan,    
            ]);

        Pelamar::where('id', $id)->update([
            'status'  => $request->status,
        ]);
        
        return redirect()->route('pelamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
