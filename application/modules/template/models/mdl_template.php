<?php

class Mdl_tasks extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get($order_by){
        $this->db->order_by($order_by);
        $query = $this->db->get('tasks');
        return $query;
    }
    }
?>
