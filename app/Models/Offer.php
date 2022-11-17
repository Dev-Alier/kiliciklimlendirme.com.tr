<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers';
    public $guarded = ['id'];

    public function domain(){
        return $this->belongsTo(Domain::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
