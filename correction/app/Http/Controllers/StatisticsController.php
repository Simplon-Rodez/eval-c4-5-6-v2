<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    /*
     * Get total stock value and value per category
     */
    public function show()
    {
        $totalStock = DB::select('SELECT SUM(quantity * sales_price * multiplier) AS total_value FROM
            movements JOIN movement_types ON movements.movement_type_id = movement_types.id
            JOIN directions ON movement_types.direction_id = directions.id
            JOIN articles ON movements.article_id = articles.id
            ');
        if (count($totalStock) > 0) {
            $totalStockValue = $totalStock[0]->total_value;
        } else {
            $totalStockValue = 0;
        }

        $categoryValues = DB::select('SELECT SUM(quantity * multiplier * sales_price) AS category_value,
            categories.name AS category
            FROM movements
            JOIN movement_types ON movements.movement_type_id = movement_types.id
            JOIN directions on movement_types.direction_id = directions.id
            JOIN articles on movements.article_id = articles.id
            JOIN categories on articles.category_id = categories.id
            GROUP by categories.name
            ');

        return view('statistics', compact('totalStockValue', 'categoryValues'));
    }
}
