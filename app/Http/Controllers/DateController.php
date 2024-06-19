<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DateRange;

class DateController extends Controller
{
    public function showForm()
    {
        return view('dates.form');
    }

    public function showWeekends(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Simpan rentang tanggal ke database
        $dateRange = DateRange::create([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        $startDate = new \DateTime($request->start_date);
        $endDate = new \DateTime($request->end_date);

        $weekends = [];

        while ($startDate <= $endDate) {
            if ($startDate->format('N') >= 6) { // 6 for Saturday and 7 for Sunday
                $weekends[] = [
                    'date' => $startDate->format('Y-m-d'),
                    'day' => $startDate->format('l') // Get the day name
                ];
            }
            $startDate->modify('+1 day');
        }

        return view('dates.result', compact('weekends'));
    }
}
