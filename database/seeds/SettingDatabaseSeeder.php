<?php

use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{

    public function run()
    {
        \App\SiteSetting::create([

            'name'=>'siteName',
            'value'=>'Mawk3 3karat',
            'slug'=>'إسم الموقع',
            'type'=>'0',

        ]);
        \App\SiteSetting::create([

            'name'=>'mobile',
            'value'=>'01096742565',
            'slug'=>'الموبايل',
            'type'=>'0',

        ]);
        \App\SiteSetting::create([

            'name'=>'description',
            'value'=>'description ',
            'slug'=>'الوصف',
            'type'=>'1',

        ]);
        \App\SiteSetting::create([

            'name'=>'keyWords',
            'value'=>'keyWords',
            'slug'=>'الكلمات الداليه',
            'type'=>'1',

        ]);
        \App\SiteSetting::create([

            'name'=>'facebook',
            'value'=>'https://www.facebook.com/ahmed.isa.77377',
            'slug'=>'الفيس بوك',
            'type'=>'0',

        ]);
        \App\SiteSetting::create([

            'name'=>'youtube',
            'value'=>' https://www.youtube.com/channel/UCl0-SpXrmhWCIDU7V9nvWEw?view_as=subscriber',
            'slug'=>'اليوتيوب',
            'type'=>'0',

        ]);
        \App\SiteSetting::create([

            'name'=>'twitter',
            'value'=>'https://twitter.com/ahmedis97400559',
            'slug'=>'تويتر',
            'type'=>'0',

        ]);
        \App\SiteSetting::create([

            'name'=>'image',
            'value'=>'default.png',
            'slug'=>'صوره بديله',
            'type'=>'0',

        ]);
        \App\SiteSetting::create([

            'name'=>'slider',
            'value'=>'default.png',
            'slug'=>'صوره الغلاف',
            'type'=>'2',

        ]);
        \App\SiteSetting::create([

            'name'=>'address',
            'value'=>'المنوفيه/شبين الكوم ',
            'slug'=>'العنوان',
            'type'=>'0',

        ]);
        \App\SiteSetting::create([

            'name'=>'email',
            'value'=>'3kar.test',
            'slug'=>'ايميل',
            'type'=>'0',

        ]);

        \App\SiteSetting::create([

            'name'=>'footer',
            'value'=>'All rights reserved | This Website is made with  ',
            'slug'=>'حقوق الموقع',
            'type'=>'0',

        ]);
    }
}
