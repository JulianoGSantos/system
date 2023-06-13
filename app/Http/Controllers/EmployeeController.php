<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function indexemployee()
    {
        return view('employee/indexemployee');
    }

    public function storeemployee(Request $request)
    {
        $employee = new Employee();

        $employee->name = $request->name;
        $employee->office = $request->office; 
        $employee->departament = $request->departament; 
        $employee->cpf = $request->cpf; 
        $employee->email = $request->email; 
        $employee->street = $request->street; 
        $employee->number = $request->number; 
        $employee->complement = $request->complement; 
        $employee->city = $request->city; 
        $employee->state = $request->state; 
        $employee->cep = $request->cep; 
        $employee->cellphone = $request->cellphone; 
        $employee->cellphone2 = $request->cellphone2; 
        $employee->birth = $request->birth; 
        $employee->admission = $request->admission; 

        $employee->save();
    }

    public function searchemployee(Employee $employee)
    {
        $employees = $employee->all();

        return view('employee/searchemployee', compact('employees'));
    }

    public function showemployee(Employee $employee, string $id)
    {
        if(!$employee = $employee->find($id)){
            return back();
        }
        
        return view('employee/showemployee', compact('employee'));
    }

    public function editemployee(Employee $employee, string $id)
    {
        if(!$employee = $employee->find($id)){
            return back();
        }

        return view('employee/editemployee', compact('employee'));
    }

    public function updateemployee(Employee $employee, string $id)
    {
        if(!$employee = $employee->find($id)){
            return back();
        }

        $employee = $employee->update([
            'name',
            'office',
            'departament',
            'cpf',
            'email',
            'street',
            'number',
            'complement',
            'city',
            'state',
            'cep',
            'cellphone',
            'cellphone2',
            'birth',
            'admission'
        ]);
        
        return view('employee/editemployee', compact('employee'));
    }
}
