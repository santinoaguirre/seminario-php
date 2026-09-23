<?php
namespace App\Models;
use CodeIgniter\Model;

class SingerModel extends Model
{
    protected $table = 'singers';
    protected $allowedFields = ['name', 'nationality', 'genre'];

    public function getSingers()
    {
        return $this->findAll();
    }

    public function getSinger($id)
    {
        return $this->where('id', $id)->first();
    }

    public function saveSinger($name, $nationality, $genre)
    {
        $this->save([
            'name'        => $name,
            'nationality' => $nationality,
            'genre'       => $genre,
        ]);
    }

    public function updateSinger($id, $newName, $newNationality, $newGenre)
    {
        $this->update($id, [
            'name'        => $newName,
            'nationality' => $newNationality,
            'genre'       => $newGenre,
        ]);
    }

    public function deleteSinger($id)
    {
        $this->delete($id);
    }
}
