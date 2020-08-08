<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    	$query = DB::table('questions')
    				->insert([
    					"judul" => $request["judul"],
    					"isi" => $request["isi"]
    				]);
    				dd($query);
    	return redirect('/pertanyaan')->with('success', 'Question Saved!');
    }
    public function index(){
    	$questions = DB::table('questions')->get();
    	// dd($questions);
    	return view('questions.index', compact('questions'));
    }
    public function show($pertanyaan_id){
    	$question = DB::table('questions')->where('id', $pertanyaan_id)->first();
    	// dd($question);
    	return view('questions.show', compact('question'));
    }
    public function edit($pertanyaan_id){
    	$question = DB::table('questions')->where('id', $pertanyaan_id)->first();
    	return view('questions.edit', compact('question'));
    }
    public function update($pertanyaan_id, Request $request){
    	$request->validate([
    		"judul" => 'required|unique:questions',
    		"isi" => 'required'
    	]);

    	$query = DB::table('questions')
    				->where('id', $pertanyaan_id)
    				->update([
    					"judul" => $request["judul"],
    					"isi" => $request["isi"]
    				]);
       	return redirect('/pertanyaan')->with('success', 'Success Update Question!');
    }
    public function destroy($pertanyaan_id){
    	$query = DB::table('questions')->where('id', $pertanyaan_id)->delete();
    	return redirect('/pertanyaan')->with('success', 'Delete Question Success!');
    }
}
