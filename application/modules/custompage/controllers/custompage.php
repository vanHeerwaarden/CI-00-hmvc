<?php
class Custompage extends MX_Controller 
{

    function __construct() 
    {
        parent::__construct();
    }

    function index()
    {
        $data = '';
        $this->load->module('template');
        //$this->template->davidconnelly($data);
        $this->template->triza($data);
    }

}