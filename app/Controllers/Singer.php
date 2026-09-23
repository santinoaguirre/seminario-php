<?php
namespace App\Controllers;
use App\Models\SingerModel;

class Singer extends BaseController
{
    protected $singerModel;

    public function __construct()
    {
        $this->singerModel = new SingerModel();
    }

    public function index()
    {
        $data['singers'] = $this->singerModel->getSingers();
        return view('singers/index', $data);
    }

    public function create()
    {
        return view('singers/create');
    }

    public function edit($id)
    {
        $data['singer'] = $this->singerModel->getSinger($id);
        return view('singers/edit', $data);
    }

    public function store()
    {
        $name = $this->request->getPost('name');
        $nationality = $this->request->getPost('nationality');
        $genre = $this->request->getPost('genre');
        $this->singerModel->saveSinger($name, $nationality, $genre);
        return redirect()->to('/singer');
    }

    public function update($id)
    {
        $newName = $this->request->getPost('name');
        $newNationality = $this->request->getPost('nationality');
        $newGenre = $this->request->getPost('genre');
        $this->singerModel->updateSinger($id, $newName, $newNationality, $newGenre);
        return redirect()->to('/singer');
    }

    public function delete($id)
    {
        $this->singerModel->deleteSinger($id);
        return redirect()->to('/singer');
    }
}
