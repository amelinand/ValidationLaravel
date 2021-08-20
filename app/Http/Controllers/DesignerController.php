<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Designer;


class DesignerController extends Controller
{
    // public function create() {
    //     return view('add');
    // }
    public function store(Request $request) {
    $designer = new Designer;
    $designer->name = $request->name;
    $designer->birth_year = $request->birth_year;
    $designer->nationality = $request->nationality;
    $designer->save();

    

    return redirect('/designers');
    // redirect()->back()->with('success_message','any message you want');
    }

    public function deleteDesigner(Request $request) {
        $designer = Designer::find($request->id);
        $designer->delete();

        return redirect('/designers');
    }

    public function changeDesigner(Request $request) {
        $designer = Designer::findOrFail($request->id); 
        $designer->name = $request->name;
        $designer->birth_year = $request->birth_year;
        $designer->nationality= $request->nationality;
        $designer->save();
    
        
    
        return redirect('/designers');
    }
}