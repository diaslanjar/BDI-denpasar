<?php

namespace App\Controllers;

use App\Models\Penugasan;
use App\Models\User;
use App\Models\Unit;
use App\Controllers\BaseController;

class PenugasanController extends BaseController
{
    public $penugasan;
    public $user;
    public $unit;

    public function __construct()
    {
        $this->penugasan = new Penugasan();
        $this->user = new User();
        $this->unit = new Unit();
    }

    public function index()
    {
        // $data = $this->detaillevel->findAll();
        // dd($data);

        $db = \Config\Database::connect();
        $builder = $db->table('penugasan');
        $builder->select('*, penugasan.id as pi, user.id as ui, user.nama_user as un, unit.kode_unit as uk, unit.alamat_unit as ua');
        $builder->join('unit', 'penugasan.unit_id = unit.id');
        $builder->join('user', 'penugasan.user_id = user.id');
        $query = $builder->get();
        $data = $query->getResult();
        // dd($data);

        return view('penugasan/index', compact('data'));
        //
    }

    public function edit($id)
    {
        
        $data = $this->penugasan->find($id);
        $user = $this->user->findAll();
        $unit = $this->unit->findAll();
        // dd($data);
        return View('penugasan/edit', compact('data', 'user', 'unit'));
    }

    public function updatePenugasan($id)
    {

        $this->penugasan->update($id, [
            'unit_id' => $this->request->getPost('kode_unit')
        ]);

        return redirect('penugasan')->with('success', 'Data Updated Successfully');
    }

    public function deletePenugasan($id)
    {

        $this->penugasan->delete($id);

        return redirect('penugasan')->with('success', 'Data deleted Successfully');
    }
}
