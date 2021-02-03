<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movil;
use App\Models\Reparacion;

class MovilController extends Controller
{
    
    public function index()
    {
        return response()->json(Movil::all(),200);
    }


    public function store(Request $request)
    {
        
        try{
            
            $movil = Movil::create($request->all());
            $resultado = $movil->id;
            
        }catch(\Exception $ex){
            $resultado = 0;
        }
        
        return response()->json($resultado,200);
        
    }


    public function show($id)
    {
        $movil = Movil::find($id);
        return response()->json($movil,200); 
        
    }

    
    public function update(Request $request, $id)
    {
        
         try{
            $movil = Movil::find($id);
            $resultado = $movil->update($request->all());
        }catch(\Exception $ex){
            $resultado = -1;
        }
       return response()->json(['resultado'=>$resultado],200);
        
    }

    
    public function destroy($id)
    {
        
        try{
            
            $movil = Movil::find($id);
            if($movil->reparaciones != null){
                foreach($movil->reparaciones as $reparacion){
                    Reparacion::destroy($reparacion->id);
                }
                $response = Movil::destroy($id);
            }
        
        
            
        }catch(\Exception $ex){
         $response = -1;
        } 
        
        return response()->json($response,200);   
        
    }
}
