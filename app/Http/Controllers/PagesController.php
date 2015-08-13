<?php namespace App\Http\Controller;

use App\Page;

class PagesController extends Controller{
    public function show($id){
        return view('pages.show')->withPages(Page::find($id))
    }
}
