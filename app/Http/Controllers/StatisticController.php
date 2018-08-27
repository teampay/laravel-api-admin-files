<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Traits\UsesApi;
use App\Support\Classes\Api\Pagination;

/**
 * Controller for statistic api endpoints.
 */
class StatisticController extends Controller
{
    use UsesApi;

    /**
     * {@inheritDoc}
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display public page statistics.
     *
     * @return \Illuminate\Http\Response
     */
    public function publicStatistics(Request $request)
    {
        $statistics = $this->api()
            ->publicStatistics()
            ->order('date|text')
            ->sort('desc')
            ->where(['firstname', 'like', '%ben', 'or'], ['secondname', '=', 'ned', 'or'], ['lastname', '=', 'test', 'or'], ['city', '=', 'Kiev', 'or'], ['country', '=', 'Ukraine'])
            ->andWhere(['investment_plan_id', '=', '1'])
            ->andWhere(['is_agent', '=', '1'])
            //->startDate('2018-01-01')
            //->endDate(date('Y-m-d'))
            ->pagination($request->get('page'), $request->get('perPage'))
            ->json();

        dd($statistics);
        exit;

        $pagination = $statistics->pagination();

        return view('api.statistics.index', compact('statistics', 'pagination'));
    }
}
