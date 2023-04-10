<?php
class About
{
    public function index($nama = "Ahdian", $pekerjaan = "mahasiswa")
    {
        echo "Halo, nama saya $nama. Saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo "about/page";
    }
}
