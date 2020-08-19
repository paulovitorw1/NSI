<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Resposta;
use Illuminate\Support\Facades\DB;

class AdministradorController extends Controller
{
    public function admInsert(Request $request)
    {
        $this->admValid($request);
        // Faz o upload:
        $name = "padrao.jpg";
        if($request->hasFile('uploaded_file')){
            $image = $request->file('uploaded_file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img_resposta');
            $image->move($destinationPath, $name);
        }
        $resposta = Resposta::create([
            'resposta_descricao' => $request->resposta_descricao,
            'id_usuario_fk' => 63,
            'imagem' => $name
            ]);
            
            return response()->json($request);
        }
        
        public function admValid(Request $request)
        {
            //Verificação dos dados
            $validateAdministrador = $request->validate([
                'resposta_descricao' => 'required|min:10',
                ]);
                
                return $validateAdministrador;
            }    
            
            
            public function admList()
            {
                $consultaDenuncia = DB::select('SELECT id_denuncia, denuncia.data_de_criacao, imagem, denuncia_descricao, local_descricao, ambiente_descricao, l.id_local, id_ambiente, oque, identificador, nome, sobrenome 
                FROM denuncia 
                INNER JOIN usuario u ON u.id_usuario = denuncia.id_usuario_fk
                INNER JOIN local l ON l.id_local = denuncia.id_local_fk
                INNER JOIN ambiente amb ON amb.id_ambiente = denuncia.id_ambiente_fk');
                
                return view('Administrador', compact('consultaDenuncia'));
            }
            
        }
