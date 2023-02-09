<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelamar;
use App\Models\Position;
use App\Models\JadwalWawancara;

class JadwalController extends Controller
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
    public function create($id)
    {
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JadwalWawancara::create([
            'pelamar_id' => $request->pelamar_id,
            'jadwal'     => $request->jadwal,
            'keterangan' => $request->keterangan,
        ]);

        Pelamar::where('id', $request->pelamar_id)->update([
            'status'     => 'Wawancara pada '.$request->jadwal,
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

        return view('jadwal.form_jadwal',[
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
        $jadwal = JadwalWawancara::where('pelamar_id', $id)->first();
        $pelamar = Pelamar::where('id', $id)->first();

        return view('jadwal.update_jadwal',[
            'pelamar' => $pelamar,
            'jadwal' => $jadwal
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
        JadwalWawancara::where('pelamar_id', $id)
            ->update([
                'jadwal'        => $request->jadwal,
                'keterangan'    => $request->keterangan    
            ]);

        Pelamar::where('id', $id)->update([
            'status'     => 'Wawancara pada '.$request->jadwal,
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

    public function create_jadwal($id)
    {
      
    }
}
