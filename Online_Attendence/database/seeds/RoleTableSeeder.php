<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //for admin
        $role1 = new Role;
        $role1->name = "admin";
        $role1->save();
        //for teacher
        $role2 = new Role;
        $role2->name = "teacher";
        $role2->save(); 
        //for student
        $role3 = new Role;
        $role3->name = "student";
        $role3->save();
    }
}
