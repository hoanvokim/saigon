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
        $this->load->model('facilities_model');
        $this->load->library('loaddata');
    }

    public function index()
    {
        $data['items'] = $this->loaddata->view_all($this->facilities_model);
        $data['active_tab'] = 'facilities';
        $this->load->view('facilities', $data);
    }

    public function facility($id)
    {
        $data['active_tab'] = 'facilities';
        $this->load->view('facility', $data);
    }
}
