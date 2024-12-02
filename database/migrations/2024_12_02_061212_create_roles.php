<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role; 
use Spatie\Permission\Models\Permission; 
use App\Models\User; 
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $role1 = Role::create(['name' => 'admin']); 
        $role2 = Role::create(['name' => 'bibliotecario']); 
        $role3 = Role::create(['name' => 'usuario']); 
        //Permisos para el administrador que tiene el rol 1
        Permission::create(['name' => 'admin.autores'])->assignRole($role1); 
        Permission::create(['name' => 'admin.editoriales'])->assignRole($role1); 
        Permission::create(['name' => 'admin.categorias'])->assignRole($role1); 
        Permission::create(['name' => 'admin.materiales'])->assignRole($role1); 
        Permission::create(['name' => 'admin.prestamos'])->assignRole($role1); 
        Permission::create(['name' => 'admin.reservas'])->assignRole($role1); 
        //Permisos para el bibliotecario que tiene el rol 2
        Permission::create(['name' => 'admin.autores'])->assignRole($role2); 
        Permission::create(['name' => 'admin.editoriales'])->assignRole($role2); 
        Permission::create(['name' => 'admin.categorias'])->assignRole($role2); 
        Permission::create(['name' => 'admin.materiales'])->assignRole($role2); 
        Permission::create(['name' => 'admin.prestamos'])->assignRole($role2); 
        Permission::create(['name' => 'admin.reservas'])->assignRole($role2); 
        //Permisos para el usuario que tiene el rol 3
        Permission::create(['name' => 'admin.prestamos'])->assignRole($role3); 
        Permission::create(['name' => 'admin.reservas'])->assignRole($role3); 
        $user = App\Models\User::find(8); 
        $user1 = App\Models\User::find(3); 
        $user2 = App\Models\User::find(4); 
        $user3 = App\Models\User::find(6); 
        $user4 = App\Models\User::find(7); 
        $user->assignRole($role1); 
        $user1->assignRole($role2); 
        $user2->assignRole($role2); 
        $user3->assignRole($role3); 
        $user4->assignRole($role3); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
