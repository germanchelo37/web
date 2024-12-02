<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
class DashboardbookController extends Controller
{
    //
    public function index()
    {
        $chart_options = [
            'chart_title' => 'Libros por categoría y mes',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Materiale',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            'filter' => [
                'category' => 'Novelas' // Ajusta la categoría según sea necesario
            ],
            'group_by_field2' => 'category',
            'column_names' => ['Libros' => 'count']
        ];

        $chart = new LaravelChart($chart_options);

        return view('dashboardbook', compact('chart'));
    }
}
