<?php
    class Modules extends CI_Controller{
        
        public function loadpage(){

            $module = "mainpage";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Security Login";
            $data['active'] = "active";

            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            // $this->load->view('templates/leftmenu', $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }

        public function employee(){

            $module = "employee";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Security Login";
            $data['active'] = "active";
            $data['module'] = $module;

            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/leftmenu', $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }
    }
?>