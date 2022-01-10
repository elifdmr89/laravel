<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Resources\UserResource;
use Session;

class TaskController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $task=Task::all();

        return view('task.index')->with('task', $task);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = Task::create(['name' => $request->name]);
        $task=Task::all();
        if($task) {
            //return response() ->json(['code'=>200,'success' => 'Hooray']);
            //Task::flash('msg', 'Thanks for voting');
            $message=200;
            return view('task.index')
                ->with('task', $task)
                ->with('message',$message);
        }
        else{
            $message=400;
            return view('task.index')
                ->with('task', $task)
                ->with('message',$message);

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $deger=Task::where('id', $id)
      ->update(['name' => $request->name]);
        if(isset($deger)){
            \Session::flash('message', "Düzenlendi");
        }
        else{
            \Session::flash('message', "Düzenlenmedi");
        }
      return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Task::find($id);
        $delete->delete();
        if(isset($delete)) {
            \Session::flash('message', "Silindi");
        }
        else{
            \Session::flash('message', "Silinmedi");

        }
        return redirect()->back();

    }
}
