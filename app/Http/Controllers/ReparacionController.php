<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reparacion;

class ReparacionController extends Controller
{
    
    public function index()
    {
        return response()->json(Reparacion::all(),200);
    }

   
    public function store(Request $request)
    {
        
        try{
            
            $reparacion = Reparacion::create($request->all());
            $resultado = $reparacion->id;
            
        }catch(\Exception $ex){
            $resultado = 0;
        }
        
        return response()->json(['resultado'=>$resultado],200);
        
    }

    
    public function show($id)
    {
        
        $reparacion = Reparacion::find($id);
        return response()->json(['reparacion'=>$reparacion],200); 
        
    }


    public function update(Request $request, $id)
    {
        
        try{
            $reparacion = Reparacion::find($id);
            $resultado = $reparacion->update($request->all());
        }catch(\Exception $ex){
            $resultado = -1;
        }
       return response()->json(['resultado'=>$resultado],200);
        
    }

    
    public function destroy($id)
    {
        
        try{
        
        $response = Reparacion::destroy($id);
            
        }catch(\Exception $ex){
         $response = -1;
        } 
        
        return response()->json($response,200); 
        
    }
}
