<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class UserController extends BaseController
{
    public function show(Request $request)
    {
        //$results = app('db')->select("SELECT * FROM task_file");
        /*$results = DB::select('select * from task_file ');
        return response()->json(['name' =>$results[0]->taks]);
        */
        $results = $this->getData();
        return response()->json(['name' => $results[0]->taks]);
    }
    private function getData()
    {
        $results = DB::select('select * from task_file ');
        //$results = Task::all();
        return $results;
    }
    public function submit(Request $request)
    {
        if ($request->filled('name')) {
            $name = $request->input('name');
            $tasks = $request->input('name');
            DB::insert('insert into task_file ( name,taks,created_at,updated_at) values (?, ?,NOW(),NOW())', [$name, $tasks]);
        }

        $data = $this->getData();
        $length = count($data) - 1;
        return response()->json(['name' => $data[$length]->taks]);
    }
    public function showForm(Request $request)
    {
        return view('form');
    }
    
    public function showData(Request $request)
    {
        $data = $this->getData();
        return view('show',['tasks'=>$data]);
    }

}
