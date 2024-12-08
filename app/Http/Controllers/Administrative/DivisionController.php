<?php

namespace App\Http\Controllers\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Shared\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DivisionController extends Controller
{
    public function showDivision(){
        $divisions = Division::latest()->get();

        return view('admin.administrative.division', ['divisions'=>$divisions]);
    }
    public function addDivision(Request $request){

        // dd($request->all());
        
        $request->validate([
            'div_name'=>'required|unique:divisions'
        ]);

        $division = new Division();
        // $division->div_name = ucfirst($request->div_name);
        $division->div_name = Str::ucfirst($request->div_name);

        $division->save();
    }

    public function updateDivision(Request $request){

        $request->validate([
            'up_div_name' => 'required|unique:divisions,div_name,' . $request->up_id
        ]);

        Division::where('id', $request->up_id)->update([
            'div_name' => $request->up_div_name
        ]);

        return redirect()->route('division')->with('msg', 'division updated successfully');



    }

    public function deleteDivision(Request $request){
        // dd($request->all());
        Division::find($request->delete_id)->delete();

        return redirect()->route('division');
    }
}
