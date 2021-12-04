<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\TypeAcc;
use App\Models\TypeMember;
use App\Models\User;
use Illuminate\Http\Request;use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $user=User::all();

        return view('admin.account.index',compact('user'));
    }

    public function create()
    {
        $branch=Branch::all();
        $type_acc=TypeAcc::all();
        return view('admin.account.add',compact('branch','type_acc'));
    }

    public function register(Request $request)
    {
        $request->merge(['password'=>Hash::make($request->password)]);
        User::create($request->all());

        return redirect()->route('account.index');
    }

    public function edit(User $user)
    {
        $branch=Branch::all();
        $type_acc=TypeAcc::all();
        return view('admin.account.edit',compact('user','branch','type_acc'));
    }

    public function update(Request $request,User $user)
    {
        if ($request->password) {
            $request->merge(['password'=>Hash::make($request->password)]);
        }else{
            $request->remove('password');
        }

        $user->update($request->all());

        return redirect()->route('account.index');

    }
}
