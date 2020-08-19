<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrarAluno;
use Illuminate\Support\Facades\DB;

class RegistrarAlunoController extends Controller
{
    public function chamarView()
    {
        return view('RegistrarAluno');
    }
    
    public function registrarAlunoInsert(Request $request)
    {
        $this->registrarAlunoValid($request);
        $registraraluno = RegistrarAluno::create([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'identificador' => $request->identificador,
            'email' => $request->email,
            'senha' => $request->password
            ]);
            
            return response()->json($request);
        }
        
        public function registrarAlunoValid(Request $request)
        {
            $registraralunovalid = $request->validate([
                'nome' => 'required',
                'sobrenome' => 'required',
                'identificador' => 'required|unique:usuario',
                'email' => 'required|email|unique:usuario',
                'password' => 'required|confirmed|min:8',
                ]);
                
                return $registraralunovalid;
            }
            
        }
        
