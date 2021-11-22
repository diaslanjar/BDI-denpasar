<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jurusan;

class JurusanController extends BaseController
{
    public $jurusan;

    public function __construct()
    {
        $this->jurusan = new Jurusan();
    }

    public function index()
    {
        $data = $this->jurusan->findAll();
        // dd($data);
        return view('jurusan/index', compact('data'));
    }

    public function create()
    {
        return view('jurusan/create.php');
    }

    public function store()
    {
        $request = [
            'nama_jurusan' => $this->request->getPost('nama_jurusan')
        ];

        $this->jurusan->insert($request);
        echo '
        <script>
            window.location="' . base_url('jurusan') . '";
        </script>
        ';
    }

    public function edit($id){
        $data = $this->jurusan->find($id);
        // dd($data);
        return View('jurusan/edit', compact('data'));
    }

    public function updateJurusan($id){

        $this->jurusan->update($id, [
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
        ]);

        return redirect('jurusan')->with('success', 'Data Updated Successfully');
    }

    public function deleteJurusan($id){

        $this->jurusan->delete($id);

        return redirect('jurusan')->with('success', 'Data deleted Successfully');
    }
}
