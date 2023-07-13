<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name', 'cat_pic'
    ];
    public function item()
    {
        return $this->hasMany(Item::class, 'Cat_id', 'c_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
