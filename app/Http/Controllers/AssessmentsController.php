<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ActivitiesRepositoryRepositoryEloquent;
use Illuminate\Support\Facades\Gate;

class AssessmentsController extends Controller
{
    /**
     * @var ActivitiesRepositoryRepositoryEloquent
     */
    private $activities;

    public function __construct(ActivitiesRepositoryRepositoryEloquent $activities)
    {
        $this->activities = $activities;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
        $activities = $this->activities->all();

        return view('assessments.index', ['activities' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
        return view('assessments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'date' => 'required|unique:activities,date',
        ];
        $validatedData = $request->validate($rules);



        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }

        $this->activities->create($request->all());
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
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
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
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
        return view('assessments.edit');
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
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
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
        if (Gate::denies('admin')) {
            return redirect()->route('dashboard');
        }
        $result = $this->activities->delete($id);
        if ($result) {
            return redirect()->route('assessments');
            // Todo criar mensagem de sucesso na sessao
        } else {
            // Todo criar mensagem de não foi possivel deletar
            return redirect()->back();
        }
    }
}
