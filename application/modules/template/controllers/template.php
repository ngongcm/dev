<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {
	
function frontend($data){
	$this->load->view('frontend_view',$data);
}


}


?>