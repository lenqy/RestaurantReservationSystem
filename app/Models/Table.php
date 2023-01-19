<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [
        'name',
        'guest_number',
        'table_number'
    ];
    use HasFactory;

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
