<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {    

    public function validate_login($email, $password) {
        if($email == 'debadeep.sen@gmail.com' && $password == '') {
            return true;
        }
        return false;
    }

	public function index()
	{
        if($this->input->post('submit') === false) {
		    $this->load->view('login_view');
        }
        else {
            $e = $this->input->post('email');
            $p = $this->input->post('password');

            if($this->validate_login($e, $p) === true) {
                $this->load->view('dashboard_view');
            }
            else {
                $this->load->view('dashboard_view',['status'=>'failed']);
            }
        }
            
	}
}

?>