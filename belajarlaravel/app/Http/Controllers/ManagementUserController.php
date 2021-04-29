<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        //return "Halo ini adalah method index, dalam Controller ManagementUser.":
        //return "Method ini nnatinya akan digunakan untuk mengambil semua data user";
        $nama = "ezra alannathaniel"; 
        $pelajaran = ["Pemrogaman web", "kalkulus", "algoritma"];

        return view('home', compact('nama', 'pelajaran'));
    }


    //di sini isis controller Management User
}
