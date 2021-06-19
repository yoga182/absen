<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nik_pegawai = Pegawai::all();
        if($request->ajax()){
            return datatables()->of($nik_pegawai)
                        ->addColumn('action', function($data){
                            
                            // $button = '<button type="button" name="export" id="'.$data->id.'" class="export btn btn-primary btn-sm"><i class="far fa-excel-alt"></i>-</button>';     
                            // return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
        }

        return view('pegawai');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        
        $post   =   Pegawai::updateOrCreate(['id' => $id],
                    [
                        'nik' => $request->nik,
                    ]); 

        return response()->json($post);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $where = array('id' => $id);
        // $post  = Pegawai::where($where)->first();
     
        // return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Pegawai::where('id',$id)->delete();
     
        return response()->json($post);
    }
}
