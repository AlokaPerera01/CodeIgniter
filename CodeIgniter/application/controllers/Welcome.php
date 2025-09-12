<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{   $data=[];
		$data['title']='Page Title';
		$data['heading']='Welcome to infovistar';
		$data['main_content']="About_us";
		//$this->load->view('welcome_message');
		//echo "Welcome to CodeIgniter<br>";
		//echo "This is the ICT 413 code. :)";

        $this->load->view('innerpages/template',$data);

	}

    public function test()
	{
		echo "this is the method for view controllers";
	}

    public function user_details($name, $age)
	{
     echo "My name is ".$name." and I am ".$age." years old.";
	}
    
	public function About_us(){
		$data=array(
		'title' => 'ICT413', 'heading' => 'About Us','message' => 'Welcome CodeIgniter');
		$this->load->view('About_us', $data);
	}

	public function static_content(){
		$data=array(
			'message'=>'This is a simple example of a static view in CodeIgniter.');
		$this->load->view('static_content',$data);
	}
    
}
