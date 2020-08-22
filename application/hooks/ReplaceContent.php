<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class ReplaceContent{
	function replaceString(){
		$this->CI =& get_instance();
		$this->CI->output->get_output();
		//str_replace('codi', replace, subject)
		
	}
}