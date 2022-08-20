<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Auth;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $status = Status::orderBy('id', 'ASC')->get();
        return view('admin.status.status', compact('status'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.status.tambah-status');
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
        $request->validate([
            'status'     => 'required'
        ]);

        $status = Status::create([
            'status'  => $request->status
        ]);
        $status->save();

        alert()->success('Berhasil','Status ditambahkan');

        return redirect('/admin/status');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status, $id)
    {
        //
        $status = Status::find($id);
        return view('admin.status.edit-status', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status, $id)
    {
        //
        $request->validate([
            'status'     => 'required'
        ]);

        $status = Status::find($id);
        $status->update([
            'status'  => $request->status
        ]);

        alert()->success('Berhasil','Status dirubah');

        return redirect('/admin/status');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status, $id)
    {
        //
        $status = Status::find($id);
        $status->delete();

        alert()->success('Berhasil','Status dihapus');

        return redirect('/admin/status');
    }
}
