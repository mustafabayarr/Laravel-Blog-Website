<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//Models
use App\Models\Category;
use App\Models\Article;
use App\Models\Page;

use function Sodium\increment;


class Homepage extends Controller
{
    public function __construct(){ //Kod tekrarını yapmamak için share kullandık diğer function larla paylaşıyor
        view()->share('pages',Page::orderBy('order','ASC')->get());
        view()->share('categories',Category::inRandomOrder()->get());
    }
    public function index(){
        $data['articles']=Article::orderBy('created_at','DESC')->paginate(2); // paginate anasayfada kaç tane yazı olacağını gösteririr.
       // $data['categories']=Category::inRandomOrder()->get(); //Rastgele bir şekilde verileri alıyor.Kategoriler anasayfaya gönderildi.
        return view('front.homepage',$data);
    }

    public function single($category,$slug){
        $category=Category::whereSlug($category)->first() ?? abort(403,'Böyle bir kategori bulunamadı');
        $article=Article::where('slug',$slug)->whereCategoryId($category->id)->first() ?? abort(403,'Böyle bir yazı bulunamadı');
        $article->increment('hit');
        $data['article']=$article;
       // $data['categories']=Category::inRandomOrder()->get(); //Rastgele bir şekilde verileri alıyor.Kategoriler anasayfaya gönderildi.
        return view('front.single',$data);
    }

    public function category($slug){
       // $data['categories']=Category::inRandomOrder()->get(); //Rastgele bir şekilde verileri alıyor.Kategoriler anasayfaya gönderildi.
        $category=Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir kategori bulunamadı');
        $data['category']=$category;
        $data['articles']=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(2);
        return view('front.category',$data);
    }

    public function page($slug){
        $page=Page::whereSlug($slug)->first() ?? abort(403,'Böyle bir sayfa bulunamadı');
        $data['page']=$page;
        return view('Front.page',$data);
    }
}
