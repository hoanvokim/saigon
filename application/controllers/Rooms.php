<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 5/19/18
 * Time: 9:48 PM
 */

class Rooms extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('rooms');
    }

    public function room($id)
    {
        $this->load->view('room');
    }
}
