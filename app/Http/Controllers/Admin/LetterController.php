<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Letter;
use App\Models\Image;
use DB;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $letters = Letter::where('user_id', $request->user()->id)->get();

        return view('admin.letters.index', [ 'letters' => $letters ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.letters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        $letter = new Letter($input);
        $letter->user_id = $request->user()->id;
        $letter->save();

        $files = $request->file('letter_image');

        foreach ($files as $key => $file) {
            $filename  = 'letter-image-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('letter_images', $filename);
            
            $letter_image = new Image([
                'name' => $filename,
                'ext' => $file->getClientOriginalExtension(),
                'path' => $path,
                'letter_id' => $letter->id
            ]);
            
            $letter_image->save();
        }

        return redirect(route('admin.letters.index'))->with([ 'message' => 'Carta enviada exitosamente!', 'alert-type' => 'success' ]);

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
