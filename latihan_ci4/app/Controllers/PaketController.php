<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Paket;

class PaketController extends BaseController
{
    public $paket;

    public function __construct()
    {
        $this->paket = new Paket();
    }

    public function index()
    {
        $data = $this->paket->findAll();
        // dd($data);
        return view('paket/index', compact('data'));
    }

    public function create()
    {
        return view('/paket/create.php');
    }

    public function store()
    {
        $request = [
            'nama_paket' => $this->request->getPost('nama_paket'),
            'harga_paket' => $this->request->getPost('harga_paket'),
            'kota_wisata' => $this->request->getPost('kota_wisata'),
            'fasilitas' => $this->request->getPost('fasilitas')
        ];

        $this->paket->insert($request);
        echo '
        <script>
            window.location="' . base_url('paket') . '";
        </script>
        ';
    }

    public function edit($id)
    {
        $data = $this->paket->find($id);
        // dd($data);
        return View('paket/edit', compact('data'));
    }

    public function updatePaket($id)
    {

        $this->paket->update($id, [
            'nama_paket' => $this->request->getPost('nama_paket'),
            'harga_paket' => $this->request->getPost('harga_paket'),
            'kota_wisata' => $this->request->getPost('kota_wisata'),
            'fasilitas' => $this->request->getPost('fasilitas'),
        ]);

        return redirect('paket')->with('success', 'Data Updated Successfully');
    }

    public function deletePaket($id)
    {

        $this->paket->delete($id);

        return redirect('paket')->with('success', 'Data deleted Successfully');
    }
}
