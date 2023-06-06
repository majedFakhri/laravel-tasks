<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    

    protected $fillable=['name', 'production_quantity', 'families_id','plants_id'];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
    public function family(){

        return $this->belongsTo(Family::class);
        }
}
