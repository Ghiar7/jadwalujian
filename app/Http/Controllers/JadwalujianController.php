<?php

namespace App\Http\Controllers;

use App\Models\Jadwalujian;
use Illuminate\Http\Request;

class JadwalujianController extends Controller
{
    public function index()
    {
        $data = [
            "jadwalujians" => Jadwalujian::all()
        ];
        return view('jadwalujian', $data);
    }

    public function tambahdata()
    {
        return view('tambahdata');
    }

    public function storejadwalujian(Request $request)
    {
        $validated = $request->validate([
            'tanggalujian' => 'required|date',
            'jammulai' => 'required|integer|min:0|max:23',
            'namamatakuliah' => 'required|string|max:255',
        ]);

        $jadwalujian = new Jadwalujian();
        $jadwalujian->tanggalujian = $request->input('tanggalujian');
        $jadwalujian->jammulai = $request->input('jammulai');
        $jadwalujian->namamatakuliah = $request->input('namamatakuliah');

        $jadwalujian->save();

        return redirect("/");
    }

    public function editdata($kodeujian)
    {
        $data = [
            "jadwalujian" => Jadwalujian::where('kodeujian', $kodeujian)->first()
        ];

        if (!$data['jadwalujian']) {
            return redirect('/');
        }

        return view('editdata', $data);
    }

    public function updatejadwalujian(Request $request)
    {
        $validated = $request->validate([
            'tanggalujian' => 'required|date',
            'jammulai' => 'required|integer|min:0|max:23',
            'namamatakuliah' => 'required|string|max:255',
        ]);

        $jadwalujian = Jadwalujian::where('kodeujian', $request->input('kodeujian'))->first();

        if (!$jadwalujian) {
            return redirect('/');
        }

        $jadwalujian = new Jadwalujian();
        $jadwalujian->tanggalujian = $request->input('tanggalujian');
        $jadwalujian->jammulai = $request->input('jammulai');
        $jadwalujian->namamatakuliah = $request->input('namamatakuliah');

        $jadwalujian->save();

        return redirect("/");
    }
}
