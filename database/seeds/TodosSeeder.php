<?php

use Illuminate\Database\Seeder;
use App\user;
use App\RolesypermisosModel\Role;
use App\RolesypermisosModel\Permiso;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::where('email','admin@gmail.com')->first();
        if($useradmin){
            //nada
        }else{
            $useradmin=User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
            ]);
        }
        //role admin
        $roleAdmin=Role::where('name','Admin')->first();
        if($roleAdmin){
            //nada
        }else{
            $roleAdmin=Role::create([
                'name' => 'Admin',
                'slug' => 'admin',
                'description' => 'administrador',
                'full-access' => 'yes'
            ]);
        }
        $useradmin->roles()->sync([$roleAdmin->id]);

        // permisos
        $permiso_all=[];

        //permiso rol
        $permiso=Permiso::create([
            'name' => 'List role',
            'slug' => 'role.index',
            'description' => 'a user can list role',
        ]);
        $permiso_all[]=$permiso->id;
        $permiso=Permiso::create([
            'name' => 'Show role',
            'slug' => 'role.show',
            'description' => 'a user can show role',
        ]);
        $permiso_all[]=$permiso->id;
        $permiso=Permiso::create([
            'name' => 'Create role',
            'slug' => 'role.create',
            'description' => 'a user can create role',
        ]);
        $permiso_all[]=$permiso->id;
        $permiso=Permiso::create([
            'name' => 'Destroy role',
            'slug' => 'role.destroy',
            'description' => 'a user can destroy role',
        ]);
        $permiso_all[]=$permiso->id;
        $permiso=Permiso::create([
            'name' => 'Edit role',
            'slug' => 'role.edit',
            'description' => 'a user can edit role',
        ]);
        $permiso_all[]=$permiso->id;
        $permiso_all=[];
 
        //permiso user
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

        $roleAdmin->permisos()->sync($permiso_all);

        
  
    }
}
