<?php 
   class User extends CI_controller {
       
    function create()
    {

        $this->load->model('User_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('status','required');

        if($this->form_validation->run() == false){
            $this->load->view('add_user');
        }else{
            $formArray = array() ;

            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            if($this->input->post('status') == 'active'){
                $formArray['active'] = 1;
            }else{
                $formArray['active'] = 0;
            }
           

            $this->User_model->create($formArray);
            $this->session->set_flashdata('success','User created successfully');

            redirect(base_url() .'index.php/user/home');
        }
    }

       function home(){
        $this->load->model('User_model');
        $users= $this->User_model->getAll();
        $data= array();
        $data['users']=$users;

        $this->load->view('home',$data);
       }
       function view($userid){
        $this->load->model('User_model');
        $users=$this->User_model->getUser($userid); 
        $data= array();
        $data['users']=$users;
        $this->load->view('view_user',$data);
       }
       function delete($userid){
        $this->load->model('User_model');
        $users=$this->User_model->getUser($userid); 

        if(empty($users)){
            redirect(base_url() .'index.php/user/home'); 
        }
        $this->User_model->deleteUser($userid);
        redirect(base_url() .'index.php/user/home'); 
    }
       function edit($userid){
        $this->load->model('User_model');
        $users=$this->User_model->getUser($userid); 
        $data= array();
        $data['users']=$users;
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('status','required');

        if($this->form_validation->run() == false){
            $this->load->view('edit_user',$data);
        }else{
            $formArray = array() ;

            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            if($this->input->post('status') == 'active'){
                $formArray['active'] = 1;
            }else{
                $formArray['active'] = 0;
            }

            $this->User_model->updateUser($userid,$formArray);
            $this->session->set_flashdata('success','User  successfully');

            redirect(base_url() .'index.php/user/home');
        }

       
      

       } 
   }
?>