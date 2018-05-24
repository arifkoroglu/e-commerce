<?php

namespace App\Http\Controllers\theme;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
       $isim= 'arif';
       $isimler = ['arif','numan','berk','tuncay','uğur','tuğçe'];
       $kullanicilar = [

         ['id'=>1, 'kullanici_adi'=>'arif'],
           ['id'=>2, 'kullanici_adi'=>'numan'],
           ['id'=>3, 'kullanici_adi'=>'berk'],
           ['id'=>4, 'kullanici_adi'=>'tuğce'],
           ['id'=>5, 'kullanici_adi'=>'uğur'],
           ['id'=>6, 'kullanici_adi'=>'isa']
       ];

        return view('index',compact('isimler','isim','kullanicilar'));
    }
}
