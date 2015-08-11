<?php
    use Illuminate\Database\Seeder;
    use App\Page;
    class PageTableSeeder extends Seeder{
        public function run(){
            DB::table('pages')->truncate();
            for($i=0;$i<10;$i++){
                Page::create([
                    'title'=>'title'.$i,
                    'slug'=>'first-page',
                    'body'=>'Body '.$i,
                    'user_id' => 1,
                ]);
            }
        }
    }