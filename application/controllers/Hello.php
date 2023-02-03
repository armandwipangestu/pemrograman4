<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
    public function index() {
        echo "Hello World!";
    }

    public function show() {
        echo "I Make The World Better Place";
    }
}