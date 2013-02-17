<?php
 if (! defined('BASEPATH')) exit('no direct base');
 
		$config['template_dir'] = APPPATH.'views';
		$config['compile_dir'] = FCPATH.'template_c';
		$config['caching_dir'] = FCPATH.'cache';
		$config['config_dir'] = FCPATH.'config';
		$config['caching'] = false;
		$config['cache_lifetime'] = '60';
		$config['template_ext'] = '.html';