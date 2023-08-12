<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WashingPoint extends Model
{
    use HasTranslations;
    use HasFactory;
    public $translatable = ['title','address'];
   protected $fillable=['address','title','number'];
   protected $table='washing_points';
}
