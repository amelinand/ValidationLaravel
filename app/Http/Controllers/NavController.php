<?php
namespace App\Http\Controllers;
use App\Models\Designer;
use App\Models\character;
use Illuminate\Http\Request;




class NavController extends Controller
{
    public function index()
    {
        return view('home');
    }


    public function characters()
    {
        
        $characters = Character::all();
        return view('characters', ['allthecharacters' => $characters]);
        
    }
    public function designers()
    {
        $designers = Designer::all();
        return view('designers', ['allthedesigners' => $designers]);
        
    }

    public function addCharacter()
    {
        $designers = Designer::all()->sortBy('name');
        return view('addCharacter', ['designers' => $designers]);
        
    }
    public function addDesigner()
    {
    
        return view('addDesigner');
    }


    public function changeCharacter(Request $request)
    {

        $character = Character::findOrFail($request->id);
        $designers = Designer::all()->sortBy('name');
        return view('changeCharacter', ['character' => $character ,'designers' => $designers]);
    }
    public function changeDesigner(Request $request)
    {

        $designer = Designer::findOrFail($request->id);
        return view('changeDesigner', ['designer' => $designer]);
    }
    
}
