<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category',
        'description'
    ];

    use HasFactory;

    public function menus(){
        return $this->belongsToMany(Menu::class)-> withPivot('qty', 'sub_total');
    }

}
