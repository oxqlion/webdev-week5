<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'role'];

    protected $table = 'heros';

    public function items()
    {
        return $this->belongsToMany(Item::class, 'hero_item', 'hero_id', 'item_id');
    }
}
