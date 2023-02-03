<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas2 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function mata_kuliah() {
        $data['title'] = 'Mata Kuliah';
        $data['mata_kuliah'] = [
            (object) [
                'nama_matakuliah' => "Pemrograman 4",
                'sks' => '3'
            ],
            (object) [
                'nama_matakuliah' => "Matematika",
                'sks' => '3'
            ],
            (object) [
                'nama_matakuliah' => "Fisika",
                'sks' => '3'
            ],
        ];
        $this->load->view('mata_kuliah', $data);
    }

    public function form_registrasi() {
        $data['title'] = 'Form Registrasi';
        $this->load->view('form_registrasi', $data);
    }

    public function mahasiswa() {
        $data['title'] = 'Mahasiswa';
        $data['mahasiswa'] = [
            (object) [
                'nama_mahasiswa' => "Budi",
                'nim' => '102930393',
                'umur' => 25,
                'kota_asal' => 'Bandung'
            ],
            (object) [
                'nama_mahasiswa' => "Anto",
                'nim' => '232323',
                'umur' => 24,
                'kota_asal' => 'Jakarta'
            ],
            (object) [
                'nama_mahasiswa' => "Andi",
                'nim' => '244535335',
                'umur' => 30,
                'kota_asal' => 'Surabaya'
            ],
        ];
        $this->load->view('mahasiswa', $data);
    }

    public function login() {
        $data['title'] = 'Login';
        $this->load->view('login', $data);
    }
}