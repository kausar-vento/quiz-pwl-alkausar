<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    // use HasFactory;
    public static function getDataBiodata($number)
    {
        if ($number == 2) {
            $data = "MUHAMAD AL KAUSAR RAMADHAN";
        } elseif ($number == 3) {
            $data = "13 November 2002";
        } elseif ($number == 4) {
            $data = "Politeknik Negeri Malang";
        } elseif ($number == 5) {
            $data = "19 Tahun";
        } elseif ($number == 6) {
            $data = "Islam";
        } elseif ($number == 7) {
            $data = "Depok";
        } elseif ($number == 8) {
            $data = "Web Programmer atau Software Engginer";
        } elseif ($number == 9) {
            $data = "SD Yaspen Tugu Ibu";
        } elseif ($number == 10) {
            $data = "SMP Yaspen Tugu Ibu";
        } elseif ($number == 11) {
            $data = "SMK Taruna Bhakti";
        } else {
            $data = "Unknown";
        }
        return $data;
    }
    public static function getDataTittle($num)
    {
        $data = ["Alka", "KOMENTAR", "Halaman Utama"];
        return $data[$num-1];
    }
}
