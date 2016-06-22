<?php

use Illuminate\Database\Seeder;
use App\Tweet;;


class TweetTableSeeder extends Seeder {

    public function run()
    {
        Tweet::truncate();
       factory('App\Tweet',10)->create();
    }

}