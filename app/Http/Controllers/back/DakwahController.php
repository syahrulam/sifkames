<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dakwah;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DakwahController extends Controller
{
    public function index()
    {
        $data = Dakwah::latest()->get();
        return view('backend.dakwah.index', compact('data'));
    }

    public function create()
    {
        return view('backend.dakwah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Dakwah::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'date' => $request->date,
            'content' => $request->content,
            'image' => $imagePath,
            'category' => 'Dakwah',
            'admin' => auth()->user()->name ?? 'Admin',
        ]);

        return redirect()->route('admin.dakwah.index')->with('success', 'Kegiatan Dakwah berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Dakwah::findOrFail($id);
        return view('backend.dakwah.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = Dakwah::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($data->image) {
                Storage::disk('public')->delete($data->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $data->image;
        }

        $data->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'date' => $request->date,
            'content' => $request->content,
            'image' => $imagePath,
            'category' => 'Dakwah',
            'admin' => auth()->user()->name ?? 'Admin',
        ]);

        return redirect()->route('admin.dakwah.index')->with('success', 'Kegiatan Dakwah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = Dakwah::findOrFail($id);
        if ($data->image) {
            Storage::disk('public')->delete($data->image);
        }
        $data->delete();

        return redirect()->route('admin.dakwah.index')->with('success', 'Kegiatan Dakwah berhasil dihapus');
    }
}
