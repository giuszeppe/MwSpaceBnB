<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'numero_stanze',
        'numero_bagni',
        'numero_letti',
        'metri_quadrati',
        'indirizzo',
        'immagine',
        'servizi_aggiuntivi',
        'active',
        'latitude',
        'longitude',
    ];
    public static function getByDistance($lat, $lng, $distance)
    {
        $results = DB::select(DB::raw('
        SELECT id, ( 6371 * acos( cos( radians(' . $lat . ') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(' . $lng . ') ) + sin( radians(' . $lat . ') ) * sin( radians(latitude) ) ) ) 
        AS distance 
        FROM apartments
        HAVING distance < ' . $distance . ' 
        ORDER BY distance'));
        return $results;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class, 'id_appartamento');
    }
    public function visitors()
    {
        return $this->belongsToMany(User::class);
    }
}
