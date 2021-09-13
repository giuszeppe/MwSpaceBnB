<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = auth()->user()->apartments;
        return view('appartamenti.stats.stats', compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appartamenti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('immagine')) {
            if ($request->file('immagine')->isValid()) {
                $validated = $request->validate([
                    'title' => 'required|string|max:255',
                    'numero_stanze' => 'required|numeric|gt:0',
                    'numero_bagni' => 'required|numeric|gt:0',
                    'numero_letti' => 'required|numeric|gt:0',
                    'metri_quadrati' => 'required|numeric|gt:0',
                    'indirizzo' => 'required|string|max:255',
                    'immagine' => 'required|image|mimes:png,jpg|max:1024',
                    'servizi' => "array",
                    'servizi.*' => 'string|distinct|max:255'
                ]);
                $extension = $request->file('immagine')->extension();
                auth()->user()->apartments()->create($validated);
                $apartment_id = auth()->user()->apartments()->orderByDesc('created_at')->first()->id;
                $request->file('immagine')->storeAs('apartmentImage',  $apartment_id . '.' . $extension);
                Apartment::find($apartment_id)->update(['immagine' => Storage::url('apartmentImage/' . $apartment_id . '.' . $extension)]);
                return back()->with('success', 'Apartment Created');
            }
        }
        //$request->file("image")->store('apartments.images');
        //$validated->immagine = Storage::url('')
        //auth()->user()->apartments()->create($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        return view('appartamenti.edit', compact('apartment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        $apartment->delete();
        return back()->with('message', 'Apartment deleted successfull');
    }
}
