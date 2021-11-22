<?php

namespace App\Controllers;

use App\Models\Unit;
use App\Controllers\BaseController;

class UnitController extends BaseController
{
    public $unit;

    public function __construct()
    {
        $this->unit = new Unit();
    }

    public function index()
    {
        $data = $this->unit->findAll();
        // dd($data);
        return view('unit/index', compact('data'));
    }

    public function create()
    {
        return view('/unit/create.php');
    }

    public function store()
    {
        $request = [
            'nama_unit' => $this->request->getPost('nama_unit'),
            'kode_unit' => $this->request->getPost('kode_unit'),
            'provinsi_unit' => $this->request->getPost('provinsi_unit'),
            'kota_unit' => $this->request->getPost('kota_unit'),
            'alamat_unit' => $this->request->getPost('alamat_unit')
        ];

        $this->unit->insert($request);
        echo '
        <script>
            window.location="' . base_url('unit') . '";
        </script>
        ';
    }

    public function edit($id)
    {
        $data = $this->unit->find($id);
        // dd($data);
        return View('unit/edit', compact('data'));
    }

    public function updateUnit($id)
    {

        $this->unit->update($id, [
            'nama_unit' => $this->request->getPost('nama_unit'),
            'kode_unit' => $this->request->getPost('kode_unit'),
            'provinsi_unit' => $this->request->getPost('provinsi_unit'),
            'kota_unit' => $this->request->getPost('kota_unit'),
            'alamat_unit' => $this->request->getPost('alamat_unit')
        ]);

        return redirect('unit')->with('success', 'Data Updated Successfully');
    }

    public function deleteUnit($id)
    {

        $this->unit->delete($id);

        return redirect('unit')->with('success', 'Data deleted Successfully');
    }
}
