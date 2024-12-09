<?php

namespace App\Http\Controllers\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Shared\District;
use App\Models\Shared\Division;
use App\Models\Shared\Upazila;
use Illuminate\Http\Request;

class UpazilaController extends Controller
{
    public function upazila(){

        $divisions = Division::all();
        return view ('admin.administrative.add-upazila', compact('divisions'));
    }
    public function districtList(Request $request){
        // dd($request->all());
        $request->validate([
            'division_id' => 'required|exists:divisions,id'
        ]);

        $districts = District::where('division_id', $request->division_id)->get();
        // dd($districts);
        return response()->json($districts);
    }

    public function addUpazila(Request $request){
        // dd($request->all());

        Upazila::create([
            'upazila_name'=>ucfirst($request->upazila_name),
            'division_id'=>$request->division_id,
            'district_id'=>$request->district_id
        ]);

        return redirect()->route('upazila.list')->with('status', 'Upazila added successfully');
    }
    public function upazilaList(){
        $upazilas = Upazila::with('division', 'district')->get();

        return view('admin.administrative.upazila-list', ['upazilas'=>$upazilas]);
        // return view('admin.administrative.upazila-list');
    }

    public function editUpazila($id){
        // dd($id);
        $upazila = Upazila::findOrFail($id);
        $divisions = Division::all();
        $districts = District::all();
        return view('admin.administrative.edit.edit_upazila', compact('upazila', 'divisions', 'districts'));
    }

    public function updateUpazila(Request $request){
        // dd($request->all());

        $request->validate([
            'upazila_name'=>'required|unique:upazilas',
            'division_id'=>'required',
            'district_id'=>'required'
        ]);

        $result = Upazila::where('id', $request->upazila_id)->update([
            'upazila_name'=> ucfirst($request->upazila_name),
            'division_id'=>$request->division_id,
            'district_id'=>$request->district_id
        ]);

        // dd($result);

        return redirect()->route('upazila.list')->with('status', 'upazila updated successfully');
    }

    public function deleteUpazila($id){
        // dd($id);
        $upazila = Upazila::findOrFail($id);
        $upazila->delete();

        return redirect()->route('upazila.list')->with('status', 'Upazila deleted successfully');
    }

    

    


}
