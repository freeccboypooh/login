<?php

namespace App\RolesypermisosModel;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $fillable = [
        'name', 'slug', 'description',
    ];
    public function roles(){
        return $this->belongsToMany('App\RolesypermisosModel\Role')->withTimesTamps();
    }
}
