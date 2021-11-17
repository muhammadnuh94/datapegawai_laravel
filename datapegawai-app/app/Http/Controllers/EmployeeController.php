<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
Use Alert;
use DataTables;



class EmployeeController extends Controller
{
    public function index (){

        $data = Employee::all();
        return view('datapegawai',compact('data'));
        
    }

    public function tambahpegawai (){
        return view('tambahdata');
    }

    public function insert (Request $request){
        // dd($request->all());
       Employee::create($request->all());
       Alert::success('Success', 'Data Anda Berhasil Ditambahkan');
       return redirect()->route('pegawai')->with('success','Data Berhasil Di Tambahkan !') ; 
    //    with yang diatas itu sebenarnya digunakan untuk menampilkan data menggunakan bootstrap (alert bootstrap)
    }

    // untuk menampilkan datanya
    public function tampilkandata ($id){
        $data=Employee::find($id);
        // dd($data);
        return view('tampildata',compact('data'));
    }
    
    // untuk mengubah datanya
    public function updatedata (Request $request, $id){
        $data=Employee::find($id);
        $data->update($request->all());
        Alert::info('Success', 'Data Anda Berhasil Di Ubah');
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Update !') ;
        
    }

    public function delete ($id){
        $data=Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Delete !') ;
    }
}

