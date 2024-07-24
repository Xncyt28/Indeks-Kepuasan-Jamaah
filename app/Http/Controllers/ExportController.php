<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Responden;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

function getRespondenDataExport($request)
{
  $query = Responden::query();

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

  if (isset($request->age)) {
    if ($request->age == 'Anak-anak') {
      $age = [0, 12];
    } elseif ($request->age == 'Remaja') {
      $age = [13, 19];
    } elseif ($request->age == 'Dewasa') {
      $age = [20, 59];
    } elseif ($request->age == 'Lansia') {
      $age = [60, 200];
    }
    $query->whereBetween('age', $age);
  }

  if (isset($request->gender)) {
    $query->where('gender', $request->gender);
  }

  $respondens = $query->get();

  $chartJKConfig = '{
            "type": "bar",
            "data": {
              "labels": ["Laki-laki", "Perempuan"],
              "datasets": [{
                "label": "Jenis Kelamin",
                "data": [' . $respondens->where('gender', 'Laki-laki')->count() . ', ' . $respondens->where('gender', 'Perempuan')->count() . ']
              }]
            }
          }';

  $chartUmurConfig = '{
            "type": "bar",
            "data": {
              "labels": ["Anak-anak (0-12)", "Remaja (13-19)", "Dewasa (20-59)", "Lansia (>= 60)"],
              "datasets": [{
                "label": "Umur",
                "data": [' . $respondens->whereBetween('age', [0, 12])->count() . ', ' . $respondens->whereBetween('age', [13, 19])->count() . ', ' . $respondens->whereBetween('age', [20, 69])->count() . ', ' . $respondens->where('age', '>=', 60)->count() . ']
              }]
            }
          }';

  $labels = [];
  $data = [];

  return [
    'chartJKConfig' => $chartJKConfig,
    'chartUmurConfig' => $chartUmurConfig
  ];
}

class ExportController extends Controller
{
  public function responden_export(Request $request)
  {
    $respondens = Responden::all();
    if (count($respondens) == 0) {
      return redirect()->back()
        ->withErrors(['message' => ['Data Kosong']]);
    }

    extract(getRespondenDataExport($request));

    $Pdf = Pdf::loadView('export.responden', compact('chartJKConfig', 'chartUmurConfig'));

    return $Pdf->download('Laporan Responden.Pdf');
  }

  public function responden_preview(Request $request)
  {
    $respondens = Responden::all();
    if (count($respondens) == 0) {
      return redirect()->back()
        ->withErrors(['message' => ['Data Kosong']]);
    }

    extract(getRespondenDataExport($request));

    $Pdf = Pdf::loadView('export.responden', compact('chartJKConfig', 'chartUmurConfig',));
    return $Pdf->stream();
  }

  public function responden_export_table(Request $request)
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

    if (isset($request->age)) {
      if ($request->age == 'Anak-anak') {
        $age = [0, 12];
      } elseif ($request->age == 'Remaja') {
        $age = [13, 19];
      } elseif ($request->age == 'Dewasa') {
        $age = [20, 59];
      } elseif ($request->age == 'Lansia') {
        $age = [60, 200];
      }
      $query->whereBetween('age', $age);
    }

    if (isset($request->gender)) {
      $query->where('gender', $request->gender);
    }

    $respondens = $query->latest()->paginate($request->per_page ?? 5);

    if (count($respondens) == 0) {
      return redirect()->back()
        ->withErrors(['message' => ['Data Kosong']]);
    }

    $Pdf = Pdf::loadView('export.responden-table', compact('respondens'));

    return $Pdf->download('Laporan Tabel Responden.Pdf');
  }

  public function responden_preview_table(Request $request)
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

    if (isset($request->age)) {
      if ($request->age == 'Anak-anak') {
        $age = [0, 12];
      } elseif ($request->age == 'Remaja') {
        $age = [13, 19];
      } elseif ($request->age == 'Dewasa') {
        $age = [20, 59];
      } elseif ($request->age == 'Lansia') {
        $age = [60, 200];
      }
      $query->whereBetween('age', $age);
    }

    if (isset($request->gender)) {
      $query->where('gender', $request->gender);
    }

    $respondens = $query->latest()->paginate($request->per_page ?? 5);

    if (count($respondens) == 0) {
      return redirect()->back()
        ->withErrors(['message' => ['Data Kosong']]);
    }

    $Pdf = Pdf::loadView('export.responden-table', compact('respondens'));
    return $Pdf->stream();
  }

  public function feedback_preview_table()
  {
    $data = Feedback::all();

    if (count($data) == 0) {
      return redirect()->back()
        ->withErrors(['message' => ['Data Kosong']]);
    }

    $Pdf = Pdf::loadView('export.feedback-table', compact('data'));
    return $Pdf->stream();
  }

  public function feedback_export_table()
  {
    $data = Feedback::all();

    if (count($data) == 0) {
      return redirect()->back()
        ->withErrors(['message' => ['Data Kosong']]);
    }

    $Pdf = Pdf::loadView('export.feedback-table', compact('data'));
    return $Pdf->download('Laporan Kritik dan Saran.pdf');
  }
}
