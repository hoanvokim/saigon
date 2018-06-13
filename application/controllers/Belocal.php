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
        $this->load->model('news_model');
        $this->load->library('loaddata');
    }

    public function index()
    {
        $data['items'] = $this->loaddata->view_all($this->news_model);
        $data['active_tab'] = 'belocal';
        $this->load->view('belocal', $data);
    }

    public function post($slug)
    {
        $data['item'] = $this->loaddata->view_by_slug($this->news_model,$slug);
        $data['suggests'] = $this->news_model->show_recent_post($slug);
        $data['active_tab'] = 'belocal';
        $this->load->view('post', $data);
    }
}
