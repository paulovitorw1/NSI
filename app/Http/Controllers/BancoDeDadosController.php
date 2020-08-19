<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BancoDeDados;
use App\Models\UsuarioPermissao;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class BancoDeDadosController extends Controller
{

    public function index()
    {
        //Listando permissões e retornando a view 
        $consultapermissao = DB::select('SELECT (SELECT permissao_descricao FROM permissao WHERE id_permissao = id_permissao_fk) as permissao_descricao, (SELECT id_permissao FROM permissao WHERE id_permissao = id_permissao_fk) as id_permissao FROM usuario_permissao WHERE id_usuario_fk = 177');
        return view('BancoDeDados', compact('consultapermissao'));
    }
    public function listarDadosUsuario()
    {
        //Linstando todos os dados do usuario 
        $consultausuario = DB::select('SELECT id_usuario, usuario.data_de_criacao, usuario.data_atualizacao, nome, sobrenome,identificador, email FROM usuario WHERE status = 1');

        //Criando os botões para usar junto com a DataTables
        return Datatables::of($consultausuario, compact('consultausuario'))
            ->addColumn('action', function ($consultausuario) {
                return '<a onclick="visualizarDados(' . $consultausuario->id_usuario . ');" id="btn_abrir_bd" class="btn btn-info btn-xs"><i class="fas fa-eye"></i></a> ' .
                    '<a onclick="editarDados(' . $consultausuario->id_usuario . ');" id="btn_editar_bd" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a> ' .
                    '<a onclick="deletaDados(' . $consultausuario->id_usuario . ')" id="btn_apagar_bd" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>';
            })
            ->make(true);
    }
    public function adicionarDados(Request $request)
    {
        //Validando os dados antes de serem inseridos
        $this->registrarUserViaBDValid($request);
        //Os dados que serão inserido no banco pela função de adicionarDados
        $registrarUserViaDB = BancoDeDados::create([
            'nome' => $request->nome_editar,
            'sobrenome' => $request->sobrenome_editar,
            'identificador' => $request->identificador,
            'email' => $request->email,
            'senha' => $request->password
        ])->id_usuario;
        foreach ($request->permissao_editar as $permissao) {
            $registrarUserPermissao = UsuarioPermissao::create([
                'id_usuario_fk' => $registrarUserViaDB,
                'id_permissao_fk' => $permissao,

            ]);
        }

        return response()->json($request);
    }
    public function editarDados($id)
    {
        //Editando dado pelo ID selecionado
        $editardados = BancoDeDados::find($id);
        return $editardados;
    }

    public function atualizarDados(Request $request)
    {
        //Atualizando dados do usuario pelo 
        $atualizardados = BancoDeDados::find($request->idUser);
        $atualizardados->nome = $request->nome_editar;
        $atualizardados->sobrenome = $request->sobrenome_editar;
        $atualizardados->identificador = $request->identificador;
        $atualizardados->email = $request->email;
        $atualizardados->id_permissao_fk = $request->permissao_editar;
        $atualizardados->update();

        return $atualizardados;
    }


    public function apagarDados(Request $request)
    {
        $apagarDado = BancoDeDados::where('id_usuario', $request->id)->update([
            'status' => 0
            
        ]);
        return response()->json($request);
        // //Apagando usuario pelo ID
        // BancoDeDados::destroy($id);
    }

    public function AtualizarStatusUser(Request $request){

        $atualizarStatus = BancoDeDados::find($request->idUserDelete);
        $atualizarStatus->status = '0';
        $atualizarStatus->update();

        return $atualizarStatus;
    }

    public function registrarUserViaBDValid(Request $request)
    {
        //Validando os campos de registro
        $registraradministradorvalid = $request->validate([
            'nome_editar' => 'required',
            'sobrenome_editar' => 'required',
            'identificador' => 'required|unique:usuario',
            'email' => 'required|email|unique:usuario',
            'permissao_editar' => 'required',
            'password' => 'required|min:8'
        ]);
        return $registraradministradorvalid;
    }
}
