<?php

namespace App\Http\Controllers;


use App\Repositories\PerformanceRepositoryEloquent;
use App\Repositories\QuestionsRepositoryRepositoryEloquent;
use App\Repositories\ActivitiesRepositoryRepositoryEloquent;
use App\Repositories\UserRepositoryRepositoryEloquent;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;


class QuestionsController extends Controller
{
    private $questions;
    /**
     * @var ActivitiesRepositoryRepository
     */
    private $activities;

    /**
     * @var Carbon
     */
    private $carbon;
    /**
     * @var User
     */
    private $user;
    /**
     * @var Auth
     */
    private $auth;
    /**
     * @var AuthManager
     */
    private $authManager;
    /**
     * @var UserRepositoryRepositoryEloquent
     */
    private $userRepositoryRepositoryEloquent;
    /**
     * @var PerformanceRepositoryEloquent
     */
    private $performance;

    public function __construct(
        QuestionsRepositoryRepositoryEloquent $questions,
        ActivitiesRepositoryRepositoryEloquent $activities,
        Carbon $carbon,
        AuthManager $authManager,
        UserRepositoryRepositoryEloquent $user,
        PerformanceRepositoryEloquent $performance
    )
    {
        $this->questions = $questions;
        $this->activities = $activities;
        $this->carbon = $carbon;
        $this->user = $user;
        $this->authManager = $authManager;
        $this->performance = $performance;
    }


    public function index()
    {
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
        $questions = $this->questions->all();
        return view('questions/index', ['questions' => $questions]);
    }


    public function create()
    {
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
        $datas = $this->activities->all();
//        return $datas;
        return view('questions/create', ['datas' => $datas]);
    }


    public function store(Request $request)
    {

//        Validator::make($request->all(), [
//            'activities_id' => 'required',
//            'content_of_question' => 'required',
//            'a' => 'required',
//            'b' => 'required',
//            'c' => 'required',
//            'd' => 'required',
//            'image' => 'mimes:jpeg,png',
//            'image_r' => 'mimes:jpeg,png',
//            //'tip' => 'required',
////            'answer' => 'required',
//            'answer' => [
//                'required',
//                function ($attribute, $value, $fail) {
//                    if (preg_match("/[a-dA-D]/", $value)!==1) {
//                        $fail('A resposta deve conter letras de A - D');
//                    }
//                },
//
//            ],
//        ])->validate();
        // Todo resolver problemas de validação
        $rules = [
            'activities_id' => 'required',
            'content_of_question' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'image' => 'mimes:jpeg,png',
            'image_r' => 'mimes:jpeg,png',
            //'tip' => 'required',
            'answer' => 'required',
        ];
        $validatedData = $request->validate($rules);

        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }

        $data = $request->all();
        $date = $this->carbon->now()->format('d-m-Y');

        $path = Storage::put($date, $request->file('image'), 'public');
        $path2 = Storage::put($date, $request->file('image_r'), 'public');


        if (Storage::disk('s3')->exists($path)) {

            $url = 'https://s3-sa-east-1.amazonaws.com/guitterquiz/' . $path;
            // TODO fazer importação da imagem de resposta
            $url_r = 'https://s3-sa-east-1.amazonaws.com/guitterquiz/' . $path2;
            $url_r = Crypt::encryptString($url_r);
            $answer = Crypt::encryptString(strtolower($request->input('answer')));

            $to_save = [
                'activities_id' => $request->input('activities_id'),
                'content_of_question' => $request->input('content_of_question'),
                'a' => $request->input('a'),
                'b' => $request->input('b'),
                'c' => $request->input('c'),
                'd' => $request->input('d'),
                'image' => $url,
                'image_r' => $url_r,
                'tip' => $request->input('tip'),
                'answer' => $answer
            ];
            $this->questions->create($to_save);
            return redirect()->route('questions');
        }
        return "sem imagem";
//


