<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Linan;

class LinansTableSeeder extends Seeder{
	public function run(){
		DB::table('linans')->truncate();
		Linan::create([
			'name'=>'hello',
		]);
	}
}