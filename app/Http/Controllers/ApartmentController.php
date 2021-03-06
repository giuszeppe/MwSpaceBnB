<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


function forgetById($collection, $id)
{
    foreach ($collection as $key => $item) {
        if ($item->id == $id) {
            $collection->forget($key);
            break;
        }
    }
    return $collection;
}

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $apartments = Apartment::query()
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
        return view('homepage', compact('apartments'));
    }
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
        $servizi = DB::table('servizi')->get();
        return view('appartamenti.create', compact("servizi"));
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
                    'immagine' => 'required|image|mimes:png,jpg|max:5000',
                    'servizi' => "array",
                    'servizi.*' => 'string|distinct|max:255',
                    'serviziDefault' => 'array',
                    'serviziDefault.*' => 'string|distinct|max:255',
                    'latitude' => 'numeric|nullable',
                    'longitude' => 'numeric|nullable',
                ]);
                if (!array_key_exists('servizi', $validated)) {
                    $validated['servizi'] = [];
                }
                $validated['serviziDefault'] = !array_key_exists('serviziDefault', $validated) ? [] : $validated['serviziDefault'];

                $extension = $request->file('immagine')->extension();
                auth()->user()->apartments()->create($validated);
                $apartment_id = auth()->user()->apartments()->orderByDesc('created_at')->first()->id;
                $new_apartment = Apartment::find($apartment_id);
                $request->file('immagine')->storeAs('public/apartmentImage',  $apartment_id . '.' . $extension);

                $new_apartment->update([
                    'immagine' => Storage::url('apartmentImage/' . $apartment_id . '.' . $extension),
                    'servizi_aggiuntivi' => implode(',', array_merge($validated['servizi'], $validated['serviziDefault']))
                ]);
                return redirect()->route('apartment.index')->with(['type' => 'success', 'message' => 'Appartamento creato']);
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
        if ($user != null) {
            if ($apartment->visitors->count() == 0) {
                $user->visited()->attach($apartment->id);
            }
            foreach ($apartment->visitors as $visitor) {
                if ($user->id == $visitor->id) {
                    break;
                } else {
                    $user->visited()->attach($apartment->id);
                }
            }
        }
        return view('appartamenti.detail', compact('apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        $serviziColl = DB::table('servizi')->get();
        $servizi = [];
        foreach ($serviziColl as $servizio) {
            $servizi[] = $servizio->nome_servizio;
        }
        return view('appartamenti.edit', compact('apartment', 'servizi'));
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
            'title' => 'string|max:255|nullable',
            'numero_stanze' => 'numeric|gt:0|nullable',
            'numero_bagni' => 'numeric|gt:0|nullable',
            'numero_letti' => 'numeric|gt:0|nullable',
            'metri_quadrati' => 'numeric|gt:0|nullable',
            'indirizzo' => 'string|max:255|nullable',
            'latitude' => 'numeric|nullable',
            'longitude' => 'numeric|nullable',
            'immagine' => 'image|mimes:png,jpg|max:1024|nullable',
            'servizi' => "array|nullable",
            'servizi.*' => 'string|distinct|max:255|nullable',
            'active' => "nullable",
            'serviziDefault' => 'array|nullable',
            'serviziDefault.*' => 'string|distinct|max:255|nullable'
        ]);
        $validated['servizi_aggiuntivi'] = [];
        if (array_key_exists('servizi', $validated)) {
            $validated['servizi_aggiuntivi'] = $validated['servizi'];
        }
        if (array_key_exists('serviziDefault', $validated)) {
            $validated['servizi_aggiuntivi'] = array_merge($validated['servizi_aggiuntivi'], $validated['serviziDefault']);
        }
        $validated['servizi_aggiuntivi'] = implode(',', $validated['servizi_aggiuntivi']);

        $validated['active'] = array_key_exists('active', $validated) ? 1 : 0;

        if ($request->hasFile('immagine')) {
            if ($request->file('immagine')->isValid()) {
                $extension = $request->file('immagine')->extension();
                $request->file('immagine')->storeAs('public/apartmentImage',  $apartment->id . '.' . $extension);
                $validated['immagine'] = Storage::url('apartmentImage/' . $apartment->id . '.' . $extension);
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

        Storage::delete('public/apartmentImage/' . explode('/', $apartment->immagine)[3]);
        $apartment->delete();
        return redirect()->route('apartment.index')->with(['type' => 'success', 'message' => 'Appartamento eliminato con successo']);
    }
    public function stat(Apartment $apartment)
    {
        return view('appartamenti.stats.stat', compact('apartment'));
    }

    public function message(Request $request, Apartment $apartment)
    {
        $validated = $request->validate([
            'email_mittente' => "required|email|string|max:255",
            'corpo' => "required|string"
        ]);
        $apartment->messages()->create($validated);
        return back()->with(['type' => 'success', 'message' => 'Messaggio inviato']);
    }

    public function postSearch(Request $request)
    {
        $order = null;

        $validated = $request->validate([
            'indirizzo' => 'string|max:255|nullable',
            'latitude' => 'numeric|nullable',
            'longitude' => 'numeric|nullable',
            'title' => 'string|max:255|nullable',
            'numero_bagni' => 'numeric|gt:0|nullable',
            'numero_letti' => 'numeric|gt:0|nullable',
            'numero_stanze' => 'numeric|gt:0|nullable',
            'metri_quadrati' => 'numeric|gt:0|nullable',
            'servizi' => '',
            'order' => 'string|nullable',
            'distance' => 'string|nullable'
        ]);
        $condArray = [];
        foreach (array_keys($validated) as $key) {
            $value = $validated[$key];
            if ($value != null) {
                if (explode('_', $key)[0] == "numero" || explode('_', $key)[0] == 'metri') {
                    if ($validated[$key] != null) {
                        $condArray[] = [$key, '>=', $validated[$key]];
                    }
                }
                if ($key == "servizi") {
                    foreach ($validated[$key] as $servizio) {
                        $condArray[] = ['servizi_aggiuntivi', 'like', '%' . $servizio . "%"];
                    }
                }
                if ($key == 'title') {
                    $condArray[] = ['title', 'like', '%' . $validated[$key] . "%"];
                }
            }
        }
        $condArray[] = ['active', '=', 1];

        $validated['order'] = isset($validated['order']) ? $validated['order'] : null;
        $distance = isset($validated['distance']) ? intVal($validated['distance']) : 1;





        if ($validated['order'] != null) {
            $order = $validated['order'];
            $explodedOrder = explode('_', $order);
            $orderBy = $explodedOrder[0] . '_' . $explodedOrder[1];
            $verso = $explodedOrder[2];
            $apartments = Apartment::where($condArray)->orderBy($orderBy, $verso)->get();
        } else {
            $apartments = Apartment::where($condArray)->get();
        }
        $request->session()->flashInput($validated);
        $servizi = DB::table('servizi')->get();

        $coordinates = ['latitude' => 43.13, 'longitude' => 12.2883];

        if (isset($validated['latitude']) && isset($validated['longitude'])) {
            $coordinates = ['latitude' => $validated['latitude'], 'longitude' => $validated['longitude']];
            $apartByDistance = Apartment::getByDistance($validated['latitude'], $validated['longitude'], $distance);

            if ($apartByDistance != []) {
                $found_apartments = collect([]);
                foreach ($apartByDistance as $found) {
                    $id = $found->id;
                    if ($apartments->contains($id)) {
                        $found_apartments->push($apartments->find($id));
                    }
                }
                $apartments = $found_apartments;
            } else {
                $apartments = collect([]);
            }
        } else if ($apartments->first() != null) {
            $coordinates = ['latitude' => $apartments->first()->latitude, 'longitude' => $apartments->first()->longitude];
        }
        return view('search', compact('servizi', 'apartments', 'order', 'coordinates', 'distance'));
    }
    public function getSearch()
    {
        $order = null;
        $distance = null;
        $apartments = Apartment::where('active', 1)->take(5)->get();
        $servizi = DB::table('servizi')->get();
        if ($apartments->first() != null) {
            $coordinates = ['latitude' => $apartments->first()->latitude, 'longitude' => $apartments->first()->longitude];
        } else {
            $coordinates = ['latitude' => 43.13, 'longitude' => 12.2883];
        }
        return view('search', compact('servizi', 'apartments', 'coordinates', 'order', 'distance'));
    }
}
