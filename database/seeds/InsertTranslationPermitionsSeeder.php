<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class InsertTranslationPermitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::firstOrCreate(['key' => 'browse_translates', 'table_name' => 'translations']);
        Permission::firstOrCreate(['key' => 'edit_lang_file', 'table_name' => 'translations']);
        Permission::firstOrCreate(['key' => 'add_new_keys_to_translates', 'table_name' => 'translations']);
        Permission::firstOrCreate(['key' => 'upgrade_lang_files', 'table_name' => 'translations']);
        Permission::firstOrCreate(['key' => 'export_to_db', 'table_name' => 'translations']);
        Permission::firstOrCreate(['key' => 'update_translation_in_db', 'table_name' => 'translations']);
        Permission::firstOrCreate(['key' => 'import_from_db', 'table_name' => 'translations']);
    }
}
