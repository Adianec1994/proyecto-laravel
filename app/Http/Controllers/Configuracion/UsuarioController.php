<?php

namespace App\Http\Controllers\Configuracion;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CambiarPasswRequest;
use Illuminate\Validation\Rule;
use function foo\func;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario= User::all();
        $usuario->each(function ($usuario){
            $usuario->rol;
        });

        return view('configuracion.usuario.index',compact('usuario'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol= Role::all();
        return view('configuracion.usuario.create',compact('rol'))->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'max:50','unique:users'],
            'username'=>['required','unique:users']
        ]);
        $usuario_n=new User;
        $usuario_n->name=$request->name;
        $usuario_n->email=$request->email;
        $usuario_n->cargo=$request->cargo;
        $usuario_n->username=$request->username;
        $usuario_n->rol_id=$request->rol_id;
        $usuario_n->password=$request->password;
        /*if ($request->hasFile('imagen'))
        {

            $file=$request->file('avatar');
            $name='SPD'.time().'.'.$file->getClientOriginalExtension();
            $path=public_path().'/img/avatar';
            $file->move($path,$name);
            $avatar=new img_user;
            $avatar->nombre=$name;
            $avatar->save();
            $usuario_n=$avatar->id;
        }*/
        $usuario_n->save();
        $usuario= User::all()->where('activo','true');
        $usuario->each(function ($usuario){
            $usuario->rol;
        });
        return $this->index();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=User::find($id);
        $usuario->each(function($usuario){
            $usuario->rol;
        });

        $rol= Role::all();

        return view('configuracion.usuario.edit',compact('usuario','rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioRequest $request, $id)

    {
        $request->validate([
            'email' => Rule::unique('users')->ignore($id),
            'username'=>Rule::unique('users')->ignore($id),
        ]);

        $usuario=User::find($id);
        $usuario->name=$request->name;
        $usuario->email=$request->email;
        $usuario->cargo=$request->cargo;
        $usuario->username=$request->username;
        $usuario->rol_id=$request->rol_id;

        $usuario->password=$request->password;

        /*if ($request->hasFile('imagen'))
        {
            $file=$request->file('avatar');
            $name='SPD'.time().'.'.$file->getClientOriginalExtension();
            $path=public_path().'/img/avatar';
            $file->move($path,$name);
            $avatar=new img_user;
            $avatar->nombre=$name;
            $avatar->save();
            $usuario=$avatar->id;
        }*/
        $usuario->save();
        return 'usuario';

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario=User::find($id);
        $usuario->activo=false;
        $usuario->username='desabilitado'.$usuario->id;
        $usuario->email='desabilitado'.$usuario->id;
        $usuario->update();
        return 'usuario';
    }

    public function cambiarPassword()
    {
        return view('configuracion.usuario.password')->render();
    }

    public function nuevoPassword(CambiarPasswRequest $request)
    {
        if(Hash::check($request->password_actual,Auth::User()->password)){
            $usuario=User::find(Auth::user()->id);
            $usuario->password=$request->password;
            $usuario->save();
            return 'cambio';
        }
        else {
            return false;
        }
    }

}
