<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuscriptorRequest;
use App\Models\Suscriptor;
use DB;

class SuscriptorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
      $suscriptors = DB::table('suscriptors')->get();

      return view('admin.suscriptors.index', [ 'suscriptors' => $suscriptors ]);
    }

   public function create()
    {
        return view('admin.suscriptors.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(SuscriptorRequest $request)
    {
      $input = $request->all();

      $suscriptor = new Suscriptor($input);
      $suscriptor->password = bcrypt($input['password']);
      $suscriptor->save();

      return redirect(route('admin.suscriptors.index'))->with([ 'message' => 'Suscriptor creado exitosamente!', 'alert-type' => 'success' ]);
    }

    public function edit(Suscriptor $suscriptor)
    {
        return view('admin.suscriptors.edit', [ 'suscriptor' => $suscriptor ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuscriptorRequest $request, Suscriptor $suscriptor)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        $suscriptor->update($input);

        return redirect()->route('admin.suscriptors.index')->with(['message' => 'Suscriptor actualizado exitosamente!', 'alert-type' => 'success']);
    }

    public function destroy(Suscriptor $suscriptor)
    {
      if ($suscriptor->exists()) {
          $suscriptor->delete();
      }

      return redirect(route('admin.suscriptors.index'))->with([ 'message' => 'Suscriptor eliminado exitosamente!', 'alert-type' => 'success' ]);
    }
}
