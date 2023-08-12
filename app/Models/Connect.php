<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Connect extends Model
{

    use HasFactory;
    protected $table='connects';
    protected $fillable=['whats','worktime','email','twlinke','inslinke','open_at', 'close_at'];
}
