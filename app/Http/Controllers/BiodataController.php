<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    public static function biodata()
    {
        return view('biodata_alka', [
            "tittle" => Biodata::getDataTittle(1),
            "nama" => Biodata::getDataBiodata(2),
            "tanggal_lahir" => Biodata::getDataBiodata(3),
            "kampus" => Biodata::getDataBiodata(4),
            "usia" => Biodata::getDataBiodata(5),
            "agama" => Biodata::getDataBiodata(6),
            "tempat_lahir" => Biodata::getDataBiodata(7),
            "cita" => Biodata::getDataBiodata(8),
            "sd" => Biodata::getDataBiodata(9),
            "smp" => Biodata::getDataBiodata(10),
            "smk" => Biodata::getDataBiodata(11)
        ]);
    }
    
    public static function komentar()
    {
        return view('komentar', [
            "tittle" => Biodata::getDataTittle(2)
        ]);
    }

    public static function halamanAwal()
    {
        return view('halaman_utama', [
            "tittle" => Biodata::getDataTittle(3)
        ]);
    }
}
