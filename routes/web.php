<?php

use App\Models\BancoDeDados;


Route::get('/', function () {
    return view('layout');
});
//-----------------------------------------------------------------------------------//
//--------------------------Rotas para registro administrador-----------------------//
//Rota para chamar view de registrar administrador
Route::get('/registraradministrador', 'RegistrarAdministradorController@listPermissao')->name('rotaListPermissao');
//Rota para registrar administrador no banco
Route::post('/registraradministrador', 'RegistrarAdministradorController@registrarAdministrador')->name('rotaInsertRegistrarAdministrador');
//-----------------------------------------------------------------------------------//
//////////////////////////////////////////////////////////////////////////////////////
//------------------------Rotas para registro de alunos----------------------------//
//Rota para chamar view de registrar aluno
Route::get('/registraraluno', 'RegistrarAlunoController@chamarView')->name('rotaChamarView');
//Rota para validar campos de registrar aluno
Route::post('/registraraluno', 'RegistrarAlunoController@registrarAlunoValid')->name('rotaValidResgistrarAluno');
//Rota para cadastrar ususario
Route::post('/registraraluno', 'RegistrarAlunoController@registrarAlunoInsert')->name('rotaInsertRegistrarAluno');
//-----------------------------------------------------------------------------------//
//////////////////////////////////////////////////////////////////////////////////////
//------------------------Rotas para denuncia de alunos----------------------------//
//Rota para listar dados do banco nos inputs
Route::get('/aluno', 'AlunoController@alunoList')->name('rotaListarAluno');
//Rota para inserção de denuncia dos alunos
Route::post('/aluno', 'AlunoController@alunoInsert')->name('rotaInsertAluno');
//-----------------------------------------------------------------------------------//
//////////////////////////////////////////////////////////////////////////////////////
//------------------------Rotas para resposta de denuncia--------------------------//
//Rota para listar as denuncia dos alunos
Route::get('/administrador', 'AdministradorController@admList')->name('rotaListarAdm');
// //Rota para inserção de respostas de denuncia dos alunos
Route::post('/administrador', 'AdministradorController@admInsert')->name('rotaInsertAdm');
//-----------------------------------------------------------------------------------//
//////////////////////////////////////////////////////////////////////////////////////
//----------------------Rotas para listar denuncia moderador-----------------------//
//Roda para listar dados para MODERADOR
Route::get('/moderador/ver', 'ModeradorController@moderadorListarDenuncia')->name('rotaListarModerador');
Route::get('/moderador', 'ModeradorController@index')->name('aa');
//Rota para excluir dados 
Route::delete('/moderador/{id_denuncia}/apagar', 'ModeradorController@ModeradorDelete')->name('rotaExcluirDenuncia');
//-----------------------------------------------------------------------------------//
//////////////////////////////////////////////////////////////////////////////////////
//--------------------Rotas para da feedback e listar feedback---------------------//
//Rota para chamar a view Feedback.balde
Route::get('/feedback', 'FeedbackController@chamarView')->name('rotaRetornoFeedback');
//Rota pra função Insert dos dados de feedback
Route::post('/feedback', 'FeedbackController@feedbackInsert')->name('rotaInsertFeedback');
//Rota para lista dados de feedback
Route::get('/moderador/feedbacklistar', 'FeedbackController@feedbackLista')->name('rotaListaFeedback');
//-----------------------------------------------------------------------------------//
//////////////////////////////////////////////////////////////////////////////////////
//-------------------------Rotas do banco de dados (crud)--------------------------//
//Rota para chamar a view bancodedados
Route::get('/bancodedados', 'BancoDeDadosController@index')->name('rotaListaView');
//Rota para listar todos os dados que existe na tabela usuario
Route::get('/bancodedados/ver', 'BancoDeDadosController@listarDadosUsuario')->name('rotaListaBancoDeDados');
//Rota para editar dados do usuario
Route::get('/bancodedados/{id_usuario}/editar', 'BancoDeDadosController@editarDados')->name('rotaEdiUsuario');
//Rota para listar dados para o modal de visualização bloqueadas 
Route::get('/bancodedados/{id_usuario}/listar', 'BancoDeDadosController@editarDados')->name('rotaEdiUsuario');
//Rota para adicionar usuario pela tela do banco de dados via modal 
Route::post('/bancodedados/novo', 'BancoDeDadosController@adicionarDados')->name('novoUser');
//Rota para editar dados do  usuario
Route::post('/bancodedados/atualizar', 'BancoDeDadosController@atualizarDados')->name('rotaAtualizarUsuario');
//Rota para excluir dados 
Route::post('/bancodedados/apagar', 'BancoDeDadosController@apagarDados')->name('rotaExcluirUsuario');
