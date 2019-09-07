<?php
Class karyawan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
       

        # code...
    }
    
    function insert_dumy(){
        // jumlah data yang akan di insert
        $jumlah_data = 100;
        for ($i=1;$i<=$jumlah_data;$i++){
            $data   =   array(
                "id_karyawan"  =>  "0".$i,
                "nama_lengkap"  =>  "Karyawan Ke-",
                "email"         =>  "karyawan-$i@gmil.com",
                "no_hp"         =>  '089699935552',
                "foto"          =>  "foto-karyawan-$i.jpg");
           $this->db->insert('karyawan',$data);
        }
        echo $i.' Data Berhasil Di Insert';
    }

    function json(){
        $this->load->library('datatables');
        $this->datatables->add_column('foto','<img src="https://cdn1-production-images-kly.akamaized.net/ni5Wo8Ugxzrow4cxRYtZHtNQ82o=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2878029/original/036542400_1565354643-tebak_gambar_hewan.jpg" width=20>','foto');
        $this->datatables->select('nama_lengkap,email,no_hp');
        $this->datatables->add_column('action',anchor('karyawan/edit/.$i','Edit',array('class'=>'btn btn-danger btn-sm')),'id_karyawan');
        $this->datatables->from('karyawan');

        return print_r($this->datatables->generate());
    }

        function index(){
        $this->load->view('karyawan');
    }

    
}
?>