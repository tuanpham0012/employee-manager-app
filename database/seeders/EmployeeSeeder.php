<?php

namespace Database\Seeders;

use DateTime;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 1000; $i++){
            DB::table('employees')->insert(
                [
                    'code' => 'NV-' . sprintf("%04d", $i + 1),
                    'name' => $faker->name(),
                    'department_id' => rand(1, 5),
                    'title' => 'Nhân viên',
                    'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                    'gender' => rand(0, 2),
                    'cmnd' => $faker->isbn10(),
                    'license_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                    'city_id' => rand(1, 63),
                    'address' => '',
                    'phone' => $faker->e164PhoneNumber(),
                    'landline_phone' => $faker->e164PhoneNumber(),
                    'email' => $faker->freeEmail(),
                    'bank_number' => $faker->isbn10(),
                    'bank_id' => rand(1, 12),
                    'bank_branch' => 'Chi nhánh 1',
                    'is_customer' => rand(0, 1),
                    'is_supplier' => rand(0, 1),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
            );
        }
    }
}
