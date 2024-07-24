<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RespondenController extends Controller
{
    public function index(Request $request)
    {
        $query = Responden::query();

        if (!$request->has('start_date') || !$request->has('end_date')) {
            $oldestResponden = Responden::oldest('created_at')->first();
            $newestResponden = Responden::latest('created_at')->first();

            $dates = [
                'start_date' => $oldestResponden ? $oldestResponden->created_at->format('Y-m-d') : Carbon::now()->subYear()->format('Y-m-d'),
                'end_date' => $newestResponden ? $newestResponden->created_at->format('Y-m-d') : Carbon::now()->format('Y-m-d')
            ];

            return redirect()->route('responden.index', array_merge($request->all(), $dates));
        }

        $startDate = Carbon::parse($request->start_date)->subDay()->startOfDay()->toDateTimeString();
        $endDate = Carbon::parse($request->end_date)->addDay()->endOfDay()->toDateTimeString();

        $query->whereBetween('created_at', [$startDate, $endDate]);

        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where(function ($subquery) use ($searchTerm) {
                $subquery->where('name', 'like', "%$searchTerm%")
                    ->orWhere('gender', 'like', "%$searchTerm%")
                    ->orWhere('age', 'like', "%$searchTerm%")
                    ->orWhere('tempat_tinggal', 'like', "%$searchTerm%")
                    ->orWhere('tempat_mendaftar', 'like', "%$searchTerm%")
                    ->orWhere('tanggal_keberangkatan', 'like', "%$searchTerm%")
                    ->orWhere('paket_dilih', 'like', "%$searchTerm%")
                    ->orWhere('nama_tl', 'like', "%$searchTerm%")
                    ->orWhere('mutowif', 'like', "%$searchTerm%");
            });
        }

        if (isset($request->gender)) {
            $query->where('gender', $request->gender);
        }

        if (isset($request->tempat_tinggal)) {
            $query->where('tempat_tinggal', $request->tempat_tinggal);
        }

        if (isset($request->tempat_mendaftar)) {
            $query->where('tempat_mendaftar', $request->tempat_mendaftar);
        }

        if (isset($request->tanggal_keberangkatan)) {
            $query->where('tanggal_keberangkatan', $request->tanggal_keberangkatan);
        }

        if (isset($request->paket_dilih)) {
            $query->where('paket_dilih', $request->paket_dilih);
        }
        if (isset($request->nama_tl)) {
            $query->where('nama_tl', $request->nama_tl);
        }
        if (isset($request->mutowif)) {
            $query->where('mutowif', $request->mutowif);
        }

        $respondens = $query->latest()->paginate($request->per_page ?? 5);

        return view('pages.dashboard.responden.index', compact('respondens'));
    }

    public function show(Responden $responden)
    {
        return view('pages.dashboard.responden.show', compact('responden'));
    }
}
