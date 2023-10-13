<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode','required|min_length[3]',
        array(
            'required' => 'Kode Matakuliah Harus Diisi.',
            'min_length' => 'Kode terlalu pendek'
        )
    );
        $this->form_validation->set_rules ('nama', 'Nama','required|min_length[3]',
        array(
            'required' => 'Nama Harus Diisi.',
            'min_length' => 'Nama Terlalu Pendek'
        )    
    );
        $this->form_validation->set_rules ('sks', 'sks','required',
        array('required' => 'SKS Harus Diisi.')
    );

    if ($this->form_validation->run() == FALSE) 
    {
        $this->load->view('view-form-matakuliah');
    } 
        else 
        {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
                $this->load->view('view-data-matakuliah', $data);
        }
  }
}