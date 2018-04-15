<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use Sentinel;
use Session;
use Carbon\Carbon;
use App\User;
class UserController extends Controller
{
    public function signup()
    {
        return view('Signup');//viewnya
    }
    public function signup_store(UserRequest $request)
    {
    
           $address=$request->address;
           $telephone=$request->telephone;
           $user = Sentinel::registerAndActivate($request->All());
           $updateus=User::find($user->id);
           
           $updateus->address=$address;
           $updateus->telephone=$telephone;
           
           $updateus->save();
      Session::flash('message2','Data berhasil terdaftar');
      if($request->last_name!="admin")
      {
          if($request->role=="User")
          {
          $role=Sentinel::findRoleByName("user");
          $user->roles()->attach($role);
          }
          else 
          {
            $role=Sentinel::findRoleByName("supplier");
            $user->roles()->attach($role);
          }
      }
      else
      {
          $role=Sentinel::findRoleByName("admin");
          $user->roles()->attach($role);
      }
   
         return redirect()->back();
        }
    
      
    }
  

