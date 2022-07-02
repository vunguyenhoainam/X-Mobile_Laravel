<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'super-admin', 'display_name' => 'Super Admin', 'group' => 'system'],
            ['name' => 'admin', 'display_name' => 'Admin', 'group' => 'system'],
            ['name' => 'employee', 'display_name' => 'Employee', 'group' => 'system'],
            ['name' => 'manager', 'display_name' => 'Manager', 'group' => 'system'],
            ['name' => 'user', 'display_name' => 'User', 'group' => 'system'],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate($role);
        }

        $permissions = [
            ['name' => 'create-user', 'display_name' => 'Create user', 'group' => 'user'],
            ['name' => 'edit-user', 'display_name' => 'Edit user', 'group' => 'user'],
            ['name' => 'show-user', 'display_name' => 'Show user', 'group' => 'user'],
            ['name' => 'delete-user', 'display_name' => 'Delete user', 'group' => 'user'],

            ['name' => 'create-role', 'display_name' => 'Create role', 'group' => 'role'],
            ['name' => 'edit-role', 'display_name' => 'Edit role', 'group' => 'role'],
            ['name' => 'show-role', 'display_name' => 'Show role', 'group' => 'role'],
            ['name' => 'delete-role', 'display_name' => 'Delete role', 'group' => 'role'],

            ['name' => 'create-category', 'display_name' => 'Create category', 'group' => 'category'],
            ['name' => 'edit-category', 'display_name' => 'Edit category', 'group' => 'category'],
            ['name' => 'show-category', 'display_name' => 'Show category', 'group' => 'category'],
            ['name' => 'delete-category', 'display_name' => 'Delete category', 'group' => 'category'],

            ['name' => 'create-product', 'display_name' => 'Create product', 'group' => 'product'],
            ['name' => 'edit-product', 'display_name' => 'Edit product', 'group' => 'product'],
            ['name' => 'show-product', 'display_name' => 'Show product', 'group' => 'product'],
            ['name' => 'delete-product', 'display_name' => 'Delete product', 'group' => 'product'],

            ['name' => 'create-coupon', 'display_name' => 'Create coupon', 'group' => 'coupon'],
            ['name' => 'edit-coupon', 'display_name' => 'Edit coupon', 'group' => 'coupon'],
            ['name' => 'show-coupon', 'display_name' => 'Show coupon', 'group' => 'coupon'],
            ['name' => 'delete-coupon', 'display_name' => 'Delete coupon', 'group' => 'coupon'],
        ];

        foreach ($permissions as $item) {
            Permission::updateOrCreate($item);
        }
    }
}
