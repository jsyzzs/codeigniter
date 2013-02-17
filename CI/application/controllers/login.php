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
    //Construct Code...
  }
  
  public function index()
  {
  		
            $title = 'title';
            $this->smarty->assign('title',$title);
            $this->smarty->display("login.html");
        
  }
}

?>