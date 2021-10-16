<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $table->id();
//        $table->string('name');
//        $table->string('address');
//        $table->unsignedDouble('price');
//        $table->text('detail');
//        $table->string('thumbnail');
//        $table->timestamps();
//        $table->integer('status');

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
                [
                    'id' => 1,
                    'name' => 'Chung cư CT12',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 2,
                    'name' => 'Chung cư CT13',
                    'address' => 'Quận đống đa',
                    'price' => 15000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2618562298338-76e589b18b544282e9c0b2e764ee1aee-637699764962487163.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 3,
                    'name' => 'Chung cư CT14',
                    'address' => 'Quận đống đa',
                    'price' => 16000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/12/z2575890527397-3afec7c8af06bae6c21aefdfcc5f233b-637696263813708135.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 4,
                    'name' => 'Chung cư CT15',
                    'address' => 'Quận đống đa',
                    'price' => 12000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 5,
                    'name' => 'Chung cư CT16',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 6,
                    'name' => 'Chung cư CT17',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 7,
                    'name' => 'Chung cư CT18',
                    'address' => 'Quận đống đa',
                    'price' => 20000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 8,
                    'name' => 'Chung cư CT19',
                    'address' => 'Quận đống đa',
                    'price' => 11000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 9,
                    'name' => 'Chung cư CT112',
                    'address' => 'Quận đống đa',
                    'price' => 19000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 10,
                    'name' => 'Chung cư CT122',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 11,
                    'name' => 'Chung cư CT19',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 12,
                    'name' => 'Chung cư CT12',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 13,
                    'name' => 'Chung cư CT12',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 14,
                    'name' => 'Chung cư CT12',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 15,
                    'name' => 'Chung cư CT12',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 16,
                    'name' => 'Chung cư CT12',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 17,
                    'name' => 'Chung cư CT12',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 18,
                    'name' => 'Chung cư CT12',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 19,
                    'name' => 'Chung cư CT12',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ],[
                    'id' => 20,
                    'name' => 'Chung cư CT12',
                    'address' => 'Quận đống đa',
                    'price' => 13000000,
                    'detail' => 'Chủ Đầu Tư trực tiếp bán chung cư Xã Đàn- Khâm Thiên-tôn thất tùng-ngã tư sở, ở ngay, tách sổ hồng vĩnh viễn- Diện tích: 28m2- 35m2- 48m2- 50m2 -54m2 -55m2 - 60m2  -',
                    'thumbnail' => 'https://img.homedy.com/store/images/2021/10/16/z2850288885280-4fd7672da3948ac3c9bc5642fa337296-637699726107759158.jpg_200x200.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'status' => 1
                ]
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
