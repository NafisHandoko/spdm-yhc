<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class C_Mahasiswa extends Controller
{
    //
    public function index($id){
        return view('v_mahasiswa', [
            'mahasiswa' => Mahasiswa::find($id)
        ]);
    }

    public function addView(){
        return view('v_tambah_mahasiswa');
    }

    public function addPost(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required',
            'prodi' => 'required',
            'semester' => 'required',
            'kelas' => 'required',
            'tahun' => 'required',
            'kampus' => 'required',
            'domisili' => 'required',
        ]);

        // return $request->all();
        // return $validatedData;
        $result =  Mahasiswa::create($validatedData);
        if($result){
            return redirect()->intended('/')->with('addSuccess','Data Mahasiswa Berhasil Ditambahkan!');
        }else{
            return redirect()->intended('/')->with('addFailed','Data Mahasiswa Gagal Ditambahkan!');
        }
        
        // return view('v_update_produk', [
        //     "data" => M_Produk::get()
        // ]);
    }

    public function editView($id){
        return view('v_ubah_mahasiswa', [
            'mahasiswa' => Mahasiswa::find($id)
        ]);
    }

    public function editPost($id, Request $request){
        $validatedData = $request->validate([
            'nama' => 'required',
            'prodi' => 'required',
            'semester' => 'required',
            'kelas' => 'required',
            'tahun' => 'required',
            'kampus' => 'required',
            'domisili' => 'required',
        ]);

        $result = Mahasiswa::where('id', $id)->update($validatedData);
        if($result){
            return redirect()->intended('/mahasiswa/'.$id)->with('editSuccess','Data Mahasiswa Berhasil Diubah!');
        }else{
            return redirect()->intended('/mahasiswa/'.$id)->with('editFailed','Data Mahasiswa Gagal Diubah!');
        }
    }

    public function delete($id){
        $result = Mahasiswa::destroy($id);
        if($result){
            return redirect()->intended('/')->with('deleteSuccess','Data Mahasiswa Berhasil Dihapus!');
        }else{
            return redirect()->intended('/')->with('deleteFailed','Data Mahasiswa Gagal Dihapus!');
        }
    }

    public function search(Request $request){
        $validatedData = $request->validate([
            'search' => 'required',
        ]);

        $nama_or_prodi = $validatedData['search'];

        $result = Mahasiswa::where('nama','LIKE','%'.$nama_or_prodi.'%')
                ->orWhere('prodi','LIKE','%'.$nama_or_prodi.'%')
                ->get();

        return view('v_search', [
            'search' => $validatedData['search'],
            'data' => $result
        ]);
    }
}
