<?php
  
   class Registration extends CI_Controller {
   
	
      public function index() { // singup
		$this->load->library('form_validation');		
	 	/* Validation rule */
		$this->form_validation->set_rules('first_name', 'Name', 'required');
	 	$this->form_validation->set_rules('last_name', 'Name', 'required');
	 	$this->form_validation->set_rules('email', 'Email','required');
	 	$this->form_validation->set_rules('password', 'Password','required');
	 	$this->form_validation->set_rules('phone', 'Contact Number', 'required');		 
			
         	if ($this->form_validation->run() == FALSE) { 
            $this->load->view('reg_form'); 
         								} 
         else { 
			  $this->load->model('reg_model');
			  $formArray = array(); 
			  $formArray['first_name'] = $this->input->post('first_name');
			  $formArray['last_name'] = $this->input->post('last_name');
			  $formArray['email'] = $this->input->post('email');
			  $formArray['password'] = password_hash($this->input->post('password'),PASSWORD_BCRYPT);
			  $formArray['phone'] = $this->input->post('phone');
			  $formArray['created_at'] = date('Y-m-d');
		          $this->reg_model->create($formArray);
			  $this->session->set_flashdata('msg', 'Your account is created successfully');
			  redirect(base_url().'index.php/Registration/index');
         } 
	}
	
	public function login(){
		
		$this->load->model('Reg_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == true)
		{
			$email = $this->input->post('email');
			$user  = $this->Reg_model->checkUser($email);

			if(!empty($user)){
				$password = $this->input->post('password');
				if(password_verify($password,$user['password'])== true){
					$sessArray['id'] = $user['id'];
					$sessArray['first_name'] = $user['first_name'];
					$sessArray['last_name'] = $user['last_name'];
					$sessArray['email'] = $user['email'];

					$this->session->set_userdata('user',$sessArray);
					redirect(base_url().'index.php/Registration/panel');
				}
				else{
					$this->session->flashdata('msg', 'Either email or password is incorrect. Please try again.');
					redirect(base_url().'index.php/Registration/login');
					}
			}
			else {
				$this->session->flashdata('msg', 'Either email or password is incorrect. Please try again.');
				redirect(base_url().'index.php/Registration/login');
			}
		}
		else
		{
			$this->load->view('login');
		}

			
		
	}
	public function panel(){
		$user = $this->session->userdata('user');
		$data1['user'] = $user;
		$this->load->view('pages/panel',$data1); 
	}
	public function status()
	{
		$this->load->library('form_validation');
		var_dump($this);
		// $this->form_validation->set_rules('textArea_post', 'Post Something', 'required',array('required' => $temp));
		
		// if ($this->form_validation->run() == FALSE) 
		// {
		// 	$user = $this->session->userdata('user');
		// 	$data1['user'] = $user;
		// 	//$this->load->view('pages/panel',$data1); 
		// }
		// else
		// {
		// 	$this->load->model('reg_model');
		// 	$formArray1 = array(); 
		// 	$formArray1['post'] = $this->input->post('textArea_post');
		// 	$formArray1['posted_by'] = $user['ID'];//
		// 	$this->reg_model->create1($formArray);
		// 	$this->session->set_flashdata('msg', 'Your account is created successfully');
		// 	//redirect(base_url().'index.php/Registration/panel');

		// } 
	}
	public function upload(){
		$this->login();
		$user = $this->session->userdata('user');
		$data1['user'] = $user;
        $this->load->view('Pages/panel',$data1);

	}
    public function setup_business(){
				$this->load->view('setup');
		}
		public function setin_business(){
			$this->load->view('setin');
	}
		public function vendor(){
			$this->load->view('dashboard');
	}	
			function logout(){
			 $this->session->unset_userdata('user');
			 redirect(base_url());
		 }		 
   }
?>