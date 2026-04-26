<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DownloadReportRequest;
use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{

    public function index()
    {
        return view('admin.reports.index');
    }

    public function downloadPDF(DownloadReportRequest $request)
    {
        $bookings = Booking::forPeriod($request->start_date, $request->end_date)->get();

        $totalOmzet = Booking::calculateRevenueForPeriod($request->start_date, $request->end_date);

        $pdf = Pdf::loadView('admin.reports.pdf_template', [
            'bookings' => $bookings,
            'total' => $totalOmzet,
            'period' => "{$request->start_date} s/d {$request->end_date}"
        ]);

        return $pdf->download('Laporan_GRC_Rental.pdf');
    }
}
