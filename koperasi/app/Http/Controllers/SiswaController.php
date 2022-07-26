<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::get();
        return view('siswa.index', compact('data'));
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
            'nama' => 'required',
            'nisn' => 'required',
            'nis' => 'required',
            'jurusan' => 'required',
        ]);

        $data = new Siswa();
        $data->nama = $request->nama;
        $data->nisn = $request->nisn;
        $data->nis = $request->nis;
        $data->jurusan = $request->jurusan;
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
        $data = Siswa::where('id', $id)->firstOrFail();
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'nis' => 'required',
            'jurusan' => 'required',
        ]);

        $data->nama = $request->nama;
        $data->nisn = $request->nisn;
        $data->nis = $request->nis;
        $data->jurusan = $request->jurusan;
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
        $data = Siswa::find($id);
        $data->delete();
        // Alert::success('Sukses!', 'Berhasil Menghapus Data Siswa');

        return redirect()->back();
    }
}
