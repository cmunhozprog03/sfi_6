<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    protected $fillable = ['id_dad', 'name', 'description', 'body', 'position', 'condition', 'type', 'image', 'slug'];


}
