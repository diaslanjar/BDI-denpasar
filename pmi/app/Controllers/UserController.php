<?php

namespace App\Controllers;

use App\Models\User;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $data = $this->user->findAll();
        // dd($data);
        return view('/user/index', compact('data'));
    }

    public function peserta()
    {
        $data = $this->user->findAll();
        // dd($data);
        return view('/user/peserta', compact('data'));
    }

    public function edit($id)
    {
        $data = $this->user->find($id);
        // dd($data);
        return View('user/edit', compact('data'));
    }

    public function updateUser($id)
    {

        $this->user->update($id, [
            'nama_user' => $this->request->getPost('nama_user'),
            // 'email' => $this->request->getPost('email'),
        ]);

        return redirect('user/peserta')->with('success', 'Data Updated Successfully');
    }

    public function deleteUser($id)
    {

        $this->user->delete($id);

        return redirect('user/peserta')->with('success', 'Data deleted Successfully');
    }

    // public function login()
    // {
    //     $email = $this->request->getPost('email');
    //     $password = $this->request->getPost('password');

    //     $query = $this->user->where('email', $email)->first();

    //     if ($query && password_verify($password, $query['password'])) {
    //         return redirect('user');
    //     }

    //     return view('user/login');
    // }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $query = $this->user->where("email = '$email'")->first();

        if ($query && password_verify($password, $query['password'])) {
            session()->set([
                'id' => $query['id'],
                'nama_user' => $query['nama_user'],
                'email' => $query['email'],
                'level' => $query['level'],
                'logged_in' => TRUE
            ]);

            if (session()->level == '1') {
                return redirect()->to(base_url('/user'));
            } else{
                return redirect('/');
            }
        }

        return view('user/login');
    }

    public function register()
    {
        if ($this->request->getMethod() == 'post') {
            $data = [
                'nama_user' => $this->request->getPost('nama_user'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'level' => '1'
            ];

            if ($this->user->insert($data)) {
                return redirect('login');
            }
        }

        return view('user/register');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('user'));
    }
}
