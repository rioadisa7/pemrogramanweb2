<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.members.index',[
            'members' => $members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        {
            return view('admin.members.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'address' => 'required',
        ]);

        Member::create($validated);
        return redirect('/dashboard/member');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = Member::find($id);
        return view('admin.members.show',[
            'member' => $member
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = Member::find($id);
        return view('admin.members.edit',[
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = Member::find($id);

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'address' => 'required',
        ]);

        $member->update($validated);
        return redirect('/dashboard/member')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('/dashboard/member');
    }
}
