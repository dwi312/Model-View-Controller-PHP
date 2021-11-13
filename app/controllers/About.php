<?php

class About
{
    public function index($nama = 'Cungkring', $pekerjaan = 'Pelaut')
    {
        echo "Hello, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}
