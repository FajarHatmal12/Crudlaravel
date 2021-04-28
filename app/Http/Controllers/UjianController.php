<?php

namespace App\Http\Controllers;
use App\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index()
    {
        $is = Ujian::all();
        return view('index', compact("is"));
    }
    public function create()
    {
        $is = Ujian::all();
        return view('create', compact("is"));
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            // 'id' => 'required|max:10|min:1',
            'nama_mk' => 'required|max:255',
            'dosen' => 'required|max:255',
            'jumlah_soal' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);

        $simpn = Ujian::create([
            // 'id' => $request->input('id'),
            // 'id' => $request->input ('id'),
            'nama_mk' => $request->input ('nama_mk'),
            'dosen' => $request->input ('dosen'),
            'jumlah_soal' => $request->input ('jumlah_soal'),
            'keterangan' => $request->input ('keterangan'),
        ]);

        if($simpn){
            return redirect()->route('index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Request $request, $id)
    {
        $is = Ujian::findOrfail($id);
        return view('edit', compact('is'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $this->validate($request, [
            // 'id' => 'required|max:10|min:1',
            'nama_mk' => 'required|max:255',
            'dosen' => 'required|max:255',
            'jumlah_soal' => 'required|max:255',
            'keterangan' => 'required|max:255',
        ]);
        $is = Ujian::findOrfail($id);

            $is->update([
                // 'id' => $request->input ('id'),
                'nama_mk' => $request->input ('nama_mk'),
                'dosen' => $request->input ('dosen'),
                'jumlah_soal' => $request->input ('jumlah_soal'),
                'keterangan' => $request->input ('keterangan'),
            ]);

        if($is){
            return redirect()->route('index', compact('is', 'id'))->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('index', compact('is', 'id'))->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy(Request $request, $id)
    {
        $is = Ujian::findOrfail($id)->delete();
        if($is){
            return redirect()->route('index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
