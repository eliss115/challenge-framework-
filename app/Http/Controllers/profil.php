<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profil extends Controller
{
    public function index(){
        
        $nama = "ELIS";
        $bio = "Hallo Saya Elis. Saya lahir di Karawang pada 6 Juli 2003. Saya Merupakan Mahasiswa Semester 5 Universitas Singaperbangsa Karawang pada Program Studi Informatika Fakultas Ilmu Komputer. Sebelum saya menempuh pendidikan di Universitas Singaperbangsa Karawang, saya bersekolah di SMAN 1 Tempuran Karawang .Funfact yang ada pada diri saya yaitusaya gapernah ngobrol kalau lagi sendirian. Saya merupakan anak pertama dari tiga bersaudara.";
        $alamat = "Dusun Pagadungan Desa Pagadungan RT/RW 001/001 Kecamatan Tempuran Kabupaten Karawang 41385";
        $hobi = ["Nonton Konser","Jalan-Jalan"];
        return view('biodata',['nama'=>$nama, 'bio'=>$bio, 'alamat'=>$alamat, 'hobi'=>$hobi]);
    }
}