<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Login Controller
 * --------------------------------------
 * Author       : $Author$
 * Revision     : $Revision$
 * Date         : $Date$
 * Position     : $HeadURL$
 *
 */

class Login extends CI_Controller {
  
  function __construct()
  {
    parent::__construct();
	$this->load->database();
    $this->load->model('loginclass');
    //Construct Code...
  }
  
  public function index()
  {
  		
    $title = 'title';
    $this->smarty->assign('title',$title);
    $this->smarty->display("login.html");
        
  }
  public function newslist()
  {
     $sql ="select * from news";
     $query = $this->db->get("news",2,0);
     $query= $query->result_array();
     print_r($query);
     exit();

  }
  public function test(){
      $this->loginclass->login('username','password','email');
  }
}

?>