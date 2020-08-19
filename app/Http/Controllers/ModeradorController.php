<?php

namespace App\Http\Controllers;

use App\Models\Moderador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ModeradorController extends Controller
{
    public function index()
    {
        $consultapermissao = DB::table('permissao')->get();
        return view('Moderador', compact('consultapermissao'));
    }
    public function moderadorListarDenuncia()
    {
        $consultausuario = DB::select('SELECT id_denuncia, denuncia.data_de_criacao, imagem, denuncia_descricao, local_descricao, ambiente_descricao, l.id_local, id_ambiente, oque, identificador, nome, sobrenome FROM denuncia INNER JOIN usuario u ON u.id_usuario = denuncia.id_usuario_fk INNER JOIN local l ON l.id_local = denuncia.id_local_fk INNER JOIN ambiente amb ON amb.id_ambiente = denuncia.id_ambiente_fk');


        return Datatables::of($consultausuario, compact('consultausuario'))
            ->addColumn('imagem', function ($consultausuario) {

                return '<a class="abrirModal"><img onclick="abrirImg();" class="img_denuncia" src="' . url("img_denuncia", $consultausuario->imagem) . '"/></a>';
            })
            ->addColumn('action', function ($consultausuario) {
                return '<a onclick="deletaDados(' . $consultausuario->id_denuncia . ')" id="btn_apagar_bd" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>';
            })
            ->rawColumns(['imagem', 'action'])->make(true);
    }
    public function ModeradorDelete($id)
    {
        //FAZER O RESTO DO CRUD SEUS OTARIOS
        //Apagando usuario pelo ID
        Moderador::destroy($id);
    }
}
