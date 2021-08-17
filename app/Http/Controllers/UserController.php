<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserFormRequest;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::all();
        if ($request->ajax()) {
            return DataTables::of($data)
                    ->addColumn('action', function($row){
                        return view('users.actions', compact('row'));
                    })
                    ->make(true);
        }
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserFormRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();
        try{
            $request->session()
                ->flash('message', "Usuário {$user->name} criado com sucesso");
    
            return redirect(route('index'))
                    ->with(['message' => 'Usuário criado com sucesso']);
        }catch(\Exception $e){
            return response()->json([
                "error"=>true,
                "message"=> $e->getMessage()
            ]);
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
        // $user = User::findOrFail($id);
        // return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
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
        $newUser = $request->validate([
            'name' => 'required|max:255|min:3',
            'username' => 'required|max:32',
            'password' => 'required|min:6'
        ]);

        User::whereId($id)->update($newUser);
        
        return redirect(route('index'))
                ->with(['message'=>'Usuário atualizado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user){
            $user->delete();
        }
        return redirect()->route('index');
    }
}
