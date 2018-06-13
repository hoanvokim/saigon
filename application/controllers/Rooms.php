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
        $data['active_tab'] = 'rooms';
        $this->load->view('rooms', $data);
    }

    public function room($id)
    {
        $data['active_tab'] = 'rooms';
        $this->load->view('room', $data);
    }
}
