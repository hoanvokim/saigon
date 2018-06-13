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
        $this->load->model('room_model');
        $this->load->model('roomimages_model');
        $this->load->library('loaddata');
    }

    public function index()
    {
        $data['items'] = $this->loaddata->view_all($this->room_model);
        $data['active_tab'] = 'rooms';
        $this->load->view('rooms', $data);
    }

    public function room($slug)
    {
        $data['room'] = $this->loaddata->view_by_slug($this->room_model, $slug);
        $data['items'] = $this->loaddata->view_by_slug($this->roomimages_model, $slug);
        $data['suggests'] = $this->room_model->show_recent_rooms($slug);
        $data['active_tab'] = 'rooms';
        $this->load->view('room', $data);
    }
}