        return redirect()->route('assessments');
    }

    public function show($id)
    {
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
        //
    }


    public function edit($id)
    {
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
        return view('questions/edit');
    }


    public function update(Request $request, $id)
    {
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
        //
    }


    public function destroy($id)
    {
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
         $result = $this->questions->delete($id);
        if ($result) {
            return redirect()->route('questions');
            // Todo criar mensagem de sucesso na sessao
        }else{
            // Todo criar mensagem de não foi possivel deletar
            return redirect()->back();
        }

    }


    public function showquestions()
    {

        $date = $this->carbon->now()->format('Y-m-d');
        $data = $this->activities->findWhere(['date' => $date])->toArray();

        if(sizeof($data) == 0){
            return redirect()->route('dashboard');
            // TODO colocar mensagem de nenhum questionario disponivel
        }

        $performance = $this->authManager->user()->performance;

        if (sizeof($performance) >= 1) {
            foreach ($performance as $perform) {
                if ($perform['date'] == $date) {
                    return redirect()->route('dashboard');
                    // TODO colocar mensagem de nenhum questionario disponivel
                }
            }
        }

        if (sizeof($data) >= 1) {
            $id = $data[0]['id'];
        } else {
            $id = 0;

        }

        $activitie = $this->activities->find($id);

        $questions = $activitie->questions()->get()->toArray();
        if (sizeof($questions) < 1) {
            return redirect()->route('dashboard');
            // TODO colocar mensagem de nenhum questionario disponivel
        }

        $length = sizeof($questions);
        return view('questions/solve', ['questions' => $questions, 'length' => $length, 'activitie' => $activitie]);
    }

    public function result(Request $request)
    {
        $date = $this->carbon->now()->format('Y-m-d');
        $length = $request->input('length');
        $discipline_name = $request->input('discipline_name');
        $total = 0;
        if ($length) {
            $result = [];
            for ($i = 0; $i < $length; $i++) {
                $ra = $request->input('ra_' . ($i + 1)) == "on" ? 1 : 0;
                $rb = $request->input('rb_' . ($i + 1)) == "on" ? 1 : 0;
                $rc = $request->input('rc_' . ($i + 1)) == "on" ? 1 : 0;
                $rd = $request->input('rd_' . ($i + 1)) == "on" ? 1 : 0;
                $a = $request->input('a_' . ($i + 1));
                $b = $request->input('b_' . ($i + 1));
                $c = $request->input('c_' . ($i + 1));
                $d = $request->input('d_' . ($i + 1));
                $content_of_question = $request->input('content_of_question_' . ($i + 1));


                $answer = Crypt::decryptString($request->input('answer_' . ($i + 1)));
                $image_r = Crypt::decryptString($request->input('image_r_' . ($i + 1)));

                $to_eliminate = $ra + $rb + $rc + $rd;
                $status =
                $result[$i] = [

                    'a' => $a,
                    'b' => $b,
                    'c' => $c,
                    'd' => $d,
                    'ra' => $ra,
                    'rb' => $rb,
                    'rc' => $rc,
                    'rd' => $rd,
                    'answer' => $answer,
                    'image_r' => $image_r,
                    'to_eliminate' => $to_eliminate,
                    'content_of_question' => $content_of_question,


                ];

                if ($result[$i]['to_eliminate'] == 1) {

                    if ($result[$i]['r' . $result[$i]['answer']] == 1) {
                        $result[$i]['status'] = 'Acertou';
                        $total += 1;
                    } else {
                        $result[$i]['status'] = 'Errou';
                    }

                } elseif ($result[$i]['to_eliminate'] < 1) {
                    $result[$i]['status'] = 'Inválida, não marcou nenhuma alternativa';
                } elseif ($result[$i]['to_eliminate'] > 1) {
                    $result[$i]['status'] = 'Inválida, marcou mais de uma alternativa';
                }


            }

            //

        }

        $note = ($total / $length) * 100;
        $to_save = ['note' => '', 'date' => $date, 'hit_percentage' => $note, 'number_of_questions'=>$length,'discipline_name'=>$discipline_name,'total_resolved'=>'','resolved'=>$total];

        $this->authManager->user()->performance()->create($to_save);
        return view('questions/result', ['result' => $result, 'length' => $length, 'total' => $total]);


    }


}
