<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        //render a list of a resource.
        $assignments = Assignment::latest()->get();

        return view('assignments.index', ['assignments' => $assignments]);
    }

    public function show(Assignment $assignment)
    {
        // Show a single resource.

        return view('assignments.show', ['assignment' => $assignment]);
    }


    public function create()
    {
        //Shows a view to create a new resource
        return view('assignments.create');
    }

    public function store()
    {
        Assignment::create($this->validateAssignment());

        return redirect('/assignments');
    }

    public function edit(Assignment $assignment)
    {
        //Show a view to edit an existing resource
        return view("/assignments.edit", compact('assignment'));
    }

    public function update(Assignment $assignment)
    {
        $assignment->update($this->validateAssignment());

        return redirect('/assignments/' . $assignment->id);
    }

    public function destroy()
    {
        //Delete the resource.

    }

    /**
     * @return array
     */
    public function validateAssignment(): array
    {
        return request()->validate([
            'id' => 'required',
            'name' => 'required',
            'weight' => 'required',
            'grade' => 'required'
        ]);
    }
}
