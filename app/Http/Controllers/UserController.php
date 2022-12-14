<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class UserController extends Controller
{
    public function create()
    {
        $students = new Student();
        $students->nombre = $request->input('nombre');
        $students->apellido = $request->input('apellido');

        $students->save();
        return response()->json($students);
    }
}
