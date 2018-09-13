<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class InsertUserEditPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::firstOrCreate(['key' => 'edit_users', 'table_name' => 'users']);
    }
}
