<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WriterRequest;
use App\Models\Writer;
use DB;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = DB::table('writers')->get();

        return view('admin.writers.index', [ 'writers' => $writers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.writers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WriterRequest $request)
    {
        $input = $request->all();

        $writer = new Writer($input);
        $writer->save();

        return redirect(route('admin.writers.index'))->with([ 'message' => 'Curso creado exitosamente!', 'alert-type' => 'success' ]);
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
    public function edit(Writer $writer)
    {
        return view('admin.writers.edit', [ 'writer' => $writer ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WriterRequest $request, Writer $writer)
    {
        $input = $request->all();

        $writer->update($input);

        return redirect()->route('admin.writers.index')->with(['message' => 'Curso actualizado exitosamente!', 'alert-type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Writer $writer)
    {
        $writer->delete();

        return redirect()->route('admin.writers.index')->with(['message' => 'Curso eliminado exitosamente!', 'alert-type' => 'success']);
    }
}
