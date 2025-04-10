<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use HasFactory;

    protected $table = 'users'; // Specify the table name

    protected $fillable = ['name', 'email', 'password'];

    public static function getAllUsers($perPage = 5)
    {
        return self::paginate($perPage);
    }

    public static function getUserById($id)
    {
        return self::find($id);
    }

    public static function addUser($data)
    {
        return self::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']), // Hash password before saving
        ]);
    }
}
