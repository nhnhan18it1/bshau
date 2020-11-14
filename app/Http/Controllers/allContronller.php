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
    public function appointment(Request $request)
    {
        $meta_desc = "Chuyên các dịch vụ về siêu âm màu với nhiều năm kinh nghiệm trong nghề, Siêu âm 5D,nội soi,xét nghiệm sinh hóa huyết học miến dịch...";
        $meta_keywords="Phòng khám Hậu Bình, Siêu âm 5D,nội soi,xét nghiệm ";
        $meta_title = "Siêu âm 5D,nội soi,xét nghiệm ";
        $url_canonical = $request->url();
        return view('appointment')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }

    public function about(Request $request)
    {
        $meta_desc = "Chuyên các dịch vụ về siêu âm màu với nhiều năm kinh nghiệm trong nghề, Siêu âm 5D,nội soi,xét nghiệm sinh hóa huyết học miến dịch...";
        $meta_keywords="Phòng khám Hậu Bình, Siêu âm 5D,nội soi,xét nghiệm ";
        $meta_title = "Siêu âm 5D,nội soi,xét nghiệm ";
        $url_canonical = $request->url();
        return view('about')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }

    public function blog(Request $request)
    {
        $meta_desc = "Chuyên các dịch vụ về siêu âm màu với nhiều năm kinh nghiệm trong nghề, Siêu âm 5D,nội soi,xét nghiệm sinh hóa huyết học miến dịch...";
        $meta_keywords="Phòng khám Hậu Bình, Siêu âm 5D,nội soi,xét nghiệm ";
        $meta_title = "Siêu âm 5D,nội soi,xét nghiệm ";
        $url_canonical = $request->url();
        return view('blog')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function blog_single(Request $request)
    {
        $meta_desc = "Chuyên các dịch vụ về siêu âm màu với nhiều năm kinh nghiệm trong nghề, Siêu âm 5D,nội soi,xét nghiệm sinh hóa huyết học miến dịch...";
        $meta_keywords="Phòng khám Hậu Bình, Siêu âm 5D,nội soi,xét nghiệm ";
        $meta_title = "Siêu âm 5D,nội soi,xét nghiệm ";
        $url_canonical = $request->url();
        return view('blog-single')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function contact(Request $request)
    {
        $meta_desc = "Chuyên các dịch vụ về siêu âm màu với nhiều năm kinh nghiệm trong nghề, Siêu âm 5D,nội soi,xét nghiệm sinh hóa huyết học miến dịch...";
        $meta_keywords="Phòng khám Hậu Bình, Siêu âm 5D,nội soi,xét nghiệm ";
        $meta_title = "Siêu âm 5D,nội soi,xét nghiệm ";
        $url_canonical = $request->url();
        return view('contact')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function department(Request $request)
    {
        $meta_desc = "Chuyên các dịch vụ về siêu âm màu với nhiều năm kinh nghiệm trong nghề, Siêu âm 5D,nội soi,xét nghiệm sinh hóa huyết học miến dịch...";
        $meta_keywords="Phòng khám Hậu Bình, Siêu âm 5D,nội soi,xét nghiệm ";
        $meta_title = "Siêu âm 5D,nội soi,xét nghiệm ";
        $url_canonical = $request->url();
        return view('department')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function doctor(Request $request)
    {
        $meta_desc = "Chuyên các dịch vụ về siêu âm màu với nhiều năm kinh nghiệm trong nghề, Siêu âm 5D,nội soi,xét nghiệm sinh hóa huyết học miến dịch...";
        $meta_keywords="Phòng khám Hậu Bình, Siêu âm 5D,nội soi,xét nghiệm ";
        $meta_title = "Siêu âm 5D,nội soi,xét nghiệm ";
        $url_canonical = $request->url();
        return view('doctor')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
    public function pricing(Request $request)
    {
        $meta_desc = "Chuyên các dịch vụ về siêu âm màu với nhiều năm kinh nghiệm trong nghề, Siêu âm 5D,nội soi,xét nghiệm sinh hóa huyết học miến dịch...";
        $meta_keywords="Phòng khám Hậu Bình, Siêu âm 5D,nội soi,xét nghiệm ";
        $meta_title = "Siêu âm 5D,nội soi,xét nghiệm ";
        $url_canonical = $request->url();
        return view('pricing')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));
    }
}
