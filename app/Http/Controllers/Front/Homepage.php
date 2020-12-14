<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//Models
use App\Models\Category;
use App\Models\Article;


class Homepage extends Controller
{
    public function index(){
        $data['articles']=Article::orderBy('created_at','DESC')->get();
        $data['categories']=Category::inRandomOrder()->get(); //Rastgele bir şekilde verileri alıyor.Kategoriler anasayfaya gönderildi.
        return view('front.homepage',$data);
    }
}
