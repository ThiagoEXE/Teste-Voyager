<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeederCustom extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'super-admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Super-Admin',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'moderator']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Moderator',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'developer']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Developer',
            ])->save();
        }
    }
}
