<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $fillable=['name', 'nationalNumber', 'addresses_id'];

    

    public function lands()
    {
        return $this->hasMany(Land::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
