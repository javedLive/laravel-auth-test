<?php namespace App\Modules\Course\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modules\Course\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("Course::index");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		 	$course = new Course();
            $course->name = $request->Input(['name']);
            $course->price = $request->Input(['price']);
            $course->save();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function searchCourse(Request $request)
	{
		   $term = $request->term;
           $results=array();
           $queries = \DB::table('courses')
                ->where('name', 'LIKE', '%'.$term.'%')
                ->take(5)->get();
            foreach ($queries as $data)
            {
                $results[]=['id'=>$data->id,'value'=>$data->name,'price'=>$data->price];
            }
            return response()->json($results);
	}

}
