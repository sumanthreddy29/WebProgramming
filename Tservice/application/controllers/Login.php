<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
        $data['temp'] = 0;
		$this->load->view('header',$data);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function signin(){  
            $this->load->model('loginModel');
            if($this->session->userdata('currently_logged_in')){
                echo "already loggedin";  
                $url = 'Login/home';
                echo'
                    <script>
                        window.location.href = "'.base_url().'index.php?/'.$url.'";
                    </script>';
            }
            else {
                $res = $this->loginModel->userLogin();
                if($res->num_rows() > 0){
                    $data = array(  
                        'username' => $this->input->post('username'),  
                        'currently_logged_in' => 1  
                    );
                    $this->session->set_userdata($data);  
                    //redirect('index.php/pbo/profile');
                    $url = 'Login/home';
                    echo'
                        <script>
                            window.location.href = "'.base_url().'index.php?/'.$url.'";
                        </script>';
                }
                else{
                    $temp = array('login_error' => 'yes');
                    $this->session->set_userdata($temp);
                    //redirect('index.php/pbo/signin');
                    $url = 'Login/signin';
                    echo'
                        <script>
                            window.location.href = "'.base_url().'index.php?/'.$url.'";
                        </script>';
                }
            }
        }
        
        public function logout(){
            $this->session->sess_destroy();
            $this->load->view('index');
        }
        public function home(){
            $data['temp'] = 1;
        	$this->load->view('header',$data);
        	$this->load->view('home');
        	$this->load->view('footer');
        }
}
