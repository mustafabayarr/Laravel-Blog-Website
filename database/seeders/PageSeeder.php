<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['Hakkımızda', 'Kariyer', 'Vizyonumuz', 'Misyonumuz'];
        $count=0;
        foreach ($pages as $page) {
            $count++;
            DB::table('pages')->insert([
                'title' => $page,
                'slug' => Str::slug($page, "-"),
                'image' => 'https://cdn.searchenginejournal.com/wp-content/uploads/2018/04/businesses-need-seo-1520x800.png',
                'content' => 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan
                              mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir
                              matbaacının bir hurufat numune kitabı oluşturmak üzere
                              bir yazı galerisini alarak karıştırdığı 1500lerden beri
                              endüstri standardı sahte metinler olarak kullanılmıştır.
                              Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda
                              pek değişmeden elektronik dizgiye de sıçramıştır. 1960larda
                              Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması i
                              le ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri
                              içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.',
                'order' => $count,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
