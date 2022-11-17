<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution_Partner extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table ='solution_partners';
    protected $fillable =['image'];
}
