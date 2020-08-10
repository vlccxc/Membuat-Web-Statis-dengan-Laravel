<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;

class PertanyaanController extends Controller
{
    public function create(){
    	return view('questions.create');
    }
    public function store(Request $request){
    	// dd($request->all());
    	$request->validate([
    		"judul" => 'required|unique:questions',
    		"isi" => 'required'
    	]);
        //insert menggunakan query builder
    	// $query = DB::table('questions')
    	// 			->insert([
    	// 				"judul" => $request["judul"],
    	// 				"isi" => $request["isi"]
    	// 			]);
    	// 			dd($query);

        //insert menggunakan model orm
        // $question = new Question;
        // $question->judul = $request["judul"];
        // $question->isi = $request["isi"];
        // $question->save();

        //insert menggunakan model mass assignment
        $question = Question::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);

    	return redirect('/pertanyaan')->with('success', 'Question Saved!');
    }
    public function index(){
        //menampilkan semua data menggunakan query builder
    	// $questions = DB::table('questions')->get();

        //menampilkan semua data menggunakan model
        $questions = Question::all();

    	// dd($questions);
    	return view('questions.index', compact('questions'));
    }
    public function show($pertanyaan_id){
        //menampilkan data tertentu menggunakan query builder
    	// $question = DB::table('questions')->where('id', $pertanyaan_id)->first();

        //menampilkan data tertentu menggunakan model
        $question = Question::find($pertanyaan_id);

    	// dd($question);
    	return view('questions.show', compact('question'));
    }
    public function edit($pertanyaan_id){
        //mengedit data tertentu menggunakan query builder
    	// $question = DB::table('questions')->where('id', $pertanyaan_id)->first();

        //mengedit data tertentu menggunakan model
        $question = Question::find($pertanyaan_id);

    	return view('questions.edit', compact('question'));
    }
    public function update($pertanyaan_id, Request $request){
    	$request->validate([
    		"judul" => 'required|unique:questions',
    		"isi" => 'required'
    	]);

        //mengupdate data tertentu menggunakan query builder
    	// $query = DB::table('questions')
    	// 			->where('id', $pertanyaan_id)
    	// 			->update([
    	// 				"judul" => $request["judul"],
    	// 				"isi" => $request["isi"]
    	// 			]);

        //mengupdate data tertentu menggunakan model mass update
        $update = Question::where("id", "$pertanyaan_id")->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]); 

       	return redirect('/pertanyaan')->with('success', 'Success Update Question!');
    }
    public function destroy($pertanyaan_id){
        //menghapus data tertentu menggunakan query builder
    	$query = DB::table('questions')->where('id', $pertanyaan_id)->delete();

        //menghapus data tertentu menggunakan model
        Question::destroy($pertanyaan_id);

    	return redirect('/pertanyaan')->with('success', 'Delete Question Success!');
    }
}
