<?php

namespace App\Http\Controllers;


use App\Repositories\QuestionsRepositoryRepositoryEloquent;
use App\Repositories\ActivitiesRepositoryRepositoryEloquent;
use Carbon\Carbon;
use Illuminate\Http\Request;
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

    public function __construct(QuestionsRepositoryRepositoryEloquent $questions,
                                ActivitiesRepositoryRepositoryEloquent $activities, Carbon $carbon)
    {
        $this->questions = $questions;
        $this->activities = $activities;
        $this->carbon = $carbon;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = $this->questions->all();
        return view('questions/index', ['questions' => $questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = $this->activities->all();
//        return $datas;
        return view('questions/create', ['datas' => $datas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $date = $this->carbon->now()->format('d-m-Y');

        $path = Storage::put($date, $request->file('image'), 'public');


        if (Storage::disk('s3')->exists($path)) {

            $url = 'https://s3-sa-east-1.amazonaws.com/guitterquiz/' . $path;
            $answer = 'a';
            $to_save = [
                'activities_id' => $request->input('activities_id'),
                'content_of_question' => $request->input('content_of_question'),
                'a' => $request->input('a'),
                'b' => $request->input('b'),
                'c' => $request->input('c'),
                'd' => $request->input('d'),
                'image' => $url,
                'answer' => $answer
            ];
            $this->questions->create($to_save);
            return redirect()->route('questions');
        }
        return "sem imagem";
//


        return redirect()->route('assessments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('questions/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function showQuestions()
    {

    }

    public function result()
    {

    }
}
