<?php

/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 5/19/18
 * Time: 9:49 PM
 */
class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['active_tab'] = 'contact';
        if ($this->input->post('btn_send')) {

            $contact['protocol'] = $this->config->item('protocol');
            $contact['charset'] = $this->config->item('charset');
            $contact['mailtype'] = $this->config->item('mailtype');
            $contact['wordwrap'] = $this->config->item('wordwrap');
            $this->email->initialize($contact);

            $sender_mail = $this->input->post('sender_email');
            $sender_name = $this->input->post('sender_name');

            $sender_subject = $this->input->post('sender_subject');
            $sender_content = $this->input->post('sender_content') . "\n Email : " . $sender_mail;

            $this->email->from($sender_mail, $sender_name);

            $this->email->to($this->config->item('contact_email'));

            $this->email->subject($sender_subject);
            $this->email->message($sender_content);
            if (!$this->email->send()) {
                $this->load->view('error');
            }
            else {
                $this->load->view('success');
            }
        }
        else {
            $this->load->view('contact', $data);
        }
    }
}
