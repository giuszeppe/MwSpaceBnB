<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'active'
    ];

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
