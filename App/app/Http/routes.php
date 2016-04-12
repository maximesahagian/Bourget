<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Newsletters;
use App\Task;
use Illuminate\Http\Request;


/**
 * Show Task DashBoard
 */
Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('tasks', [
        'tasks' => $tasks,

    ]);
});

/**
 * Add new tasks
 */

Route::post('/task', function(Request $request){
//
    $validator = Validator::make($request->all(),[
        'name' => 'required|max:255'
    ]);

    if($validator->fails()){
        return redirect('/')
        ->withInput()
        ->withErrors($validator);
    }

    $task = new Task;
    $task->name=$request->name;
    $task->is_done = 0;
    $task->save();

    return redirect('/');
});

Route::delete('/task/{task}', function(Task $task){
    $task->delete();

    return redirect('/');
});

Route::post('/task/{task}/done',['as'=> 'task-done', function(Task $task){
    $task->update([
        'is_done' => 1,
        'done_at' => new DateTime()
    ]);
    return redirect('/');
}]);

Route::post('/newsletters', function(Request $request){
//
    $validator = Validator::make($request->all(),[
        'mail' => 'required|max:255'
    ]);
    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $mail = new Newsletters;
    $mail->mail=$request->mail;
    $mail->save();

    return redirect('/');
});

