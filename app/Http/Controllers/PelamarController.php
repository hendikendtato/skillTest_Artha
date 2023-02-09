<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelamar;
use App\Models\Position;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelamars = Pelamar::join('positions', 'positions.id', '=', 'pelamars.position_id')
            ->join('jadwal_wawancaras', 'jadwal_wawancaras.pelamar_id', '=', 'pelamars.id')
            ->join('hasil_wawancaras', 'hasil_wawancaras.pelamar_id', '=', 'pelamars.id')
            ->get(['pelamars.*','positions.position_name AS posisi', 'jadwal_wawancaras.jadwal']);
        return view('pelamar.index', [
            "pelamar" => $pelamars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Position::all();
        return view('pelamar.form', [
            "position" => $positions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pelamar::create([
            'full_name'     => $request->full_name,
            'nick_name'     => $request->nick_name,
            'birth_place'   => $request->birth_place,
            'birth_date'    => $request->birth_date,
            'religion'      => $request->religion,
            'phone_number'  => $request->phone_number,
            'address'       => $request->address,
            'position_id'   => $request->position,
            'status'        => 'Pengajuan',
        ]);

        return redirect()->route('pelamar.index');
        // ->with('success', 'Created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
