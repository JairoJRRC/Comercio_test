<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use File;
include('generatexml.php');

class TestController extends Controller
{
    

    // $json = json_decode(file_get_contents($path), true);
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $json = File::get("employees.json");
        $data = json_decode($json, true);

        $dataName = $request->name;
        $dataSearch = array();

        foreach ($data as $key) {
            if ($dataName != null) {
                $pos = strpos($key['email'], $dataName);
                if($pos !== false){
                    array_push($dataSearch, $key);
                }
            }else{
                array_push($dataSearch, $key);
            }
        }
        
        return view('test',['data' => $dataSearch]);
    }
    public function monto(Request $request)
    {
        //
        $json = File::get("employees.json");
        $data = json_decode($json, true);

        $obj = $request->all();
        // dd($request->all());
        $monto_a = $obj['monto_a'];
        $monto_b = $obj['monto_b'];
        
        $list = array();
        if($monto_a !== null && $monto_a !== null){
            foreach ($data as $key) {
                $key['salary'] = str_replace(",", "", $key['salary']);
                $key['salary'] = str_replace("$", "", $key['salary']);
                if (intval($key['salary']) >= $monto_a AND intval($key['salary']) <= $monto_b ) {
                    array_push($list, $key);
                }
            }
        }

        $xml_user_info = new \SimpleXMLElement("<?xml version='1.0'?><employees_info></employees_info>");

        array_to_xml($list,$xml_user_info);

        $xml_file = $xml_user_info->asXML('employees.xml');
        
        return view('test',['data' => $list]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $v = array();
        $json = File::get("employees.json");
        $data = json_decode($json, true);
        foreach ($data as $key) {
            if($key['id']=== $id)
            {
                array_push($v, $key);
            }
        }
        return view('details',['data' => $v[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
