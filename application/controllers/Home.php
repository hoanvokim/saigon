<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 5/19/18
 * Time: 10:24 AM
 */
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('form');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['active_tab'] = 'home';
		$this->load->view('home',$data);
	}
}
