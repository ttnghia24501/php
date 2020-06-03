<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
//       $products = Product:: all();
//       foreach ($products as $p){
//           $slug = \Illuminate\Support\Str::slug($p->__get("product_name"));
       $featureds = product::orderBy("updated_at","DESC")->limit(8)-->get();
       $lastest_1 = product::orderBy("create_at","DESC")->limit(3)->get();
       $lastest_2 =
       }
   }
}
