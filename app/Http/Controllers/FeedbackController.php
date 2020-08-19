<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function chamarView ()
    {
        return view('Feedback');
        
    }

    public function feedbackLista (Request $request)
    {
        $consultaFeedback = DB::table('feedback')->get();
        return view('FeedbackLista', compact('consultaFeedback'));
    }

    public function feedbackInsert(Request $request) {
        
        $this->feedbackValid($request);
        $name = "padrao.jpg";
        if($request->hasFile('uploaded_file')){
            $image = $request->file('uploaded_file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img_feedback');
            $image->move($destinationPath, $name);
        }
        
        $feedback = Feedback::create([
            'nome' => $request->Nome,
            'sobrenome' => $request->Sobrenome,
            'email' => $request->email,
            'feedback_descricao' => $request->feedback_descricao,
            'imagem' => $name 
            ]);
            
            return response()->json($request);
        }
        public function feedbackValid(Request $request)
        {
            $feedbackvalidate = $request->validate([
                'Nome' => 'required',
                'Sobrenome' => 'required',
                'feedback_descricao' => 'required'
                ]);
                return $feedbackvalidate;
            }
            
        }
