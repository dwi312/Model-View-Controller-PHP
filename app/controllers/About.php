<?php

class About extends Controller
{
    public function index()
    {

        $data['judul'] = 'About';
        $data['nama'] = 'Cungkring';
        $data['pekerjaan'] = 'Mage';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
