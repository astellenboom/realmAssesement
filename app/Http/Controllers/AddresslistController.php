<?php

namespace App\Http\Controllers;

use App\Addresslist;
use Illuminate\Http\Request;

class AddresslistController extends Controller
{
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
    public function store(Request $request, Addresslist $addresslist)
    {
            
        $addresslist->first_name = $request->first_name;
        $addresslist->last_name = $request->last_name;
        $addresslist->email = $request->email;
        $addresslist->mobile = $request->mobile;
        $addresslist->save();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Addresslist  $addresslist
     * @return \Illuminate\Http\Response
     */
    public function show(Addresslist $addresslist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Addresslist  $addresslist
     * @return \Illuminate\Http\Response
     */
    public function edit(Addresslist $addresslist,Request $request, $id)
    {
        
        $contact = $addresslist->whereId($id)->firstOrFail();
        $contact->first_name = $request->edit_first_name;
        $contact->last_name = $request->edit_last_name;
        $contact->email = $request->edit_email;
        $contact->mobile = $request->edit_mobile;
        $contact->save();
        
        return back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Addresslist  $addresslist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addresslist $addresslist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Addresslist  $addresslist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addresslist $addresslist,Request $request, $id)
    {
        $contact = $addresslist->whereId($id)->firstOrFail();
        
        $contact->delete();
        return back();
    }
}
