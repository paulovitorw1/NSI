<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrarAdministrador;
use Illuminate\Support\Facades\DB;

class RegistrarAdministradorController extends Controller
{
    public function listPermissao()
    {
        $consultapermissao = DB::table('permissao')->get();

        return view('RegistrarAdministrador', compact('consultapermissao'));

    }
    
    public function registrarAdministrador(Request $request)
    {
        $this->registrarAdministradorValid($request);
        $registraradministrador = RegistrarAdministrador::create([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'identificador' => $request->identificador,
            'email' => $request->email,
            'id_permissao_fk' => $request->permissao,
            'senha' => $request->password
            ]);
            return response()->json($request);
        }
        
        public function registrarAdministradorValid(Request $request)
        {
            $registraradministradorvalid = $request->validate([
                'nome' => 'required',
                'sobrenome' => 'required',
                'identificador' => 'required|unique:usuario',
                'email' => 'required|email|unique:usuario',
                'password' => 'required|confirmed|min:8|max:16',
                'permissao_registro_adm' =>'required'
                ]);
                return $registraradministradorvalid;
            }
        }
