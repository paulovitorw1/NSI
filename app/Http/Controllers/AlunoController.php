<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Denuncia;
use Illuminate\Support\Facades\DB;

class AlunoController extends Controller
{
    public function alunoList()
    {
        $consultaLocal = DB::table('local')->get();
        $consultaAmbiente = DB::table('ambiente')->get();
        
        return view('Aluno', compact('consultaLocal', 'consultaAmbiente'));
    }
    
    public function alunoInsert(Request $request)
    {
        
        
        $this->alunoValid($request);
        // Faz o upload:
        $name = "padrao.jpg";
        if($request->hasFile('uploaded_file')){
            $image = $request->file('uploaded_file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img_denuncia');
            $image->move($destinationPath, $name);
        }
        $denuncia = Denuncia::create([
            'id_local_fk' => $request->id_local,
            'id_ambiente_fk' => $request->id_ambiente,
            'oque' => $request->oque,
            'denuncia_descricao' => $request->denuncia_descricao,
            'id_usuario_fk' => 63,
            'imagem' =>$name,
            ]);
            
            return response()->json($request);
        }
        public function alunoValid(Request $request)
        {
            //Verificação dos dados
            $validateAluno = $request->validate([
                'id_local' => 'required',
                'id_ambiente' => 'required',
                'oque' => 'required',
                'denuncia_descricao' => 'required|min:5'
                ]);
                
                return $validateAluno;
            }
        }
