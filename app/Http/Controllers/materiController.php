<?php

namespace App\Http\Controllers;

use App\Models\kursus;
use App\Models\materi;
use Illuminate\Http\Request;

class materiController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'link_materi' => 'required',
            'kursus_id' => 'required'
        ]);

        $validated['user_id'] = 1;

        materi::create($validated);

        return redirect('manage-materi');
    }

    public function detail()
    {
        return view('dashboard.kursus.layouts.detail_materi', [
            'data' => materi::where('id', request()->id)->first()
        ]);
    }


    public function indexAdmin()
    {
        return view('dashboard.admin.manageMateri.index', [
            'data' => materi::all(),
            'kursus' => kursus::all(),
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'link_materi' => 'required',
            'kursus_id' => 'required'
        ]);

        $validated['user_id'] = 1;

        materi::where('id', $request->id)->update($validated);

        return redirect('manage-materi');
    }

    public function destroy()
    {
        materi::destroy(request()->id);

        return redirect('/manage-materi');
    }
}
