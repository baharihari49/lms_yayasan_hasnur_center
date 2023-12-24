<?php

namespace App\Http\Controllers;

use App\Models\kursus;
use App\Models\materi;
use Illuminate\Http\Request;

class kursusController extends Controller
{
    public function index()
    {
        return view('dashboard.kursus.index', [
            'data' => kursus::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'durasi' => 'required'
        ]);

        // Tambahkan user_id ke data yang divalidasi
        // $validated['user_id'] = auth()->user()->id;

        kursus::create($validated);

        // Redirect atau lakukan tindakan selanjutnya
        return redirect('/manage-kursus')->with('success', 'Data kursus berhasil ditambahkan.');
    }


    public function update(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'durasi' => 'required'
        ]);

        // Tambahkan user_id ke data yang divalidasi
        // $validated['user_id'] = auth()->user()->id;

        kursus::where('id', $request->id)->update($validated);

        // Redirect atau lakukan tindakan selanjutnya
        return redirect('/manage-kursus')->with('success', 'Data kursus berhasil diubah.');
    }

    public function destroy()
    {
        kursus::destroy(request()->id);

        return redirect('/manage-kursus');
    }


    public function detailKursus()
    {
        return view('dashboard.kursus.layouts.detail_kursus', [
            'data' => kursus::where('id', request()->id)->first(),
            'materi' => materi::where('kursus_id', request()->id)->get()
        ]);
    }


    public function indexAdmin()
    {
        return view('dashboard.admin.manageKursus.index', [
            'data' => kursus::all(),
        ]);
    }

}
