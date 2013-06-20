<?php
class Dashboard extends MX_Controller 
{

function __construct() 
{
    parent::__construct();
    Modules::run('security/make_sure_is_admin');
}

function home()
{
    echo "welkom dashboard";
}

}