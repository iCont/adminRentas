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
        'phone',
        'email'
    ];

    public function apartments(){
        // un inquilino habita un departamento
        return $this->belongsTo(CatApartments::class,"id_apartment");
    }

    public function status_renter(){
        return $this->belongsTo(CatStatusRenters::class,"id_status_renter");
    }
}
