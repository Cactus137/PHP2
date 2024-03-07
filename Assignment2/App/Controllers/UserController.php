<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    public $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function listUser()
    {
        $users = $this->user->getAll();
        return $this->render('user.list', compact('users'));
    }

    public function detailUser($id)
    {
        $user = $this->user->getUserById($id);
        return $this->render('user.detail', compact('user'));
    }

    public function addUser()
    {
        return $this->render('user.add');
    }

    public function postUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name']);

            $error = [];
            if (empty($name)) {
                $error['name'] = "Please enter name";
            }

            if (count($error) > 0) {
                flash('errors', $error, 'add-user');
            } else {
                $check = $this->user->addUser($name);
                if ($check) {
                    flash('success', 'Add user success!', 'list-user');
                } else {
                    flash('errors', 'Add user fail!', 'add-user');
                }
            }
        }
    }

    public function editUser($id)
    {
        $user = $this->user->getUserById($id);
        return $this->render('user.edit', compact('user'));
    }

    public function handleEditUser($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name']); 

            $error = [];
            if (empty($name)) {
                $error['name'] = "Please enter name";
            }

            if (count($error) > 0) {
                flash('errors', $error, 'edit-user/' . $id);
            } else {
                $check = $this->user->editUser($name, $id);
                if ($check) {
                    flash('success', 'Add user success!', 'list-user');
                } else {
                    flash('errors', 'Add user fail!', 'add-user/' . $id);
                }
            }
        }
    }

    public function deleteUser($id)
    {
        $check = $this->user->deleteUser($id);
        if ($check) {
            flash('success', 'Delete user success!', 'list-user');
        } else {
            flash('errors', 'Delete user fail!', 'list-user');
        }
    }
}
