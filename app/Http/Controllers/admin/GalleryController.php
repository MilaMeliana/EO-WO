<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Gallery = Gallery::latest()->paginate(5);


        if (empty(Auth::user()) || Auth::user()->role == 'pelanggan') {
            return redirect()->route('beranda');
        } else {
            return view('admin.gallery', compact('Gallery'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'ket' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();

        if ($image = $request->file('gambar')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }
        try {
            Gallery::create($input);

            return redirect()->route('table-gallery.index')
                ->with('success', 'Gallery created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('table-gallery.index')
                ->with('error', 'Error during the creation!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $gallery = Gallery::find($id);
        return view('admin.editgallery', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //proses input data gedung
        $request->validate([
            'ket' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = Gallery::findOrFail($id);
        // dd($request->all());

        if ($image = $request->file('gambar')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }

        $input->update([
            'ket' => $request->ket,
            'gambar' => $input['gambar'],
        ]);

        //return redirect()->back()
        return redirect()->route('table-gallery.index')
            ->with('success', 'gallery Updated successfully!');
        /**$request->validate([
            'ket' => 'required',
            'gambar' => 'required',
        ]);
        $gallery = Gallery::findOrFail($id);
        $gallery->update([
            'ket' => $request->ket,
            'gambar' => $request->gambar,
        ]);

        return redirect()->route('table-gallery.index')
                        ->with('success','Gallery created successfully.');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ////--------hapus dulu fisik file foto--------
        $gallery = Gallery::find($id);

        if (!empty($gallery->gambar)) unlink('image/' . $gallery->gambar);
        //dd($ruangan);

        $delete = Gallery::where('id', $id)->delete();
        return redirect()->back();
        /**$gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('table-gallery.index')
            ->with('success', 'Gallery deleted successfully');*/
    }
}
