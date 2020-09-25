<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;

use App\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{

     public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Producto::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip" 
                                    data-id="'.$row->idP.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem"><img src="https://img.icons8.com/ios/24/000000/edit.png"/></a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->idP.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem"><img src="https://img.icons8.com/ios/24/000000/trash.png"/></a><input type="hidden" class="form-control" id="editBtn"  value="'.$row->idP.'">';
                       
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('productos.index');
    }

   
    public function store(Request $request)
    {                                    
                               

        $producto = Producto::updateOrCreate(['idP' => $request->producto_id]);
        $producto->nombreP = $request->input("nombreP");
        $producto->precioP = $request->input("precioP");
        $producto->save();

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
        $producto = Producto::find($id);
        return response()->json($producto);
    }


    public function destroy($id)
    {
       Producto::find($id)->delete();
     
       return response()->json(['success'=>'Producto deleted successfully.']);
    }
}
