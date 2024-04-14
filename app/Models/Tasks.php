<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Tasks extends Model
{
    protected $fillable = [ 'name','task'];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    /**
     * Store a new flight in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...
 
        $tasks = new Tasks;
 
        $tasks->name = $request->name;
        $tasks->task = $request->task;
 
        $tasks->save();
    }

    
}

?>