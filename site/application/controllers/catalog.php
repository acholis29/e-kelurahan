<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Catalog extends CI_Controller {

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

    
	public function index($param='',$param1='') {
		$this->load->view('bo/katalog/produk/index');	
    }
    
    public function detail($param='',$param1='') {
        switch ($param) {
            case 'group':
                $this->load->view('bo/katalog/produk/group');	
                break;  
            case 'baru':
                $this->load->view('bo/katalog/produk/detail');
                break;
            default:
                $this->load->view('bo/katalog/produk/detail');
            };										
    }

    public function product($param='',$param1='') {
        switch ($param) {
            case 'group':
                $this->load->view('bo/katalog/produk/group');	
                break;  
            case 'baru':
                $this->load->view('bo/katalog/produk/detail');
                break;
            default:
                $this->load->view('bo/katalog/produk/index');
            };										
    }


  
    


}
