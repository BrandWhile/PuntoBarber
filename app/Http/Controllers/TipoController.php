<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;

use App\Tipo;

use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

     public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tipo::all();
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
      
        return view('tipos.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                                    
                                                                                                            
          Tipo::updateOrCreate(['idT' => $request->tipo_id],
                ['nombreT' => $request->nombreT]);       
   
        return response()->json(['success'=>'Item saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id)
    {
        $tipo = Tipo::find($id);
        return response()->json($tipo);
    }


    public function destroy($id)
    {
       Tipo::find($id)->delete();
     
       return response()->json(['success'=>'Tipo deleted successfully.']);
    }


}
