<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageListRequest;
use App\Http\Requests\PageShowRequest;
use App\Http\Requests\PageStoreRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PageListRequest $request)
    {
        $request->validated();
        $query = Page::query()
            ->where('title', 'like', '%'.$request->search.'%')
            ->orderBy('updated_at', 'desc');
            
        $pages = $query->paginate(10);

        return view('pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PageStoreRequest $request)
    {
        $data = $request->validated();
        if(!isset($data['slug']))
            $data['slug'] = str_replace(' ', '-', strtolower($data['title']));

        Page::create($data);

        return redirect()->route('pages.index')->with('success', '¡Página creada con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PageShowRequest $request)
    {
        $slug = $request->validated()['slug'];

        if (!Page::where('slug', $slug)->exists()) {
            abort(404);
        }
        
        $page = Page::where('slug', $slug)->first();

        return view('pages.show', compact('page'));}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $page = Page::find($id);
        
        if(!$page) abort(404);
        
        return view('pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'slug' => 'required',
        ]);

        $page = Page::find($id);
        
        if(!$page) abort(404);

        $page->title = $request->title;
        $page->content = $request->content;
        $page->slug = $request->slug;
        $page->save();

        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Page::find($id)->delete();
        return redirect()->route('pages.index');
    }
}
