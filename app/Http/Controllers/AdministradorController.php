<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Administrador;
use App\Curso;
use App\Evento;
use App\Pessoa;
use App\Foto;
use App\Mensagem;
use App\Acesso;
use Storage;
use Illuminate\Support\Facades\DB;
use App\User;


class AdministradorController extends Controller
{
   
    /**
    * retorna painel do Administrador
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function admin(request $request){
        $countPessoa = Pessoa::count();
        $countMensagem = Mensagem::count();
        if(DB::table('acesso')->where('id', 1)->count() == 0){
        $acesso = new Acesso;
        $acesso->save();
      }
        $acesso = Acesso::where('id', '=', 1)->first();
        return view('perfil-admin', compact('countPessoa', 'countMensagem', 'acesso'));
    }
    

	/**
    * Verifica login
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
	public function loginAdmin(request $request){
        
        $this->validate($request, [
        		'email' => 'required|email|max:255',
        		'password' => 'required|max:255'
        	]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $countPessoa = Pessoa::count();
            $countMensagem = Mensagem::count();

            if(DB::table('acesso')->where('id', 1)->count() == 0){
                $acesso = new Acesso;
                $acesso->save();
            }
            
            $acesso = Acesso::where('id', '=', 1)->first();
            return view('perfil-admin', compact('countPessoa', 'countMensagem', 'acesso'));
        }
        return redirect()->route('login')->with(['errors' => 'login ou senha incorretos']);
    }


    /**
    * Retorna view com os cursos
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function curso(){
        $cursos = Curso::orderBy('idCurso', 'DESC')->where('administrador_id', '=', Auth::user()->id)->paginate(3);

        $turnos = ['Matutino', 'Vespertino', 'Matutino / Vespertino'];

        return view('cursos-admin', compact('cursos', 'turnos'));
    }


    /**
    * Retorna view com os eventos
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function evento(){
        $eventos = Evento::orderBy('id', 'DESC')->where('administrador_id', '=', Auth::user()->id)->paginate(3);
        $fotos = Foto::all();

        return view('eventos-admin', compact('eventos', 'fotos'));
    }


    /**
    * Retorna view com os administradores
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function administradores(){

        $users = User::where('id', '!=', Auth::user()->id)->get();

        return view('administradores', compact('users'));
    }


    /**
    * Retorna view com mensagens
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function mensagens(){

        $mensagens = Mensagem::paginate(10);

        return view('mensagens', compact('mensagens'));
    }

    /**
    * Cadastra cursos
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function criarCurso(request $request){
        
        $administrador = Auth::user()->administrador;

        $curso = new Curso;
        $curso->administrador_id = $administrador->idAdministrador;
        $curso->titulo = $request->titulo;
        $curso->vagas = $request->vagas;
        $curso->horasCurso = $request->horasCurso;
        $curso->data = $request->data;
        $curso->turno = $request->turno;
        $curso->periodoInscricao = $request->periodoInscricao;
        $curso->local = $request->local;

        $curso->save();

        return redirect()->back();
    }


    /**
    * Cadastra eventos
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function criarEvento(request $request){
        
        $administrador = Auth::user()->administrador;

        $evento = new Evento;
        $evento->administrador_id = $administrador->idAdministrador;
        $evento->titulo= $request->titulo;
        $evento->descricao = $request->descricao;
        $evento->data = $request->data;
        $evento->hora = $request->hora;
        $evento->local = $request->local;

        $evento->save();

        Foto::where('evento_id', $evento->id)->delete();

        if($request->imagem != null) {
            $nome = $evento->titulo;
            $arrayNome = explode(' ', $nome);
            $primeiroName = $arrayNome[0];

            $nomeImagem = $primeiroName . '_' . $evento->id . '.' . $request->imagem->getClientOriginalExtension();
            $request->imagem->storeAs('evento_imagens', $nomeImagem);

            $foto = new Foto();
            $foto->evento_id = $evento->id;
            $foto->path = "img/" . "img-eventos/" . $nomeImagem;
            $foto->save();

            $tmpName = $_FILES['imagem']['tmp_name']; // Recebe o arquivo temporário.
            move_uploaded_file($tmpName, "img/img-eventos/" . $nomeImagem);
        }
        
        return redirect()->back();
    }


   
   /**
    * Inscritos no curso
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function cursoInscritos($id){
        
        $curso = Curso::where('idCurso', '=', $id)->first();
        $inscritos = Pessoa::where('curso_id', '=', $id)->get();

        return view('alunos-curso', compact('inscritos', 'curso'));
    }


    /**
    * Deletar Curso
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function deletarCurso($id){
         $curso = Curso::where('idCurso', '=', $id);
         $pessoa = Pessoa::where('curso_id', '=', $id);

         $delete = $pessoa->delete();
         $delete2 = $curso->delete();
         
         if($delete && $delete2){
            return redirect()->back();
         }
        return redirect()->route('gerir.cursos', $id)->with(['errors' => 'Falha ao deletar']);
    }


    /**
    * Deletar Evento
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function deletarEvento($id){
         $evento = Evento::where('id', '=', $id)->first();
         $foto = Foto::where('evento_id', '=', $id)->first();

         $nome = $evento->titulo;
         $arrayNome = explode(' ', $nome);
         $primeiroName = $arrayNome[0];

         unlink($foto->path);

         // dd($foto->path);

         $delete = $evento->delete();
         $delete2 = $foto->delete();

         if($delete &&  $delete2){
            return redirect()->back();
         }
        return redirect()->route('gerir.evento', $id)->with(['errors' => 'Falha ao deletar']);
    }


    /**
    * Mosta view para Editar curso
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function editarCurso($id){
         
         $curso = Curso::where('idCurso', '=', $id)->first();

         $turnos = ['Matutino', 'Vespertino', 'Matutino / Vespertino'];

        return view('editar-curso', compact('curso', 'turnos'));
    }

    /**
    * Mosta view para Editar evento
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function editarEvento($id){
        
        $evento = Evento::where('id', '=', $id)->first();
        $foto = Foto::where('evento_id', '=', $id)->first();

        return view('editar-evento', compact('evento', 'foto'));
    }


    /**
    * Altera dados do curso
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function alterarCurso(request $request, $id){
         
        $dadosForm = $request->all();

        $curso = Curso::where('idCurso', '=', $id)->first();

        $update = $curso->update($dadosForm);

        if($update){
            $turnos = ['Matutino', 'Vespertino', 'Matutino / Vespertino'];
            return view('editar-curso', compact('curso', 'turnos'));
        }
        
        return redirect()->route('gerir.cursos', $id)->with(['errors' => 'Falha ao editar curso']);
    }


    /**
    * Altera dados do evento
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function alterarEvento(request $request, $id){
         
        $dadosForm = $request->all();

        $evento = Evento::where('id', '=', $id)->first();

        $update = $evento->update($dadosForm);

        $foto = Foto::where('evento_id', '=', $id)->first();

        if($request->imagem != null) {

            // $foto = Foto::where('evento_id', '=', $id)->first();
            unlink($foto->path);

            $delete = $foto->delete();

            $nome = $evento->titulo;
            $arrayNome = explode(' ', $nome);
            $primeiroName = $arrayNome[0];

            $nomeImagem = $primeiroName . '_' . $evento->id . '.' . $request->imagem->getClientOriginalExtension();
            $request->imagem->storeAs('evento_imagens', $nomeImagem);

            $foto = new Foto();
            $foto->evento_id = $evento->id;
            $foto->path = "img/" . "img-eventos/" . $nomeImagem;
            $foto->save();

            $tmpName = $_FILES['imagem']['tmp_name']; // Recebe o arquivo temporário.
            move_uploaded_file($tmpName, "img/img-eventos/" . $nomeImagem);
        }

        if($update){
            
            
            return view('editar-evento', compact('evento', 'foto'));
        }
        
        return redirect()->route('gerir.evento', $id)->with(['errors' => 'Falha ao editar curso']);
    }


    /**
    * Exibe a mensagem enviada por pessoas
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function exibirMensagem($id){
        
        $mensagem = Mensagem::where('id', '=', $id)->first();

        return view('responder-mensagem', compact('mensagem'));
    }


    /**
    * Responder a mensagem enviada por pessoas
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function responderMensagem(request $request, $id){
        
        $mensagem = Mensagem::where('id', '=', $id)->first();

        $mensagem->resposta = $request->resposta;
        $mensagem->respondido = true;

        $mensagem->save();

        // $mensagem->update(['resposta' => $request->resposta, 'respondida' => 1]);


        return view('responder-mensagem', compact('mensagem'));
    }

    /**
    * Cadastra administradores
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function registrar(request $request){
        
        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());

        $administrador = new Administrador;
        $administrador->idAdministrador = $user->id;
        $administrador->nome = $request->nome;

        $administrador->save();


        $users = User::where('id', '!=', Auth::user()->id)->get();


        return view('administradores', compact('users'));
    }


}

