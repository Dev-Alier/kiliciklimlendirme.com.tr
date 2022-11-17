<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Category extends Model
{
    use HasFactory;

    protected $table ='service_categories';
    protected $fillable =['name','image','description','slug'];
}
