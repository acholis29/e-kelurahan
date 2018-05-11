<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Bo extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct(){
		session_start();
		parent::__construct();
		
		if( !isset($_SESSION["id"])){
			redirect('auth/bo'); 
		};

	} 


	public function index() {
        if($_SESSION["grp"] !=='bo'){
            redirect('auth/bo'); 
        };

		$this->load->view('bo/index');		
										
    }

    public function catalog($param='',$param1='') {
        if($_SESSION["grp"] !=='bo'){
            redirect('auth/bo'); 
        };

        switch ($param) {
            case 'product':
                  switch ($param1) {
                        case 'new':
                             $this->load->view('bo/catalog/product/detail');	
                            break;            
                        default:
                            $this->load->view('bo/catalog/product/index');	
							break; 
                    };
                break;            
            default:
               $this->load->view('bo/catalog/index');	
        };
    }

     public function supplier($param='',$param1='') {
        if($_SESSION["grp"] !=='bo'){
            redirect('auth/bo'); 
        };
               $this->load->view('bo/supplier/index');	

        
    }


}
