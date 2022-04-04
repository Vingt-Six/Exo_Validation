<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $total = Book::sum('note');
        $books = Book::all();
        return view('welcome', compact('books', 'total'));
    }

    public function create() {
        return view('pages.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:1|max:20',
            'text' => 'required|min:1|max:300',
            'note' => 'required|integer|between:1,5'
        ]);

        $store = new Book();
        $store -> name = $request -> name;
        $store -> text = $request -> text;
        $store -> note = $request -> note;
        $store -> save();
        return redirect('/')->with('success', 'add successfully');
    }

    public function edit($id) {
        $edit = Book::find($id);
        return view('pages.edit', compact('edit'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'name' => 'required|min:1|max:20',
            'text' => 'required|min:1|max:300',
            'note' => 'required|integer|between:1,5'
        ]);

        $update = Book::find($id);
        $update -> name = $request -> name;
        $update -> text = $request -> text;
        $update -> note = $request -> note;
        $update -> save();
        return redirect('/')->with('warning', 'Edit successfully');
    }
    
    public function destroy($id) {
        $delete = Book::find($id);
        $delete -> delete();
        return redirect('/')->with('danger', 'delete successfully');
    }
}
