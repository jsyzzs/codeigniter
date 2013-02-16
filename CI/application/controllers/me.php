<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *MY_Memcach  Controller
 * --------------------------------------
 * Author       : $Author$
 * Revision     : $Revision$
 * Date         : $Date$
 * Position     : $HeadURL$
 *
 */

class  Me extends CI_Controller {
  
  function __construct()
  {
    parent::__construct();
  }
  	/**
     * memcache调用 
     */
    
  	public function index()
	  {
	  	echo "222";
	   }
  	function set()
	{
	 	$this->load->driver('cache', array('adapter' => 'file', 'backup' => 'memcache'));
   	 	$this->cache->save('foo', 'bar123', 10);
		var_dump($this->cache->get('foo'));
	}
 
	function  get()
	{
		$this->cache->memcached->get('foo');
	}
}