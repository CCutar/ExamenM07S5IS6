<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'cognoms', 'club_id'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
