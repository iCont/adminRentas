<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renters extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'app',
        'apm',
        'id_apartment',
        'arrival_date',
        'departure_date',
        'id_status_renter',
        'email'
    ];
}
