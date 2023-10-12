<?php

namespace App\Controllers;
use App\Models\AirdropModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new AirdropModel();
        $data['airdrops'] = $model->findAll();
        
        return view('home', $data);
    }

    public function detailproject($slug)
    {
        $model = new AirdropModel();

        $data['detail'] = $model->where('slug', $slug)->first();

        if (empty($data['detail'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Post not found.');
        }

        return view('details', $data);
    }

    public function icons()
    {        
        return view('icons');
    }

}
