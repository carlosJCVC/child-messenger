<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RedactorRequest;
use App\Models\Redactor;
use DB;

class RedactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redactors = DB::table('redactors')->get();

        return view('admin.redactors.index', [ 'redactors' => $redactors ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.redactors.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RedactorRequest $request)
    {
        $input = $request->all();

        $input['password'] = bcrypt($request->password);
        
        $writer = new Redactor($input);
        $writer->save();

        return redirect(route('admin.redactors.index'))->with([ 'message' => 'Redactor creado exitosamente!', 'alert-type' => 'success' ]);
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
    public function edit(Redactor $redactor)
    {
        return view('admin.redactors.edit', [ 'redactor' => $redactor ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RedactorRequest $request, Redactor $redactor)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        $redactor->update($input);

        return redirect()->route('admin.redactors.index')->with(['message' => 'Curso actualizado exitosamente!', 'alert-type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Redactor $redactor)
    {
        $redactor->delete();

        return redirect()->route('admin.redactors.index')->with(['message' => 'Redactor eliminado exitosamente!', 'alert-type' => 'success']);
    }
}
