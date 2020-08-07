<?php

namespace App\Http\Controllers\Admin;;

use App\Name;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $names = Name::paginate(10);
        return view('admin.home', [
            'names' => $names,
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $name = new Name();

        $name->fill($request->all())->save();

        return redirect('/admin/home');
    }

    public function edit(int $name_id)
    {
        $name = Name::find($name_id);

        return view('admin.edit', [
            'name' => $name,
        ]);
    }

    public function update(Request $request, int $name_id)
    {
        $name = Name::find($name_id);

        $name->fill($request->all())->save();

        return redirect('/admin/home');
    }

    public function delete(Request $request)
    {
        Name::find($request->name_id)->delete();
        return redirect('/admin/home');
    }
}
