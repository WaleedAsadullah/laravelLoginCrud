<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usertable;
use App\Models\Employee;

class UserController extends Controller
{
    public function add(Request $req){

        $email = Usertable::select('email')
                           ->where('email', '=',$req->input('email') )
                           ->get();
        $val = sizeof($email);
        if($val==0){
            $insert = New Usertable();
            $insert->name = $req->input('name');
            $insert->phone = $req->input('phone');
            $insert->email = $req->input('email');
            $insert->pass = md5($req->input('pass'));
            $insert->save();
            $req->session()->flash('status','Account Created Successfully');
            return redirect('');
        }else{
            $req->session()->flash('status','Account Already Exist');
            return redirect('');
        }
    }

    public function login(Request $req){
        $email = Usertable::select('email','name','id')
        ->where([['email', '=',$req->input('email')],['pass', '=',md5($req->input('pass'))]] )
                           ->get();
        // echo $email;
        $val = sizeof($email);
        if($val==0){
            $req->session()->flash('status','Invalid Details');
            return redirect('');
        }else{
            // $req->session()->flash('status','Login');
            $req->session()->put('name',$email[0]['name']);

            return redirect('employee');
        }
    }

    function viewtable(){
        $data = Employee::all();
        return view('employee',['data'=>$data]);
    }

    function delete(Request $req){
        Employee::where('id', $req->input('deleteid'))->delete();
        $req->session()->flash('status','Data Deleted Successfully');
            return redirect('employee');

    }

    function logout(Request $request){
        // $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('');
        }

    public function addemployee(Request $req){

            $insert = New Employee();
            $insert->name = $req->input('name');
            $insert->phone = $req->input('phone');
            $insert->position = $req->input('position');
            $insert->salary = $req->input('salary');
            $insert->save();
            $req->session()->flash('status','Employee Add Successfully');
            return redirect('employee');
        
    }
    function edittake(Request $req){
        $data = Employee::select('name','position','salary','phone','id')
        ->where([['id', '=',$req->input('editid')]])
                           ->get();
        // echo $data;
        return view('edit',['data'=>$data]);
    }

    function editvalue(Request $req){
        // print_r($req);
        // echo $req->input('name');
        $data = Employee::
        where('id', $req->input('editid'))
        ->update(['name' => $req->input('name'),'phone' => $req->input('phone'),'position' => $req->input('position'),'salary' => $req->input('salary')]);
        // echo $data;
        return redirect('employee');
    }
}
