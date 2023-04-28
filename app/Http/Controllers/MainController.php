<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getHome()
    {
        return view('index');
    }

    public function getTuyenDung()
    {
        return view('recruitment');
    }

    public function getAboutUs()
    {
        return view('about-us');
    }

    public function getNews()
    {
        return view('news');
    }

    public function getNewsDetail($slug)
    {
        return view('news-detail');
    }

    public function getSearch(Request $request)
    {
        return view('search', ["search" => $request->search]);
    }

    public function getDangKyChinhChu()
    {
        return view('dang-ky-chinh-chu');
    }

    public function getChonGoiCuoc()
    {
        return view('chon-goi-cuoc');
    }

    public function getHoanTat()
    {
        return view('hoan-tat');
    }

    public function getThongTinKhachHang()
    {
        return view('thong-tin-khach-hang');
    }

    public function getHuongDan()
    {
        return view('huong-dan');
    }
}
