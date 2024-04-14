<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Task;
use App\Models\Tasks;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TaskController extends BaseController
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
        $results = Tasks::all();
        return $results;
    }
    private function getSelectedData($id)
    {
        $results = Tasks::find($id);
        return $results;
    }
    public function submit(Request $request)
    {
        if ($request->filled('name')) {
            $name = $request->input('name');
            $tasks = $request->input('name');
            $flight = Tasks::create([
                'task' => $tasks,
                'name' => $name
                
            ]);
            
            //DB::insert('insert into task_file ( name,taks,created_at,updated_at) values (?, ?,NOW(),NOW())', [$name, $tasks]);
        }

        return redirect()->route('showData');
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

    
    public function editForm($id)
    {
        $data = $this->getSelectedData($id);
        return view('edit',['request'=>$data]);
    }

    public function update(Request $request)
    {
        $tasks = Tasks::find($request->input('id'));
        $tasks->name = $request->input('name');
        $tasks->task = $request->input('name');
        $tasks->save();

        return redirect()->route('showData');
    }
    public function delete($id)
    {
        $tasks = Tasks::find($id);
        $tasks->delete();
        return redirect()->route('showData');
    }
}
