<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

use App\Models\User;
use CreateEmployeesTable;

class EmployeeController extends Controller
{
    
    public function index(){

        $search = request('search'); 

        if($search){

        
        $employees = Employees::where([
            ['name', 'like', '%'.$search.'%']
        ])->get();
        
        
        } else {
            $employees = Employees::all();
        }

            return view('welcome', ['employees' =>$employees, 'search'=>$search]);
        }
    


    public function create(){
        return view('employees.create');
    }

    public function store(Request $request){

        $employee = new Employees;

        $employee->name = $request->name;
        $employee->cpf = $request->cpf;
        $employee->salario = $request->salario;
        $employee->cargo = $request->cargo;

        $user = auth()->user();

        $employee->save();

        
        return redirect('/')->with('msg', 'Funcionário criado com sucesso!');



    }


//     public function show($id){


//         $employee = Employees::findOrFail($id);

//         $user = auth()->user();
//         $hasUserJoined = false;

//             if($user){
//                 $useremployees = $user->employeesAsParticipant->toArray();

//                 foreach($useremployees as $userempl$employee){
//                     if($userempl$employee['id']==$id){
//                         $hasUserJoined = true;
//                     }
//                 }

//             }

//         $employeeOwner = User::where('id', $employee->user_id)->first()->toArray(); 

//         return view('employees.show', ['empl$employee' => $employee, 'empl$employeeOwner' => $employeeOwner, 'hasUserJoined'=>$hasUserJoined]);
//     }


    public function dashboard(){
        $user = auth()->user();
        $employees = Employees::all();
        
        return view('employees.dashboard', ['employees'=>$employees]);
    }    

    public function destroy($id){

        $employee = Employees::findOrFail($id);
        $employee->delete();

        return redirect('/dashboard')->with('msg', 'Funcionário excluído com sucesso!');

    }

    public function edit($id){

        $user = auth()->user();

        $employee = Employees::findOrFail($id);


        return view('employees.edit', ['employee' => $employee]);

    }


    public function update(Request $request){

        $data = $request->all();



        Employees::findOrFail($request->id)->update($data);
        return redirect('/dashboard')->with('msg', 'Funcionário editado com sucesso!');

    }


//     public function joinempl$employee($id){
//         $user = auth()->user();

//         $user->employeesAsParticipant()->syncWithoutDetaching([$id]);

//         $employee = empl$employee::findOrFail($id);

//         return redirect('/dashboard')->with('msg', 'Sua presença está confirmada');
//     }

//     public function leaveempl$employee($id){
//         $user = auth()->user();

//         $user->employeesAsParticipant()->detach([$id]);

//         $employee = empl$employee::findOrFail($id);

//         return redirect('/dashboard')->with('msg', 'Você saiu com sucesso!');
//     }




//     public function contact(){
//         return view('contact');
//     }



//     public function productid($id = 0) {
//         return view('product', ['id' => $id]);
//     }
 }
