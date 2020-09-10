<?php 
$permiso_all=[];

//permiso rol
$permiso=Permiso::create([
    'name' => 'List user',
    'slug' => 'user.index',
    'description' => 'a user can list user',
]);
$permiso_all[]=$permiso->id;
$permiso=Permiso::create([
    'name' => 'Show user',
    'slug' => 'user.show',
    'description' => 'a user can show user',
]);
$permiso_all[]=$permiso->id;
$permiso=Permiso::create([
    'name' => 'Create user',
    'slug' => 'user.create',
    'description' => 'a user can create user',
]);
$permiso_all[]=$permiso->id;
$permiso=Permiso::create([
    'name' => 'Destroy user',
    'slug' => 'user.destroy',
    'description' => 'a user can destroy user',
]);
$permiso_all[]=$permiso->id;
$permiso=Permiso::create([
    'name' => 'Edit user',
    'slug' => 'user.edit',
    'description' => 'a user can edit user',
]);
$permiso_all[]=$permiso->id;