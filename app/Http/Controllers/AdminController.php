<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guests;
use App\Kunjungan;
use App\MasterSurvey;
use App\RatingPenilaian;
use App\SurveyData;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Exports\CsvExport;
use App\MasterKeperluan;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }
    public function index(){
        return view('admin.index');
    }
    
    public function daftarAdmin(){
        $users=User::all();
        return view('admin.user.index',['users'=>$users]);
    }
    public function createUser(){
        return view('admin.user.create_user');
    }
    public function post_create_user(Request $request){
        User::create([
            'nama' => $request['nama'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'status' => 1,
        ]);
        return redirect('admin/daftar_admin');
    }
    public function updateUser($id){
        $user=User::where('id',$id)->first();
        return view('admin.user.edit_user',['user'=>$user]);
    }
    public function post_update_user(Request $request,$id){
        $request->validate([
            'nama'  => 'required',
            'username'  => 'required',
            'email'  => 'required',
            'password'  => 'required',
            'status'  => 'required',
        ]);
        $user = User::find($id);
        $user->nama=$request->nama;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->status=$request->status;
        $user->save();
        return redirect('admin/daftar_admin');
    }
    public function deleteUser($id){
        $data = User::where('id',$id)->first();
        $data->delete();
        return redirect()->back()->with('alert-success','Data berhasi dihapus!');
    }
}