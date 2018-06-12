<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 5/19/18
 * Time: 9:48 PM
 */
class Facilities extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('facilities');
    }

    public function facility($id)
    {
        $this->load->view('facility');
    }
}
