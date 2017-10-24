<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    //
    protected $fillable= [ 'title','imagePath','description','category','starring','author','price','pages','ISBN'];
}
