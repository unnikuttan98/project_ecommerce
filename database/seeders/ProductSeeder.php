<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        [
		"name"=>"LG mobile",
		"price"=>"200",
		"description"=>"a smart phone with 4gb ram",
		"catagory"=>"mobile",
        "gallery"=>"https://tse3.mm.bing.net/th?id=OIP.LXgeC3vOkAPnfTqqyy8kIAHaHa&pid=Api&P=0&w=300&h=300"
		 ],
		  [
		"name"=>"Oppo mobile",
		"price"=>"300",
		"description"=>"a smart phone with 8gb ram",
		"catagory"=>"mobile",
        "gallery"=>"https://tse1.mm.bing.net/th?id=OIP.txpwNxAOgNpStrT-BVeTggHaIq&pid=Api&P=0&w=300&h=300"
		 ],
		  [
		"name"=>" Panasonic Tv",
		"price"=>"400",
		"description"=>"a smart Display",
		"catagory"=>"tv",
        "gallery"=>"https://in.images.search.yahoo.com/images/view;_ylt=AwrwJUVlNgBhDB8AJYC9HAx.;_ylu=c2VjA3NyBHNsawNpbWcEb2lkAzJkOTgyMDc0MDY4OWQ4YjFlZGE4NTU5ZjA1YmRkNmM5BGdwb3MDMTAEaXQDYmluZw--?back=https%3A%2F%2Fin.images.search.yahoo.com%2Fsearch%2Fimages%3Fp%3Dpanasonic%2Btv%26ei%3DUTF-8%26type%3DC214IN885D20160504%26fr%3Dmcafee%26fr2%3Dsa-gp-in.images.search%26tab%3Dorganic%26ri%3D10&w=600&h=450&imgurl=www.gizbot.com%2Fimg%2F2016%2F01%2Fpanasonic-tv-21-1453384255.jpg&rurl=https%3A%2F%2Fwww.gizbot.com%2Fhome-entertainment%2Fnews%2Fpanasonic-launches-led-tv-with-sharper-picture-technology-030951.html&size=24.6KB&p=panasonic+tv&oid=2d9820740689d8b1eda8559f05bdd6c9&fr2=sa-gp-in.images.search&fr=mcafee&tt=Panasonic+launches+LED+TV+with+sharper+picture+technology+-+Gizbot+News&b=0&ni=120&no=10&ts=&tab=organic&sigr=17nsdhXOP9Bk&sigb=rz2qMXiYWDpB&sigi=DHqHUBwrro_h&sigt=z8JaW9CUt9np&.crumb=LicuKKw0avn&fr=mcafee&fr2=sa-gp-in.images.search&type=C214IN885D20160504"
		 ],
		  [
		"name"=>"LG mobile",
		"price"=>"200",
		"description"=>"a smart phone with 4gb ram",
		"catagory"=>"mobile",
        "gallery"=>"https://tse3.mm.bing.net/th?id=OIP.LXgeC3vOkAPnfTqqyy8kIAHaHa&pid=Api&P=0&w=300&h=300"
		 ],
		  [
		"name"=>"LG mobile",
		"price"=>"200",
		"description"=>"a smart phone with 4gb ram",
		"catagory"=>"mobile",
        "gallery"=>"https://tse3.mm.bing.net/th?id=OIP.LXgeC3vOkAPnfTqqyy8kIAHaHa&pid=Api&P=0&w=300&h=300"
		 ],
        ]);
    }
}
