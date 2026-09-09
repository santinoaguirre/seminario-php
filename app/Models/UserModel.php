<?php
namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
// Es el nombre de la tabla en la base de datos.
// Con esta variable, CodeIgniter sabe que las consultas hechas en este
// modelo tienen que impactar en la tabla 'users'.
protected $table = 'users';
// Sirve para indicarle a CodeIgniter qué campos se pueden insertar o actualizar
// en la tabla 'users'. En este caso, el nombre y el email
protected $allowedFields = ['name', 'email'];
// Función que retorna todos los usuarios almacenados en la base de datos.
public function getUsers()
{
return $this->findAll();
}
// Función que retorna el usuario que tenga el ID recibido por parámetro.
public function getUser($id)
{
// Indicamos el campo de la tabla 'users' que queremos buscar
return $this->where('id', $id)->first();
// lo siguiente es equivalente a lo de arriba: return $this->find($id);
}
// Función para crear un usuario.
// Recibe un nombre y un email como parámetros.
public function saveUser($name, $email)
{
// Indicamos que vamos a crear un usuario con ese 'name' y ese 'email'.
$this->save([
'name' => $name,
'email' => $email
]);
}
// Función para modificar un usuario.
// Recibe el ID del usuario a modificar, el nombre y el email.
public function updateUser($id, $newName, $newEmail)
{
// Indicamos que vamos a modificar el usuario con ese ID
// y vamos a cambiar los atributos 'name' y 'email'.
$this->update($id, [
'name' => $newName,
'email' => $newEmail
]);
}
// Función para eliminar un usuario.
// Recibe el ID del usuario a eliminar.
public function deleteUser($id)
{
$this->delete($id);
}
}