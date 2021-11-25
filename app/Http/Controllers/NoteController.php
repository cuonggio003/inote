<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNoteRequest;

class NoteController extends Controller
{
    function showNote() {
        $notes = Note::all();
        return view('notes.list', compact('notes'));
    }

    function createNote()
    {
        $notes = Note::all();
        return view('notes.create', compact('notes'));
    }


    function store(CreateNoteRequest $request)
    {   
        $note = new Note();
        $note->name = $request->name;
        $note->status = $request->status;
        $note->manager = $request->manager;
        $note->note = $request->note;
        $note->save();

        return redirect()->route('show.note');
    }

    function updateNote($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.update', compact('note'));
        
    }

    function editNote(Request $request, $id) {
        $note = Note::findOrFail($id);
        $note->name = $request->name;
        $note->status = $request->status;
        $note->manager = $request->manager;
        $note->note = $request->note;
        $note->save();
        return redirect()->route('show.note');
    }

    function deleteNote(Request $request, $id){
        
        $note = note::findOrFail($id);
       
        $note->delete();

        return redirect()->route('show.note');

    }

}

