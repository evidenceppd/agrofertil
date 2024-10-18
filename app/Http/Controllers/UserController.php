<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Symfony\Component\Mime\Message;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        if(Auth::user()->role == 2) {
            $users = User::orderby('updated_at', 'desc')->get();
            return view('admin.users.users_admin', [
                'users' => $users,
            ]);
        }
        else {
            return redirect('/')->with('error', 'Você não possui permissão para acessar essa página.');
        }
    }

    public function create(Request $request) {
        if(Auth::user()->role == 2) {
        $user = new User();
        return view('admin.users.users_edit');
        }
        else {
            return redirect('/')->with('error', 'Você não possui permissão para acessar essa página.');
        }
    }

    public function edit(Request $request, User $user) {
        if(Auth::user()->role == 2) {
        return view('admin.users.users_edit', [
            'user' => $user,
        ]);
    }
    else {
        return redirect('/')->with('error', 'Você não possui permissão para acessar essa página.');
    }
    }

    public function store(Request $request) {
        if(Auth::user()->role == 2) {
        $input['email'] = $request->email;
        $rules = array('email' => 'unique:users,email');

        $validator = Validator::make($input, $rules);

        if($validator->fails()) {
            return redirect()->back()->with('error', 'Este e-mail já está em uso!');
        }
        else {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now(),
            'role' =>  $request->has('pole') ? 2 : 1,
        ]);

        $user->save();

        if($user->save()) {
        return redirect('/admin/usuarios')->with('success', 'Usuário cadastrado com sucesso!');
        }
        else {
            return redirect()->back()->with('error', 'Usuário não cadastrado!');
        }
    }
    }
    else {
        return redirect('/')->with('error', 'Você não tem permissão para efetuar essa ação.');
    }
}

    public function update(Request $request, User $user) {
        if(Auth::user()->role == 2) {
        $user = User::find($user->id);

        $input['email'] = $request->email;
        $rules = array('email' => 'unique:users,email,'.$user->id    );

        $validator = Validator::make($input, $rules);

        if($validator->fails()) {
            return redirect()->back()->with('error', 'Este e-mail já está em uso!');
        }
        else {
            if(!empty(trim($request->password))) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'updated_at' => now(),
                'role' =>  $request->has('pole') ? 2 : 1,
            ]);
        }

        else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'updated_at' => now(),
                'role' =>  $request->has('pole') ? 2 : 1,
            ]);
        }

            $user->save();

            if($user->save()) {
                return redirect('/admin/usuarios')->with('success', 'Dados de <b><q>'.$user->name.'</b></q> foram atualizados com sucesso!');
                }
                else {
                    return redirect()->back()->with('error', 'Dados inválidos!');
                }
        }
    }
    else {
        return redirect('/')->with('error', 'Você não tem permissão para efetuar essa ação.');
    }

    }

    public function delete(Request $request, User $user) {
        if(Auth::user()->role == 2) {
        $user = user::find($user->id);
        if($user->id !== 1) {
        $user->delete();
        return redirect(route('users.index'))->with('success', 'Usuário deletado com sucesso!');
    }
    else {
        return redirect()->back()->with('error', 'Usuário não deletado!');
    }
}
else {
    return redirect('/')->with('error', 'Você não tem permissão para efetuar essa ação.');
}
    }

}

