<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert(
            [
                [
                    'code' => 'LETAN',
                    'name' => 'Phòng Lễ tân',
                ],
                [
                    'code' => 'KINHDOANH',
                    'name' => 'Phòng Kinh doanh',

                ],
                [
                    'code' => 'BAOVE',
                    'name' => 'Phòng Bảo vệ',
                ],
                [
                    'code' => 'NHANSU',
                    'name' => 'Phòng Nhân sự',
                ],
                [
                    'code' => 'KITHUAT',
                    'name' => 'Phòng Kĩ thuật',
                ],
            ]
        );
    }
}
