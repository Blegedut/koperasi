<?php

namespace App\Http\Controllers;

use App\Models\Seragam;
use Illuminate\Http\Request;

class SeragamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Seragam::get();
        return view('seragam.index', compact('data'));
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
        $this->validate($request, [
            'jenis' => 'required',
            'tanggal' => 'required',
            'ukuran' => 'required',
            'harga' => 'required',
        ]);

        $data = new Seragam();
        $data->jenis = $request->jenis;
        $data->tanggal = $request->tanggal;
        $data->ukuran = $request->ukuran;
        $data->harga = $request->harga;
        // dd($data);
        $data->save();

        // Alert::success('Sukses!', 'Berhasil Menambah Jadwal');
        return redirect()->back();
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
        $data = Seragam::where('id', $id)->firstOrFail();
        $request->validate([
            'jenis' => 'required',
            'tanggal' => 'required',
            'ukuran' => 'required',
            'harga' => 'required',
        ]);

        $data->jenis = $request->jenis;
        $data->tanggal = $request->tanggal;
        $data->ukuran = $request->ukuran;
        $data->harga = $request->harga;
        // dd($data);
        $data->update();

        // Alert::success('Sukses!', 'Berhasil Menambah Jadwal');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Seragam::find($id);
        $data->delete();
        // Alert::success('Sukses!', 'Berhasil Menghapus Data Siswa');

        return redirect()->back();
    }
}
