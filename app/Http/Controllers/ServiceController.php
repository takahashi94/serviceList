<?php

namespace App\Http\Controllers;

use App\Service;
use App\Http\Requests\CreateServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $services = $user->services()->get();

        return view('services.index', [
            'user' => $user,
            'services' => $services,
        ]);
    }

    public function create()
    {
        $id = Auth::id();
        return view('services.create', [
            'id' => $id,
        ]);
    }

    public function store(CreateServiceRequest $request)
    {
        $service = new Service();

        $service->fill($request->all())->save();

        return redirect('/');
    }

    public function edit(int $service_id)
    {
        $service = Service::find($service_id);

        $id = Auth::id();

        return view('services.edit', [
            'service' => $service,
            'id' => $id,
        ]);
    }

    public function update(CreateServiceRequest $request, int $service_id)
    {
        $service = Service::find($service_id);

        $service->fill($request->all())->save();

        return redirect('/');
    }
}
