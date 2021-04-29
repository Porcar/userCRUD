<?php
namespace App\Http\Controllers;
use App\User;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //We check authentication for users here (can also be done in the routes file)
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Dashboard
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('home',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //Function to edit the user
    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }

    //Function to update the changes to the DB
    public function update(Request $request, User $user){

        //validation
        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);

        $user->update($request->all());

        return redirect()->route('home')->with('success','User updated successfully');
    }

    //Function to delete the user
    public function destroy(User $user)
    {
        if($user != Auth::user()){
            $user->delete();
            return redirect()->route('home')->with('success','User deleted successfully');
        }            
        return redirect()->route('home')->with('success',"You can't delete yourself");
    }
}
