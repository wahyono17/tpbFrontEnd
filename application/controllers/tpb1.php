<?php  
class tpb1 extends CI_Controller{
    public function index(){
        //alamat API JSON
        $api = 'http://localhost:8080/tpb1/api/header';
        
        $get = file_get_contents($api);
        if ($get === false){
            //handle error
            redirect('filter');
        }else {
            $dataj['judul'] = 'List TPB Unit1';
            $data = json_decode($get, true);
            $data2['data3'] = $data["data"];
            
            $this->load->view('templates/header',$dataj);
            $this->load->view('tpb1/index',$data2);
            $this->load->view('templates/footer');
        }  
    }

    public function filter(){
        //alamat API JSON
        $api = 'http://localhost:8080/tpb1/api/header';

        $nomorPeb =$this->input->post('nomorPeb');
        $tahun =$this->input->post('tahun');
        $bulan =$this->input->post('bulan');
        
        if($nomorPeb === null || $tahun === null || $bulan === null){
            $dataj['judul'] = 'List TPB Unit1 Filter';
            $this->load->view('templates/header',$dataj);
            $this->load->view('tpb1/filter');
            $this->load->view('templates/footer');
        
        } else {
            if($nomorPeb != null && $tahun != null){
                $get = file_get_contents($api."?NOMOR_DAFTAR=".$nomorPeb."&YEAR(TANGGAL_DAFTAR)=".$tahun);
                if($get === false){
                    //handle error
                    echo "
                    <script type='text/javascript'>
                    alert('Data not found Try another filter');
                    history.back(self);
                    </script>";
                   
                } else {
                    $dataj['judul'] = 'List TPB Unit1';
                    $data = json_decode($get, true);
                    $data2['data3'] = $data["data"];
                    
                    $this->load->view('templates/header',$dataj);
                    $this->load->view('tpb1/index',$data2);
                    $this->load->view('templates/footer');

                }
            } else
            if($tahun != null && $bulan != null){
                $get = file_get_contents($api."?YEAR(TANGGAL_DAFTAR)=".$tahun."&MONTH(TANGGAL_DAFTAR)=".$bulan);
                if($get === false){
                    // handle error
                    echo "
                    <script type='text/javascript'>
                    alert('Data not found Try another filter');
                    history.back(self);
                    </script>";
                } else {
                    $dataj['judul'] = 'List TPB Unit1';
                    $data = json_decode($get, true);
                    $data2['data3'] = $data["data"];
                    
                    $this->load->view('templates/header',$dataj);
                    $this->load->view('tpb1/index',$data2);
                    $this->load->view('templates/footer');
                }


            }else
            if($tahun != null){
                $get = file_get_contents($api."?YEAR(TANGGAL_DAFTAR)=".$tahun);
                if($get === false){
                    //handle error
                    echo "
                    <script type='text/javascript'>
                    alert('Data not found Try another filter');
                    history.back(self);
                    </script>";
                }else{
                    $dataj['judul'] = 'List TPB Unit1';
                    $data = json_decode($get, true);
                    $data2['data3'] = $data["data"];
                    
                    $this->load->view('templates/header',$dataj);
                    $this->load->view('tpb1/index',$data2);
                    $this->load->view('templates/footer');
                }

            }else

            if($nomorPeb != null){
                $get = file_get_contents($api."?NOMOR_DAFTAR=".$nomorPeb);
                if($get === false){
                     //handle error
                    echo "
                    <script type='text/javascript'>
                    alert('Data not found Try another filter');
                    history.back(self);
                    </script>";
                
                } else {
                    $dataj['judul'] = 'List TPB Unit1';
                    $data = json_decode($get, true);
                    $data2['data3'] = $data["data"];
                    
                    $this->load->view('templates/header',$dataj);
                    $this->load->view('tpb1/index',$data2);
                    $this->load->view('templates/footer');
                }
            } else {
                echo "
                <script type='text/javascript'>
                alert('Data not found Try another filter');
                history.back(self);
                </script>";
            }
            
        }

        
        
    }
}    
?>