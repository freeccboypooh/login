<?php

namespace App\RolesypermisosModel;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //desde aqui 
    protected $fillable = [
        'name', 'slug', 'description','full_acccess',
    ];

    public function users(){
        return $this->belongsToMany('App\user')->withTimesTamps();
    }
    public function permisos(){
        return $this->belongsToMany('App\RolesypermisosModel\Permiso')->withTimesTamps();
    }
}
