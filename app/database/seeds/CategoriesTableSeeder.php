<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
            $rootWeb = Category::create(['name' => 'Ünlü']);
            $rootWeb = Category::create(['name' => 'Şehir']);
            $rootWeb = Category::create(['name' => 'Sporcu']);
            $rootWeb = Category::create(['name' => 'Araba']);
            $rootWeb = Category::create(['name' => 'Komik']);
            $rootWeb = Category::create(['name' => 'Diğer']);
	}

}