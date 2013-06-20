<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nofun extends MX_Controller {

    function index(){
echo "dit is nofun";
	}
        
        
    function sayhello($firstname, $lastname){
        echo "Hello. How do you do $firstname $lastname?";
        
    }    
    
    function sayhello2($firstname){
        echo "Hello. How do you do $firstname?";
        
    }  
}
