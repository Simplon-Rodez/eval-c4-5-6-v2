<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movement;

class HistoryController extends Controller
{
    /**
     * Get movement history in chronological order and display
     */
    public function show() {
        $history = Movement::orderBy('date_time')->get();
        return view('history', compact('history'));
    }
}
