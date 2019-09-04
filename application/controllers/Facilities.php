<?php

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 5/19/18
 * Time: 9:48 PM
 */
class Facilities extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('activities_board_model');
		$this->load->library('loaddata');
	}

	public function index()
	{
		$data['active_tab'] = 'facilities';
		$data['items'] = $this->loaddata->view_all($this->activities_board_model);
		$this->load->view('facilities', $data);
	}

}
