<?php
class Security extends MX_Controller 
{

    function __construct() 
    {
        parent::__construct();
    }

    function make_hash($password)
    {
        //$password = "hello";
        $safe_pass = $this->awesome_unbreakable_super_mega_hash($password);
        //http://localhost/davidconnelly/public_html/security/make_hash
        echo $safe_pass;
    }

    function awesome_unbreakable_super_mega_hash($password)
    {
        $new_pass = $password.="TriZA";
        return $new_pass;
    }

    function make_sure_is_admin()
    {
        $user_id = $this->session->userdata('user_id');

        if (!is_numeric($user_id))
        {
            redirect(base_url());
        }

    }
}