<?php

namespace crud;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
  protected $table="producto";
  protected $fillable=array('SKU','nombre','idTiend','	descripcion','⁑valor','tienda','imagen');
}
