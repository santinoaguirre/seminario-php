<?php
namespace App\Controllers;
use App\Models\UserModel;
class User extends BaseController
{

protected $userModel;

public function __construct()
{
    $this->userModel = new UserModel();
}

public function index()
{
$data['users'] = $this->userModel->getUsers(); // Obtiene todos los usuarios
return view('users/index', $data); // Carga la vista con los datos
}

public function create()
{
return view('users/create'); // Muestra el formulario de creación
}
// Muestra el formulario de edición con los datos del usuario
public function edit($id)
{
$data['user'] = $this->userModel->getUser($id); // Busca al usuario por su ID
return view('users/edit', $data);
}

// Procesa el formulario de creación.
// Guarda un nuevo usuario en la base de datos.
public function store()
{
$name = $this->request->getPost('name'); // Obtiene el valor del campo "name"
$email = $this->request->getPost('email'); // Obtiene el valor del campo "email"
$this->userModel->saveUser($name, $email); // Guarda un nuevo registro en la base
return redirect()->to('/user'); // Redirige al listado de usuarios
}
// Procesa el formulario de edición.
// Actualiza los datos de un usuario existente.
public function update($id)
{
$newName = $this->request->getPost('name'); // Obtiene el valor del campo "name"
$newEmail = $this->request->getPost('email'); // Obtiene el valor del campo "email"
$this->userModel->updateUser($id, $newName, $newEmail);
return redirect()->to('/user'); // Redirige al listado de usuarios
}
// Elimina un usuario existente.
public function delete($id)
{
$this->userModel->deleteUser($id); // Borra el usuario de la base de datos
return redirect()->to('/user');
}
}