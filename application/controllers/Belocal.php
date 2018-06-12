<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 5/19/18
 * Time: 9:49 PM
 */
class Belocal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('belocal');
    }
    public function post($id)
    {
        $this->load->view('post');
    }
}
