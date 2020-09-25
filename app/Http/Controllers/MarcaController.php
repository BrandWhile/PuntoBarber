<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;

use App\Marca;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    /*public function index()
    {
        $marcas = \App\Marca::paginate(5);
        return  view ('asdbarber.index')->with("marcas" , $marcas);
    }*/

     public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Marca::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip" 
                                    data-id="'.$row->idM.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem"><img src="https://img.icons8.com/ios/24/000000/edit.png"/></a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->idM.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem"><img src="https://img.icons8.com/ios/24/000000/trash.png"/></a><input type="hidden" class="form-control" id="editBtn"  value="'.$row->idM.'">';
                       
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('marcas.index');
    }

  /*  public function index()
    {   $marcas = Marca::paginate(5);
        return view ('marcas.index')
        ->with("marcas" ,$marcas);
    }*/
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        return view('marcas.new'); 
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                                    

                  /* $marca = new Marca();
        $marca->nombreM = $request->input("nombreM");
        $marca->save();
                           */                                                                                                               
          Marca::updateOrCreate(['idM' => $request->marca_id],
                ['nombreM' => $request->nombreM]);       
   
        return response()->json(['success'=>'Item saved successfully.']);
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
        $marca = Marca::find($id);
        return response()->json($marca);
    }


    public function destroy($id)
    {
       Marca::find($id)->delete();
     
       return response()->json(['success'=>'Marca deleted successfully.']);
    }

    /*
    public function destroy(Marca $marca)
    {
        $marca->delete();
  
        return redirect()->route('marca.index')
                        ->with('Exito','El servicio se elimino correctamente');
    }*/
}
