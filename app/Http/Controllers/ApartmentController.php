<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Message;
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
                if(!array_key_exists('servizi',$validated)){
                    $validated['servizi'] = [];
                }
                $extension = $request->file('immagine')->extension();
                auth()->user()->apartments()->create($validated);
                $apartment_id = auth()->user()->apartments()->orderByDesc('created_at')->first()->id;
                $new_apartment = Apartment::find($apartment_id);
                $request->file('immagine')->storeAs('public/apartmentImage',  $apartment_id . '.' . $extension);

                $new_apartment->update([
                    'immagine' => Storage::url('apartmentImage/' . $apartment_id . '.' . $extension),
                    'servizi_aggiuntivi' => implode(',', $validated['servizi'])
                ]);
                return redirect()->route('apartment.index')->with(['type'=> 'success', 'message' => 'Appartamento creato']);
            }
        }
        abort(500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        $user = auth()->user();
        if($user != null){
            if($apartment->visitors->count() == 0){
                $user->visited()->attach($apartment->id);
            }
            foreach($apartment->visitors as $visitor){
                if($user->id == $visitor->id){
                    break;
                }
                else{
                    $user->visited()->attach($apartment->id);
                }
            }
        }
        return view('appartamenti.detail',compact('apartment'));
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
        $validated = $request->validate([
            'title' => 'string|max:255',
            'numero_stanze' => 'numeric|gt:0',
            'numero_bagni' => 'numeric|gt:0',
            'numero_letti' => 'numeric|gt:0',
            'metri_quadrati' => 'numeric|gt:0',
            'indirizzo' => 'string|max:255',
            'immagine' => 'image|mimes:png,jpg|max:1024',
            'servizi' => "array",
            'servizi.*' => 'string|distinct|max:255',
            'active' => ""
        ]);
        if(array_key_exists('servizi',$validated)){
            $validated['servizi_aggiuntivi'] = implode(',',$validated['servizi']);
        }
        $validated['active'] = array_key_exists('active',$validated) ? 1 : 0;

        if ($request->hasFile('immagine')) {
            if ($request->file('immagine')->isValid()) {
                $extension = $request->file('immagine')->extension();
                $request->file('immagine')->storeAs('public/apartmentImage',  $apartment->id . '.' . $extension);
                $validated['immagine'] = Storage::url('apartmentImage/'. $apartment->id . '.' . $extension);
            }
        }
        $apartment->update($validated);
        return redirect()->route('apartment.index')->with(['type' => 'success', 'message' => 'Appartamento aggiornato']);
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
        return redirect()->route('apartment.index')->with(['type'=>'message', 'message'=>'Appartamento eliminato con successo']);
    }
    public function stat(Apartment $apartment)
    {
        return view('appartamenti.stats.stat',compact('apartment'));
    }

    public function message(Request $request, Apartment $apartment)
    {
        $validated = $request->validate([
            'email_mittente' => "required|email|string|max:255",
            'corpo' => "required|string"
        ]);
        $apartment->messages()->create($validated);
        return back()->with(['type'=>'success','message'=>'Messaggio inviato']);
    }
}