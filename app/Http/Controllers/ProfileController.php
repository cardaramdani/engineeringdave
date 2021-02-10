<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use Validator;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = user::orderBy('created_at', 'desc')->Paginate(5); 
        return view('/layout.users', compact('Users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    { 
        $User = $user;
        return view('/layout.profile', compact('User'));    
        
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
    
    public function edituser(User $user)
    {
        $User = $user;
         return view('/layout.profile_user', compact('User'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)

     {   
        // $data = $request->validate([
        //        'username'=>'required|unique:users,username',
        //        'departement'=>'required|max:11',
        //          'email'=>'required|unique:users,email',
        //         'nohp' =>'required|max:13|unique:users,nohp',
        //         'gambaruser' => '|file|image|mimes:jpeg,png,jpg|max:2080'
        //     ]);
if ($request->username==Auth::user()->username) 
    {$username=Auth::user()->username;}
    else {$request->validate(['username'=>'required|unique:users,username']);
$username=$request->username;}
if ($request->email==Auth::user()->email) 
    {$request->email;}
    else {$request->validate(['email'=>'required|unique:users,email']);}

if ($request->departement==Auth::user()->departement) 
    {$request->departement;}
    else {$request->validate(['departement'=>'required|max:11']);}

if ($request->nohp==Auth::user()->nohp) 
    {$request->nohp;}
    else{$request->validate(['nohp'=>'required|max:13|unique:users,nohp']);}

       $request->validate(['gambaruser' => '|file|image|mimes:jpeg,png,jpg|max:2080']);


        $Gambarlama=$request->Gambarlama;
        $tmp = $request->file('gambaruser');
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dataIMG_user';
         if ($tmp==0) {
             $nama_file= $Gambarlama;
             
        }else{
            $nama_file = time()."_".$tmp->getClientOriginalName(); 
                    // upload file
         $tmp->move($tujuan_upload,$nama_file);  
        }
       
        User::where ('id', $user->id)
        ->update([
            'username'=>$username,
            'departement'=>$request->departement,
            'jabatan'=>$request->jabatan,
            'email'=>$request->email,
            'nohp' => $request->nohp,
            'gambar' => $nama_file
                ]);
return redirect('/home' )->with('status', 'Profile Berhasil Diupdate!');     
}

public function updateuser(Request $request, User $User)

     {   
        // $data = $request->validate([
        //        'username'=>'required|unique:users,username',
        //        'departement'=>'required|max:11',
        //          'email'=>'required|unique:users,email',
        //         'nohp' =>'required|max:13|unique:users,nohp',
        //         'gambaruser' => '|file|image|mimes:jpeg,png,jpg|max:2080'
        //     ]);

// if ($request->username==Auth::user()->username) 
//     {$request->username;}
//     else {$request->validate(['username'=>'required|unique:users,username']);}
// if ($request->email==Auth::user()->email) 
//     {$request->email;}
//     else {$request->validate(['email'=>'required|unique:users,email']);}

// if ($request->departement==Auth::user()->departement) 
//     {$request->departement;}
//     else {$request->validate(['departement'=>'required|max:11']);}

// if ($request->nohp==Auth::user()->nohp) 
//     {$request->nohp;}
//     else{$request->validate(['nohp'=>'required|max:13|unique:users,nohp']);}
       $request->validate(['gambaruser' => '|file|image|mimes:jpeg,png,jpg|max:2080']);


        $Gambarlama=$request->Gambarlama;
        $tmp = $request->file('gambaruser');
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dataIMG_user';
         if ($tmp==0) {
             $nama_file= $Gambarlama;
             
        }else{
            $nama_file = time()."_".$tmp->getClientOriginalName(); 
                    // upload file
         $tmp->move($tujuan_upload,$nama_file);  
        }
       
        User::where ('id', $User->id)
        ->update([
            'username'=>$request->username,
            'departement'=>$request->departement,
            'jabatan'=>$request->jabatan,
            'email'=>$request->email,
            'nohp' => $request->nohp,
            'gambar' => $nama_file
                ]);
return redirect('/home' )->with('status', 'Profile Berhasil Diupdate!');     
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    return redirect('/users' )->with('status', 'Data Berhasil Dihapus!');
    }
    public function changepass(){return view('/layout.updatepass');}

    public function updatepass(){
                                // custom validator
        Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, \Auth::user()->password);
        });
 
        // message for custom validation
        $messages = [
            'password' => 'Invalid current password.',
        ];
 
        // validate form
        $validator = Validator::make(request()->all(), [
            'current_password'      => 'required|password',
            'password'              => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
 
        ], $messages);
 
        // if validation fails
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }
 
        // update password
        $user = User::find(Auth::id());
 
        $user->password = bcrypt(request('password'));
        $user->save();
 
                    return redirect('home')->with('status', 'Password Berhasil Diupdate!');     
                            }
}
