<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminController extends Controller
{
    public function admin_user(){
        $chart_options = [
            'chart_title' => 'New Users by Day',
            'report_type' => 'group_by_date',
            'model' => 'App\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
            'chart_height'=>'0',
            'style_class'=>'userchart'
        ];
        $chart1 = new LaravelChart($chart_options);
        return view('admin.users',compact('chart1'));

    }
}
