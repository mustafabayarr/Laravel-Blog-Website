<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class Homepage extends Controller
{
    public function index(){
        $data['categories']=Category::inRandomOrder()->get(); //Rastgele bir şekilde verileri alıyor.Kategoriler anasayfaya gönderildi.
        return view('front.homepage',$data);
    }
}
