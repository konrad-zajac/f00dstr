<?php

namespace App\Http\Controllers;
use App;
use App\Point;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$points = Point::paginate(4);

//		$markets = Market::orderBy('id', 'asc')->paginate(4);
        
		return view('point.index', compact('points'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('point.create');

	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		Point::create($request->all());
		//  Point::create([
		//     'point_name' => $request['point_name'],
		//     'point_city' => $request['point_city'],
		//     'point_address' => $request['point_address'],
		//     'point_telephone' => $request['point_telephone'],
		//     'point_importance_of_price' => $request['point_importance_of_price'],
		//     'point_importance_of_taste' => $request['point_importance_of_taste'],
		//     'point_importance_of_music' => $request['point_importance_of_music'],
		//     'point_importance_of_decor' => $request['point_importance_of_decor'],
		//     'point_importance_of_variety' => $request['point_importance_of_variety'],
		// ]);
		return redirect('point');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function show($id)
	{
		$point = App\Point::where('point_id', $id)->first();
		return view('point.show', compact('point'));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $point = App\Point::where('point_id', $id)->first();
		return view('point.edit', compact('point'));

	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Point $point)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      App\Point::where('point_id', $id)->delete();

		return redirect('point');
	}
}
