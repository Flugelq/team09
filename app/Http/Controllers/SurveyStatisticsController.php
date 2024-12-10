<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistics;

class SurveyStatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Statistic = Statistics::all();
        return view('Statistics.list', compact('Statistic'));
    }

    /**
     * Show the form for creating a new resour
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Statistics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'category',
            'subcategory',
            'sample_size',
            'very_satisfied_pct',
            'satisfied_pct',
            'neutral_pct',
            'dissatisfied_pct',
            'very_dissatisfied_pct'
        ]);

        $Statistics = Statistics::create($data);
        return redirect('SurveyStatistcs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $statis = Statistics::findOrFail($id);
        return view('Statistics.show')->with('statis',$statis);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statis = Statistics::findOrFail($id);
        $statis->delete();
        return redirect('SurveyStatistcs');
    }
}
