<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "This Is Title";
        $data['content'] = 'This Is Content';
        $this->load->view('blog_view', $data);
    }
}