<?php  
class home extends CI_Controller{
    public function index(){
        $dataj['judul'] = 'Home';
        $this->load->view('templates/header',$dataj);
        $this->load->view('tpb/home');
        $this->load->view('templates/footer');

        //$this->load->view('coba1');
    }
}
?>