<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Character;


class CharacterController extends Controller
{
    // public function create() {
    //     return view('add');
    // }
    public function store(Request $request) {
    $character = new Character;
    $character->name = $request->name;
    $character->designer_id = $request->designer_id;
    $character->creation_year = $request->creation_year;
    $character->bd_name = $request->bd_name;
    $character->save();

    

    return redirect('/characters');
    // redirect()->back()->with('success_message','any message you want');
    }

    public function deleteCharacter(Request $request) {
        $character = Character::find($request->id);
        $character->delete();

        return redirect('/characters');
    }

    public function changeCharacter(Request $request) {
        $character = Character::findOrFail($request->id); 
        $character->name = $request->name;
        $character->designer_id = $request->designer_id;
        $character->creation_year = $request->creation_year;
        $character->bd_name = $request->bd_name;
        $character->save();
    
        
    
        return redirect('/characters');
    }
}