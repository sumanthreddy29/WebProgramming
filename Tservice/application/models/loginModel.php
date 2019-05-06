<?php
    class loginModel extends CI_Model{
        function __construct()
        {
            parent:: __construct();
        }
        function userLogin(){
            $username = $this->input->post('username');
            $pass =  $this->input->post('password');
            $result = $this->db->get_where('users', array('username' => $username,'password' => $pass));
            return $result;
        }
    }
?>