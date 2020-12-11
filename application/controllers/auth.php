<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_pengguna');
        $this->load->helper('url');
    }

    public function index()
    {
        if (!isset($_SESSION['role_id'])) {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');    
        } elseif ($_SESSION['role_id'] == '1'){
            redirect('dashboard_prd');
        } elseif ($_SESSION['role_id'] == '2'){
            redirect('dashboard_pmb');
        }
    }
    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->model_pengguna->get($username);
        if (empty($user)) {
            $this->session->set_flashdata('message', 'Belum terdaftar');
            redirect('auth');
        } else {
            if (($password) == $user['password']) {
                $session = array('username' => $user['username'] , 'role_id' => $user['role_id']);
                $this->session->set_userdata($session);
                if ($user['role_id'] == '1') {
                    redirect('dashboard_prd');
                }
                else if ($user['role_id'] == '2') {
                    redirect('dashboard_pmb');
                }
            } else {
                $this->session->set_flashdata('error', 'Password anda tidak sesuai');
                redirect('auth');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }

    /*public function login(){
        
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username wajib diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required',[
            'required' => 'Password wajib diisi!'
        ]);
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        }else{
            $auth = $this->model_auth->cek_login();

            if($auth == FALSE){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username/Password Anda Salah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('auth/login');
            }else{
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('role_id',$auth->role_id);
                switch($auth->role_id){
                    case 1 : redirect('admin/dashboard_adm');
                    break;
                    case 2 : redirect('dashboard');
                    break;
                    default: break;
                }
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }*/
}