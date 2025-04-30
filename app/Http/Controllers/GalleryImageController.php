<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryImageStoreRequest;
use App\Http\Requests\GalleryImageUpdateRequest;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class GalleryImageController extends Controller
{
    public function index(Request $request)
    {
        //$request->validated();
        $query = GalleryImage::query()->where('title', 'like', '%'.$request->search.'%');
        $galleryImages = $query->paginate(10);

        return view('gallery-images.index', compact('galleryImages'));

    }

    public function create()
    {
        return view('gallery-images.edit');
    }

    public function store(GalleryImageStoreRequest $request)
    {
        $request->validated();

        $galleryImage = new GalleryImage();
        $galleryImage->title = $request->title;
        $galleryImage->file_name = self::uploadImage($request);
        $galleryImage->weight = $request->weight;
        $galleryImage->save();

        return redirect()->route('gallery-images.index')->with('success', '¡Felicitaciones! Otra vida cambiada :)');
    }

    public function showGallery()
    {
        $galleryImages = GalleryImage::all();
        return view('gallery-images.gallery', compact('galleryImages'));
    }

    public function edit(int $id)
    {
        $galleryImage = GalleryImage::find($id);
        
        if(!$galleryImage) abort(404);

        return view('gallery-images.edit', compact('galleryImage'));
    }

    public function update(GalleryImageUpdateRequest $request, int $id)
    {
        $request->validated();

        $galleryImage = GalleryImage::find($id);

        if(!$galleryImage) abort(404);

        $galleryImage->title = $request->title;
        $galleryImage->weight = $request->weight;
        
        if($request->hasFile('image') && $galleryImage->image) 
        {
            Storage::disk('public')->delete($galleryImage->image);
            $galleryImage->image = self::uploadImage($request);
        }
        $galleryImage->save();

        return redirect()->route('gallery-images.index');
    }

    public function destroy(string $id)
    {
        //
    }

    // Funciones auxiliares

    private function uploadImage(Request $request) 
    {
        $image = $request->file('image');
        $imageName = 'img_' . time() . '.' . $image->extension();
        $image->storeAs(GalleryImage::IMAGE_PATH, $imageName, 'public');

        $intenventionImg = Image::read($image);
        $thumbnail = $intenventionImg->cover(50, 50);

        $thumbnailPath = GalleryImage::THUMBNAIL_PATH . $imageName;
        Storage::disk('public')->put($thumbnailPath, (string) $thumbnail->toJpeg(quality: 85));

        return $imageName;
    }
}
