<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Menu extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
 public function index(){
    $this->load->view('menu');
    }
}
