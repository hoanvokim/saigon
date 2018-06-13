<?php

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 5/19/18
 * Time: 9:49 PM
 */
class Belocal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['active_tab'] = 'belocal';
        $this->load->view('belocal', $data);
    }

    public function post($id)
    {
        $data['active_tab'] = 'belocal';
        $this->load->view('post', $data);
    }
}
