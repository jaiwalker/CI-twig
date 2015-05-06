<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		// Load the new Twig library
		$this->load->library('twig');

		// Populate your variables to be passed to the Twig template
				$data = array();
		$data['foo'] = 'This is cool!';
		$data['bar'] = 'Twig + CodeIgniter rocks!';

		// Invoke the template passing the filename, relative to the application/views directory
		$this->twig->load('template.html.twig.php', $data);


		//$this->template->add_page('home');
		//$this->template->render($this->data);
	}
}