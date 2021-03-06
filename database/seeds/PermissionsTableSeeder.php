<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->truncate();

        Permission::create([
            'code' => 'manage-user',
            'title' => 'Quyền quản lý user',    
        ]);
        Permission::create([
            'code' => 'manage-manga',
            'title' => 'Quyền quản lý truyện',      
        ]);
        Permission::create([
            'code' => 'manage-report',
            'title' => 'Quyền quản lý report',      
        ]);
        Permission::create([
            'code' => 'manage-category',
            'title' => 'Quyền quản lý truyện',      
        ]);
        Permission::create([
            'code' => 'manage-role',
            'title' => 'Quyền quản lý quyền',      
        ]);
        Permission::create([
            'code' => 'manage-reader',
            'title' => 'Quyền quản lý độc giả',      
        ]);
        Permission::create([
            'code' => 'manage-database',
            'title' => 'Quản lý dữ liệu',      
        ]);   
    }
}
