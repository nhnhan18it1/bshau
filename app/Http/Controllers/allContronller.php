<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allContronller extends Controller
{
    public function index(Request $request)
    {
        $meta_desc = "Chuyên các dịch vụ về siêu âm màu với nhiều năm kinh nghiệm trong nghề, Siêu âm 5D,nội soi,xét nghiệm sinh hóa huyết học miến dịch...";
        $meta_keywords="Phòng khám Hậu Bình, Siêu âm 5D,nội soi,xét nghiệm ";
        $meta_title = "Siêu âm 5D,nội soi,xét nghiệm ";
        $url_canonical = $request->url();
        return view('index')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
}
