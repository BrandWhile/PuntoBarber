<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;

use App\Barberia;

use Illuminate\Http\Request;

class BarberiaController extends Controller
{

     public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Barberia::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip" 
                                    data-id="'.$row->idB.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem"><img src="https://img.icons8.com/ios/24/000000/edit.png"/></a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->idB.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem"><img src="https://img.icons8.com/ios/24/000000/trash.png"/></a><input type="hidden" class="form-control" id="editBtn"  value="'.$row->idM.'">';
                       
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('barberias.index');
    }

   
    public function store(Request $request)
    {                                    
                               

        $barberia = Barberia::updateOrCreate(['idB' => $request->barberia_id]);
        $barberia->nombreB = $request->input("nombreB");
        $barberia->latitud = $request->input("latitud");
        $barberia->longitud = $request->input("longitud");
        $barberia->direccion = $request->input("direccion");
        $barberia->propietario = $request->input("propietario");
        $barberia->telefono = $request->input("telefono");
        $barberia->horario = $request->input("horario");
        $barberia->save();

        return response()->json(['success'=>'Item saved successfully.']);


         /* Barberia::updateOrCreate(['idB' => $request->barberia_id],
                ['nombreB' => $request->nombreB],
                ['latitud' => $request->latitud],
                ['longitud' => $request->longitud],
                ['direccion' => $request->direccion],
                ['propietario' => $request->propietario],
                ['telefono' => $request->telefono],
                ['horario' => $request->horario],
            );       
   
        return response()->json(['success'=>'Item saved successfully.']);*/
        
    }
    /*
    public function store(Request $request)
    {
        $marca = new Marca();
        $marca->nombreM = $request->input("nombreM");
        $marca->save();

        return redirect()->route('marca.index')
        ->with("exito" , "La marca fue registrada correctamente")
        ->with("Nombre marca" , $marca->nombreM);
    }*/

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
  /*  public function show(Marca $marca)
    {
        return view('marcas.show',compact('marca'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id)
    {
        $barberia = Barberia::find($id);
        return response()->json($barberia);
    }


    public function destroy($id)
    {
       Barberia::find($id)->delete();
     
       return response()->json(['success'=>'barberia deleted successfully.']);
    }
}
