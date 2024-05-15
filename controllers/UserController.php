<?php

class UserController extends RenderViews
{
    public function index() {
        $users = (new User())->index();

        $this->view('users/index', [
            'title' => 'User Page Title',
            'users' => $users ?? []
        ]);
    }

    public function show($id) {
        $user = (new User())->show($id);

        $this->view('users/show', [
            'title' => 'User Page Title',
            'user' => $user
        ]);
    }
}