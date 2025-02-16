<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

// CRUD resource controller gestisce la risorsa
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        $data = [
            'comics' => $comics
        ];
        // rappresentazione grafica in comics.index
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        $data = $request->validated();
        $data = $request->all();

        // VALIDAZIONE
        // $request->validate([
        //     'title' => 'required|string|min:3|max:255',
        //     'description' => 'string|nullable',
        //     'price' => 'integer|nullable|min:0',
        //     'series' => 'string|nullable',
        // ]);
        // dd($data);
        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->series = $data['series'];
        $comic->price = $data['price'];
        $comic->description = $data['description'];

        // OPPURE $comic->fill($data) CON QUESTO METODO NON HO BISOGNO DI INSERIRE I DATI UNO PER VOLTA COME QUI SOPRA
        $comic->save();

        // reindirizzo dopo aver creato il record a comics.show
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);
        if ($comic === null) {
            abort(404);
            // possiamo anche reindirizzare in un altra pagina se non trova il record
            //   return redirect()->route('welcome')
        }

        // dd($comic);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data = $request->validated();
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
