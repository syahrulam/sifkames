<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MuslimMedical;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MuslimMedicalController extends Controller
{
    public function index()
    {
        $data = MuslimMedical::latest()->get();
        return view('backend.muslim_medical.index', compact('data'));
    }

    public function create()
    {
        return view('backend.muslim_medical.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images/muslim_medical', 'public');

        MuslimMedical::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'date' => $request->date,
            'content' => $request->content,
            'image' => $imagePath,
            'category' => 'Muslim Medical',
            'admin' => auth()->user()->name ?? 'Admin',
        ]);

        return redirect()->route('admin.muslim_medical.index')->with('success', 'Kegiatan Muslim Medical berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = MuslimMedical::findOrFail($id);
        return view('backend.muslim_medical.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = MuslimMedical::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($data->image) {
                Storage::disk('public')->delete($data->image);
            }
            $imagePath = $request->file('image')->store('images/muslim_medical', 'public');
        } else {
            $imagePath = $data->image;
        }

        $data->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'date' => $request->date,
            'content' => $request->content,
            'image' => $imagePath,
            'category' => 'Muslim Medical',
            'admin' => auth()->user()->name ?? 'Admin',
        ]);

        return redirect()->route('admin.muslim_medical.index')->with('success', 'Kegiatan Muslim Medical berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = MuslimMedical::findOrFail($id);
        if ($data->image) {
            Storage::disk('public')->delete($data->image);
        }
        $data->delete();

        return redirect()->route('admin.muslim_medical.index')->with('success', 'Kegiatan Muslim Medical berhasil dihapus');
    }
}
