<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Key;

class KeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('keyGenarate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validated = $request->validate([
        'number' => 'required',
        'letter' => 'required',
        ]);

        $key = new Key();
        $key->number = $request->input('number');
        $key->letter = $request->input('letter');
      //  $key->letter = Crypt::encryptString($request->input('letter'));
        $key->save();

        return back()->with('message', 'Data Insert Successfully');
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

    // get letter
     public function getAllLetter()
    {
       return [
            a => ['a' => 1],
            b => ['b' => 2],
            c => ['c' => 3],
            d => ['d' => 4],
            e => ['e' => 5],
            f => ['f' => 6],
            g => ['g' => 7],
            h => ['h' => 8],
            i => ['i' => 9],
            j => ['j' => 10],
            k => ['k' => 11],
            l => ['l' => 12],
            m => ['m' => 13],
            n => ['n' => 14],
            o => ['o' => 15],
            p => ['p' => 16],
            q => ['q' => 17],
            r => ['r' => 18],
            s => ['s' => 19],
            t => ['t' => 20],
            u => ['u' => 21],
            v => ['v' => 22],
            w => ['w' => 23],
            x => ['x' => 24],
            y => ['y' => 25],
            z => ['z' => 26],
       ];
    }
}
