<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCharacterRequest;

class CharacterController extends Controller
{
    public function index(){
        $datas = Character::orderby("name","asc")->get();
        return view("characters.index",["datas"=>$datas, "title"=>"HP karakterek"]);
    }
    public function show($id){
        $data = Character::findorfail($id);
        return view("characters.show",["data"=>$data, "title"=>$data->house->name . " - " . $data->name]);
    }
    public function create(){
        $datas = House::all();
        return view("characters.create",["datas"=>$datas, "title"=>"Új karakter"]);
    }
    public function store(StoreCharacterRequest $request){
        $data = $request->validated();
        Character::create($data);
        return redirect()->route("characters.index");
    }
    public function destroy($id){
        $character = Character::findorfail($id); 
        $character->delete();
        return redirect()->route("characters.index");
    }
}
