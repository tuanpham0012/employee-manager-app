<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
              "country_code" => "VN",
              "name" => "Hà Nội",
              "lat" => null,
              "lng" => null,
              "zipcode" => "100000",
              "code" => "75",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Hồ Chí Minh",
              "lat" => null,
              "lng" => null,
              "zipcode" => "650000",
              "code" => "93",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Quảng Bình",
              "lat" => null,
              "lng" => null,
              "zipcode" => "560000",
              "code" => "25",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Quảng Nam",
              "lat" => null,
              "lng" => null,
              "zipcode" => "570000",
              "code" => "54",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Quảng Ninh",
              "lat" => null,
              "lng" => null,
              "zipcode" => "520000",
              "code" => "49",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Sóc Trăng",
              "lat" => null,
              "lng" => null,
              "zipcode" => "360000",
              "code" => "22",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Sơn La",
              "lat" => null,
              "lng" => null,
              "zipcode" => "700000",
              "code" => "45",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Thái Bình",
              "lat" => null,
              "lng" => null,
              "zipcode" => "410000",
              "code" => "14",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Thừa Thiên Huế",
              "lat" => null,
              "lng" => null,
              "zipcode" => "530000",
              "code" => "34",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Trà Vinh",
              "lat" => null,
              "lng" => null,
              "zipcode" => "940000",
              "code" => "38",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Tuyên Quang",
              "lat" => null,
              "lng" => null,
              "zipcode" => "300000",
              "code" => "46",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Vĩnh Long",
              "lat" => null,
              "lng" => null,
              "zipcode" => "890000",
              "code" => "48",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Vĩnh Phúc",
              "lat" => null,
              "lng" => null,
              "zipcode" => "280000",
              "code" => "1",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Điện Biên",
              "lat" => null,
              "lng" => null,
              "zipcode" => "380000",
              "code" => "79",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Đắk Lắk",
              "lat" => null,
              "lng" => null,
              "zipcode" => "640000",
              "code" => "8",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Đắk Nông",
              "lat" => null,
              "lng" => null,
              "zipcode" => "630000",
              "code" => "86",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Đồng Tháp",
              "lat" => null,
              "lng" => null,
              "zipcode" => "870000",
              "code" => "15",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Hà Tĩnh",
              "lat" => null,
              "lng" => null,
              "zipcode" => "480000",
              "code" => "87",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Hải Phòng",
              "lat" => null,
              "lng" => null,
              "zipcode" => "180000",
              "code" => "42",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Khánh Hòa",
              "lat" => null,
              "lng" => null,
              "zipcode" => "920000",
              "code" => "17",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Long An",
              "lat" => null,
              "lng" => null,
              "zipcode" => "330000",
              "code" => "62",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Lạng Sơn",
              "lat" => null,
              "lng" => null,
              "zipcode" => "420000",
              "code" => "20",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Ninh Thuận",
              "lat" => null,
              "lng" => null,
              "zipcode" => "290000",
              "code" => "40",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Quảng Ngãi",
              "lat" => null,
              "lng" => null,
              "zipcode" => "200000",
              "code" => "44",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Tiền Giang",
              "lat" => null,
              "lng" => null,
              "zipcode" => "860000",
              "code" => "19",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Đà Nẵng",
              "lat" => null,
              "lng" => null,
              "zipcode" => "550000",
              "code" => "84",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Bình Dương",
              "lat" => null,
              "lng" => null,
              "zipcode" => "590000",
              "code" => "24",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Đồng Nai",
              "lat" => null,
              "lng" => null,
              "zipcode" => "810000",
              "code" => "26",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Bà Rịa Vũng Tàu",
              "lat" => null,
              "lng" => null,
              "zipcode" => "790000",
              "code" => "77",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Cần Thơ",
              "lat" => null,
              "lng" => null,
              "zipcode" => "900000",
              "code" => "4",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Bình Thuận  ",
              "lat" => null,
              "lng" => null,
              "zipcode" => "800000",
              "code" => "95",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Lâm Đồng",
              "lat" => null,
              "lng" => null,
              "zipcode" => "240000",
              "code" => "68",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Kiên Giang",
              "lat" => null,
              "lng" => null,
              "zipcode" => "580000",
              "code" => "33",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Bắc Ninh",
              "lat" => null,
              "lng" => null,
              "zipcode" => "790000",
              "code" => "70",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Thanh Hóa",
              "lat" => null,
              "lng" => null,
              "zipcode" => "440000 - 450000",
              "code" => "94",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Nghệ An",
              "lat" => null,
              "lng" => null,
              "zipcode" => "430000",
              "code" => "80",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Hải Dương",
              "lat" => null,
              "lng" => null,
              "zipcode" => "170000",
              "code" => "35",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Gia Lai",
              "lat" => null,
              "lng" => null,
              "zipcode" => "600000",
              "code" => "67",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Bình Phước",
              "lat" => null,
              "lng" => null,
              "zipcode" => "830000",
              "code" => "6",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Hưng Yên",
              "lat" => null,
              "lng" => null,
              "zipcode" => "160000",
              "code" => "2",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Bình Định",
              "lat" => null,
              "lng" => null,
              "zipcode" => "820000",
              "code" => "27",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Bắc Giang",
              "lat" => null,
              "lng" => null,
              "zipcode" => "220000",
              "code" => "52",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Hòa Bình",
              "lat" => null,
              "lng" => null,
              "zipcode" => "350000",
              "code" => "64",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "An Giang",
              "lat" => null,
              "lng" => null,
              "zipcode" => "880000",
              "code" => "89",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Tây Ninh",
              "lat" => null,
              "lng" => null,
              "zipcode" => "840000",
              "code" => "82",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Thái Nguyên",
              "lat" => null,
              "lng" => null,
              "zipcode" => "250000",
              "code" => "72",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Lào Cai",
              "lat" => null,
              "lng" => null,
              "zipcode" => "670000",
              "code" => "12",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Nam Định",
              "lat" => null,
              "lng" => null,
              "zipcode" => "460000 - 470000",
              "code" => "10",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Bến Tre",
              "lat" => null,
              "lng" => null,
              "zipcode" => "930000",
              "code" => "60",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Cà Mau",
              "lat" => null,
              "lng" => null,
              "zipcode" => "970000",
              "code" => "92",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Ninh Bình",
              "lat" => null,
              "lng" => null,
              "zipcode" => "660000",
              "code" => "36",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Phú Thọ",
              "lat" => null,
              "lng" => null,
              "zipcode" => "620000",
              "code" => "37",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Phú Yên",
              "lat" => null,
              "lng" => null,
              "zipcode" => "510000",
              "code" => "58",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Hà Nam",
              "lat" => null,
              "lng" => null,
              "zipcode" => "400000",
              "code" => "11",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Kon Tum",
              "lat" => null,
              "lng" => null,
              "zipcode" => "390000",
              "code" => "56",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Quảng Trị",
              "lat" => null,
              "lng" => null,
              "zipcode" => "950000",
              "code" => "51",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Hậu Giang",
              "lat" => null,
              "lng" => null,
              "zipcode" => "910000",
              "code" => "30",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Bạc Liêu",
              "lat" => null,
              "lng" => null,
              "zipcode" => "260000",
              "code" => "83",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Yên Bái",
              "lat" => null,
              "lng" => null,
              "zipcode" => "320000",
              "code" => "31",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Lai Châu",
              "lat" => null,
              "lng" => null,
              "zipcode" => "850000",
              "code" => "91",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Hà Giang",
              "lat" => null,
              "lng" => null,
              "zipcode" => "310000",
              "code" => "66",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Bắc Kạn",
              "lat" => null,
              "lng" => null,
              "zipcode" => "960000",
              "code" => "74",
              "country_id" => 244
            ],
            [
              "country_code" => "VN",
              "name" => "Cao Bằng",
              "lat" => null,
              "lng" => null,
              "zipcode" => "270000",
              "code" => "96",
              "country_id" => 244
            ]
          ]);
    }
}
