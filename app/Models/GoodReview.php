<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodReview extends Model
{
    use HasFactory;

    protected $table='good_reviews';
    protected $fillable=['name','feedback','image'];
}
