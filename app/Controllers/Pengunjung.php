<?php 

namespace App\Controllers;

use App\Models\PengunjungModel;

class Pengunjung extends BaseController
{
    public function index()
    {
        $pengunjung_model = new PengunjungModel();
        $all_data_pengunjung = $pengunjung_model->findAll();
        return view('pengunjung', ['all_data_pengunjung' => $all_data_pengunjung]);
    }

    public function add_data_pengunjung()
    {
        return view('add_data_pengunjung');
    }

    public function proses_add_pengunjung()
    {
        $pengunjung_model = new PengunjungModel();
        $pengunjung_model->insert($this->request->getPost());
        return redirect()->to(base_url('pengunjung'));
    }

    public function edit_data_pengunjung($id = false)
    {
        $pengunjung_model = new PengunjungModel();
        $data_pengunjung = $pengunjung_model->find($id);
        return view('edit_data_pengunjung', ['data_pengunjung' => $data_pengunjung]);
    }

    public function proses_edit_pengunjung()
    {
        $pengunjung_model = new PengunjungModel();
        $pengunjung_model->update($this->request->getPost('id_pengunjung'), $this->request->getPost());
        return redirect()->to(base_url('pengunjung'));
    }

    public function delete_data_pengunjung($id = false)
    {
        $pengunjung_model = new PengunjungModel();
        $pengunjung_model->delete($id);
        return redirect()->to(base_url('pengunjung'));
    }
}


?>