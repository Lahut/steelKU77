<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::get();
        // dd($posts); //dump and die
        return view('branches.index', ['branches' => $branches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required' , 'min:5', 'max:255'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detail' => ['required', 'max:500']
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img_branches'), $imageName);
        $branch = new Branch();
        $branch->title = $validatedData['title'];
        $branch->imagemap = $imageName;
        $branch->detail = $validatedData['detail'];
        $branch->save();

        return redirect()->route('branches.show', ['branch' => $branch]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        return view('branches.show', ['branch' => $branch]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        //
        $this->authorize('update', $branch);
        return view('branches.edit',['branch' => $branch]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        //
        $validatedData = $request->validate([
            'title' => ['required' , 'min:5', 'max:255'],
            'detail' => ['required', 'max:500']
        ]);

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->image == NULL) {
            $imageName = $branch->imagemap;
        } else {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('img_branches'), $imageName);
        }

        $title = $validatedData['title'];
        $detail = $validatedData['detail'];
        $branch->title = $title;
        $branch->imagemap = $imageName;
        $branch->detail = $detail;
        $branch->save();
        return redirect()->route('branches.show', ['branch' => $branch->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        //
        $branch->delete();
        $branch = Branch::get();
        //$productsDeleted = Product::onlyTrashed()->get();
        return redirect()->route('branches.index' , ['brnaches' => $branch]);
    }
}
