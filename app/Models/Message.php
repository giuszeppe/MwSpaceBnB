<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_mittente',
        'corpo'
    ];
    public function apartment()
    {
        return $this->belongsTo(Apartment::class,'id_appartamento');
    }
}
