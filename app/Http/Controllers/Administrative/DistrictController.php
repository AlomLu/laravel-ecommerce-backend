<?php

namespace App\Http\Controllers\Administrative;

use App\Http\Controllers\Controller;
use App\Models\Shared\District;
use App\Models\Shared\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DistrictController extends Controller
{
    public function district(){
        $divisions = Division::all();
        return view ("admin.administrative.add-district", ['divisions'=>$divisions]);
    }

    public function addDistrict(Request $request){
        // dd($request->all());
        $request->validate([
            'dis_name' => 'required|unique:districts'
        ]);

        District::create([
            'dis_name' => $request->dis_name,
            'division_id' => $request->division_id,
        ]);

        return redirect()->back()->with('success', 'District added successfully');
    }

    public function districtList(){
        $distrits = District::with('division')->get();
        return view ("admin.administrative.district-list", ['districts'=>$distrits]);
    }

    //edit district
    public function showEditDistrict($id){
        $district = District::findOrFail($id);
        $divisions = Division::all();
        // dd($district);
        return view('admin.administrative.edit.edit_district', compact('district', 'divisions'));
    }

    public function updateDistrict(Request $request){
        // dd($request->all());

        $request->validate([
            'dis_name'=>'required|unique:districts',
            'division_id'=>'required'
        ]);

        District::where('id', $request->dis_id)->update([
            'dis_name' => ucfirst($request->dis_name),
            'division_id' => $request->division_id
        ]);

        return redirect()->route('district.list')->with('status', 'District updated successfully!');

    }

    public function deleteDistrict($id){
        $district = District::findOrFail($id);

        $district->delete();

        return redirect()->route('district.list')->with('status', 'District deleted successfully');
    }
}
