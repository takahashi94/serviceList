<?php

namespace App\Http\Controllers;

use App\Service;
use App\Name;
use App\Http\Requests\CreateServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $services = $user->services()->get();
        // 月額
        $monthly_total = 0;
        foreach ($services as $value) {
            if ($value->plan === "月額") {
                $month = $value->price;
            } else {
                $month = $value->price / 12;
            }
            $monthly_total += $month;
        }

        //年額
        $annual_total = 0;
        foreach ($services as $value) {
            if ($value->plan === "月額") {
                $year = $value->price * 12;
            } else {
                $year = $value->price;
            }
            $annual_total += $year;
        }

        return view('services.index', [
            'user' => $user,
            'services' => $services,
            'monthly_total' => $monthly_total,
            'annual_total' => $annual_total,
        ]);
    }

    public function autocomplete(Request $request) {
        $searchquery = $request->input('query');

        $data = Name::where('name', 'like', '%' . $searchquery . '%')->get();
        return response()->json($data);
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

        return redirect('/services')->with('flash_message', 'サービスの登録が完了しました。');
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

        return redirect('/services')->with('flash_message', 'サービスの編集が完了しました。');
    }

    public function delete(Request $request)
    {
        Service::find($request->service_id)->delete();
        return redirect('/services')->with('flash_message', 'サービスの削除が完了しました。');
    }
}
