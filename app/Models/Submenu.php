<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'menu_id','subparent_name',];

    public function menu()
    {
        return $this->belongsTo(Menus::class, 'menu_id');
    }
}