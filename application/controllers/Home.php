<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function index()
    {
        $data['mahasiswa'] = $this->modelMahasiswa->get_data()->result_array();

        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/index', $data);
        $this->load->view('templates/footer');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('kelas', 'Kelass', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'nim' => $this->input->post('nim', true),
                'kelas' => $this->input->post('kelas', true),
                'jurusan' => $this->input->post('jurusan', true),
                'alamat' => $this->input->post('alamat', true)
            ];

            $this->modelMahasiswa->simpanData($data);
            redirect('home');
        }
    }
    public function editmahasiswa()
    {
        $data['mahasiswa'] = $this->modelMahasiswa->wheremahasiswa(['id' => $this->uri->segment(3)])->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('kelas', 'Kelass', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('mahasiswa/edit_mahasiswa', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'nim' => $this->input->post('nim', true),
                'kelas' => $this->input->post('kelas', true),
                'jurusan' => $this->input->post('jurusan', true),
                'alamat' => $this->input->post('alamat', true)
            ];

            $this->modelMahasiswa->updatemahasiswa($data, ['id' => $this->input->post('id')]);
            redirect('home');
        }
    }
    public function hapusmahasiswa()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->modelMahasiswa->deletemahasiswa($where);
        redirect('home');
    }
}