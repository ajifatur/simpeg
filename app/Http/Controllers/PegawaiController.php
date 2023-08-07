<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Ajifatur\Helpers\DateTimeExt;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Check the access
        // has_access(__METHOD__, Auth::user()->role_id);

        // Set keyword
        if($request->query('q') != null)
            session()->put('keyword', $request->query('q'));

        // Get pegawai by keyword
        $pegawai = Pegawai::where('nama','like','%'.session('keyword').'%')->orWhere('nip','like','%'.session('keyword').'%')->orderBy('nip','asc')->get();

        // View
        return view('admin/pegawai/index', [
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Show the detail of the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        // Check the access
        // has_access(__METHOD__, Auth::user()->role_id);

        // Get pegawai
        $pegawai = Pegawai::findOrFail($id);

        // View
        return view('admin/pegawai/detail', [
            'pegawai' => $pegawai
        ]);
    }
}