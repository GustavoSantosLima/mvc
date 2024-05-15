<?php

class NotFoundController extends RenderViews
{
    public function index() {
        $this->view('not-found', [
            'title' => 'Page not found'
        ]);
    }
}