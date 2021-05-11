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

            $data['title'] = "Employee Profile";

            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }

        public function companyinfo(){

            $module = "companyinfo";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Company Information";
            
            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }
        
        public function leavesetup(){

            $module = "leavesetup";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Leave Setup";
            
            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }

        public function ratesetup(){

            $module = "ratesetup";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Rate Setup";
            
            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }

        public function allowancesetup(){

            $module = "allowancesetup";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Allowance Setup";
            
            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }

        public function schedulesetup(){

            $module = "schedulesetup";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Schedule Setup";
            
            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }

        public function batchsetup(){

            $module = "batchsetup";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Batch Setup";
            
            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }

        public function ipaddress(){

            $module = "ipaddress";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "IP Address";
            
            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }

        public function deductionsetup(){

            $module = "deductionsetup";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Deduction Setup";
            
            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }

        public function timecard(){

            $module = "timecard";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Daily Time Record";
            
            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }

        public function payrollsetup(){

            $module = "payrollsetup";
            
            if(!file_exists(APPPATH.'views/modules/'.$module.'.php')){
                show_404();
            }

            $data['title'] = "Payroll Setup";
            
            $this->load->view('templates/header');
            $this->load->view('templates/topmenu');
            $this->load->view('templates/leftmenu');
            $this->load->view('modules/'.$module, $data);
            $this->load->view('templates/modal');
            $this->load->view('templates/footer');

        }
    }
?>