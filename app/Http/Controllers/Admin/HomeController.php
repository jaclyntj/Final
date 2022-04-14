<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $home = Home::where('visi', 'LIKE', "%$keyword%")
                ->orWhere('misi', 'LIKE', "%$keyword%")
                ->orWhere('artikel', 'LIKE', "%$keyword%")
                ->orWhere('galeri', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $home = Home::latest()->paginate($perPage);
        }

        return view('admin.home.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'artikel' => 'required']);

        $requestData = $request->all();

        if ($image = $request->file('galeri')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $requestData['galeri'] = "$profileImage";
        }
        
        Home::create($requestData);

        return redirect('admin/home')->with('flash_message', 'Home added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $home = Home::findOrFail($id);

        return view('admin.home.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $home = Home::findOrFail($id);

        return view('admin.home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'artikel' => 'required']);

        $requestData = $request->all();
        
        $home = Home::findOrFail($id);
        $home->update($requestData);

        return redirect('admin/home')->with('flash_message', 'Home updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Home::destroy($id);

        return redirect('admin/home')->with('flash_message', 'Home deleted!');
    }
}
