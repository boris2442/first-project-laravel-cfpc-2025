<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 use HasFactory;
 //protected $fillable=[ //il s'agit de l'insertion de mass
  //  'title',
 //   'category',
  //  'price',
 //];
protected $guarded=[];
}
