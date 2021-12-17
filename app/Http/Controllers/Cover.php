<?php

namespace App\Http\Controllers;

use App\Library\VKAPI;

class Cover extends Controller
{
   public function index(){
       $cover = new VKAPI('47122278', 'a19e1581124aef08d9ecf4745e3868c575cbb861a0091d8b3765d7a44180fbfda0cf4a42a242f832f351e');
       $cover->setSubscribers();
       return $cover->getSubscribers();
   }
}
