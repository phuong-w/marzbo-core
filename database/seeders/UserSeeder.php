<?php

namespace Database\Seeders;

use App\Acl\Acl;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() > 0) {
            return false;
        }

        $superAdmin = User::withoutEvents(function () {
            return User::create([
                'name'      => 'Super Admin',
                'email'     => 'superadmin@marzbo.vn',
                'password'  => Hash::make('SuperAdmin@marzbo99')
            ]);
        });

        $admin = User::withoutEvents(function () {
            return User::create([
                'name'      => 'Admin',
                'email'     => 'admin@marzbo.vn',
                'password'  => Hash::make('Admin@marzbo99')
            ]);
        });

        $staff = User::withoutEvents(function () {
            return User::create([
                'name'      => 'Staff',
                'email'     => 'staff@marzbo.vn',
                'password'  => Hash::make('Staff@marzbo99')
            ]);
        });

        $customer = User::withoutEvents(function () {
            return User::create([
                'name'      => 'Customer',
                'email'     => 'customer@marzbo.com',
                'password'  => Hash::make('Customer@marzbo99')
            ]);
        });

        $supplier = User::withoutEvents(function () {
            return User::create([
                'name'      => 'Supplier',
                'email'     => 'supplier@marzbo.com',
                'password'  => Hash::make('Supplier@marzbo99')
            ]);
        });

        $superAdminRole = Role::findByName(Acl::ROLE_SUPER_ADMIN);
        $adminRole = Role::findByName(Acl::ROLE_ADMIN);
        $staffRole = Role::findByName(Acl::ROLE_STAFF);
        $customerRole = Role::findByName(Acl::ROLE_CUSTOMER);
        $supplierRole = Role::findByName(Acl::ROLE_SUPPLIER);

        //Sync Roles to seed accounts
        $superAdmin->syncRoles($superAdminRole);
        $admin->syncRoles($adminRole);
        $staff->syncRoles($staffRole);
        $customer->syncRoles($customerRole);
        $supplier->syncRoles($supplierRole);
    }
}
