<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert(
            [
                [
                    'def_name' => 'VPBANK',
                    'name' => 'VPBANK',
                ],
                [
                    'def_name' => 'BIDV',
                    'name' => 'BIDV',

                ],
                [
                    'def_name' => 'ACBANK',
                    'name' => 'ACBANK',

                ],
                [
                    'def_name' => 'VIBBANK',
                    'name' => 'VIBBANK',

                ],
                [
                    'def_name' => 'TECHCOMBANK',
                    'name' => 'TECHCOMBANK',

                ],
                [
                    'def_name' => 'VIETINBANK',
                    'name' => 'VIETINBANK',

                ],
                [
                    'def_name' => 'VIETCOMBANK',
                    'name' => 'VIETCOMBANK',

                ],
                [
                    'def_name' => 'AGRIBANK',
                    'name' => 'AGRIBANK',

                ],
                [
                    'def_name' => 'SACOMBANK',
                    'name' => 'SACOMBANK',

                ],
                [
                    'def_name' => 'MB',
                    'name' => 'MB Bank',

                ],
                [
                    'def_name' => 'ACB',
                    'name' => 'AC Bank',

                ],
                [
                    'def_name' => 'Eximbank',
                    'name' => 'Eximbank',
                ]
            ]
        );
    }
}
