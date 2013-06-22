<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller 
{

    function public_one_col($data)
    {
            $this->load->view('public_one_col', $data);
    }
    
    function triza($data)
    {
            $this->load->view('triza', $data);
    }
    
    
}
