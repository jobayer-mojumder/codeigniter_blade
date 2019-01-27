<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{

    public function index()
    {
        $data['title'] = "This is a Dynamic Title.";
        echo $this->blade->view()->make('welcome_message', $data);

    }

    public function custom()
    {
        $data['title'] = "This is a Dynamic Title from different folder view.";
        echo $this->blade->view()->make('admin.index', $data);

    }
}
