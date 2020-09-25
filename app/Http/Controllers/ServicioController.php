<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;

use App\Servicio;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Servicio::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip" 
                                    data-id="'.$row->idS.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editItem"><img src="https://img.icons8.com/ios/24/000000/edit.png"/></a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->idS.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem"><img src="https://img.icons8.com/ios/24/000000/trash.png"/></a><input type="hidden" class="form-control" id="editBtn"  value="'.$row->idS.'">';
                       
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('servicios.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                                    

                                                                                                          
        $servicio = Servicio::updateOrCreate(['idS' => $request->servicio_id]);
        $servicio->nombreS = $request->input("nombreS");
        $servicio->precio = $request->input("precio");
        $servicio->save();
   
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
        $servicio = Servicio::find($id);
        return response()->json($servicio);
    }


    public function destroy($id)
    {
      Servicio::find($id)->delete();
     
       return response()->json(['success'=>'Servicio deleted successfully.']);
    }


}
