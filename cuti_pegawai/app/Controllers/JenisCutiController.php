<?php

namespace App\Controllers;

use App\Models\JenisCuti;
use App\Controllers\BaseController;

class JenisCutiController extends BaseController
{
    public $jeniscuti;

    public function __construct()
    {
        $this->jeniscuti = new JenisCuti();
    }


    public function index()
    {
        $data = $this->jeniscuti->findAll();
        // dd($data);
        return view('jeniscuti/index', compact('data'));
        // $db = \Config\Database::connect();
        // $builder = $db->table('user');
        // $builder->select('*');
        // $builder->join('pegawai', "pegawai.id = user.pegawai_id");
        // $query = $builder->get();
        // $data = $query->getResult();
        // dd($data);
    }

    public function create()
    {
        return view('/jeniscuti/create.php');
    }

    public function store()
    {
        $request = [
            'nama_jenis' => $this->request->getPost('nama_jenis'),
        ];

        $this->jeniscuti->insert($request);
        echo '
        <script>
            window.location="' . base_url('jeniscuti') . '";
        </script>
        ';
    }
}
