<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;

class ArticlesTableSeeder extends Seeder{
	public function run(){
		DB::table('articles')->truncate();
		Article::create([
			'title'=>'hello',
			'user_id'=>1,
		]);
	}
}
