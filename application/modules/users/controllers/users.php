<?php
class Users extends MX_Controller 
{

function __construct() {
    parent::__construct();
}

/*
 * 1] @login
 * 2] @submit
 * 3] @pasword check
 * 4] @in_you_go => geef wel/niet toegang tot admin omgeving
*/


function login()
{
    $data['view_file'] = "loginform";
    $this->load->module('template');
    $this->template->public_one_col($data);
}

function submit()
{
	//deze is al geladen in de config file
        //$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required|max_length[30]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[30]|xss_clean|callback_password_check');
        //$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        //$this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run($this) == FALSE)
        {
                $this->login();
        }
        else
        {
            // naar de admin omgeving dashboard    
            $username = $this->input->post('username',TRUE);
            $this->_in_you_go($username);
        }
}

public function password_check($pword)
{
    $username = $this->input->post('username', TRUE);
    
    $pword = Modules::run('security/make_hash', $pword);
    
    $this->load->model('mdl_users');
    $result = $this->mdl_users->password_check($username, $pword);
    
    if ($result == FALSE)
    {
        $this->form_validation->set_message('password_check', 'Gebruikersnaam en/of wachtwoord zijn onjuist');
        return FALSE;
    }
        else
        {
            return TRUE;
        }
}

//toegang tot de admin omgeving verwijst naar dashboard
function _in_you_go($username)
{
  //geef een session variable en stuur door naar het admin paneel
  
  $query = $this->get_where_custom('username', $username);
  foreach ($query->result() as $row)
  {
      $user_id = $row->id;
  }
  
  $this->session->set_userdata('user_id', $user_id);
  //echo "hallo $user_id" ;
  redirect('dashboard/home');
}







function get($order_by){
    $this->load->model('mdl_users');
    $query = $this->mdl_users->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('mdl_users');
    $query = $this->mdl_users->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id){
    $this->load->model('mdl_users');
    $query = $this->mdl_users->get_where($id);
    return $query;
}

function get_where_custom($col, $value) {
    $this->load->model('mdl_users');
    $query = $this->mdl_users->get_where_custom($col, $value);
    return $query;
}

function _insert($data){
    $this->load->model('mdl_users');
    $this->mdl_users->_insert($data);
}

function _update($id, $data){
    $this->load->model('mdl_users');
    $this->mdl_users->_update($id, $data);
}

function _delete($id){
    $this->load->model('mdl_users');
    $this->mdl_users->_delete($id);
}

function count_where($column, $value) {
    $this->load->model('mdl_users');
    $count = $this->mdl_users->count_where($column, $value);
    return $count;
}

function get_max() {
    $this->load->model('mdl_users');
    $max_id = $this->mdl_users->get_max();
    return $max_id;
}

function _custom_query($mysql_query) {
    $this->load->model('mdl_users');
    $query = $this->mdl_users->_custom_query($mysql_query);
    return $query;
}

}