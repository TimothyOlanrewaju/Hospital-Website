<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\news_letter_sub;

class news_letter_subs extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscriberRecords=[

            ['id'=>1,'email'=>'eremirasine@gmail.com','status'=>1],
            ['id'=>2,'email'=>'merryheart1660@gmail.com','status'=>1]

        ];
        News_letter_sub::insert($subscriberRecords);

    }
}
