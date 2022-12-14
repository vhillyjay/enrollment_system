<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreSubjectRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Subjects/Index', [
            'subjects' => Subject::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Subjects/Create', [
            //
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubjectRequest $request)
    {
        // Subject::create([
        //     'subject_name' => $request->subject_name,
        //     'subject_code' => $request->subject_code,
        //     'classroom' => $request->classroom,
        //     'instructor' => $request->instructor,
        // ]);
        Subject::create($request->validated());

        return Redirect::route('subjects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        // dd($subject);
        return Inertia::render('Subjects/Edit', [
            'subjects' => $subject
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    // public function update(StoreSubjectRequest $request, Subject $subject)
    {
        // $validated = $request->validate([
        //     'subject_name' => 'required|unique:subjects',
        //     'subject_code' => 'required|min:7|max:7|unique:subjects',
        //     'classroom' => '',
        //     'instructor' => '',
        // ]);
        $subject->update([
            'subject_name' => $request->subject_name,
            'subject_code' => $request->subject_code,
            'classroom' => $request->classroom,
            'instructor' => $request->instructor,
            // 'subject_name' => Request::input('subject_name'),
            // 'subject_code' => Request::input('subject_code'),
            // 'classroom' => Request::input('classroom'),
            // 'instructor' => Request::input('instructor'),
        ]);
        // Subject::update($request->validated());
        return Redirect::route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return Redirect::route('subjects.index');
    }
}
