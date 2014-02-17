<?php

class InternetsController extends BaseController {

	public function __construct()
	{
		Session::put('active', 'internets');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$internets = Internet::orderBy('trade_name', 'asc')->get();
        return View::make('internets.index', compact('internets'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('internets.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// return Input::all();
		$internet_data = Input::except('services');
		$i = Internet::create($internet_data);
		$i->services()->sync(Input::get('services'));

		return Redirect::back()->with('suc', 'New Internet Cafe Information has been Added!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('internets.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$internet = Internet::with('services')->find($id);
        return View::make('internets.edit', compact('internet'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$internet_data = Input::except('services');
		$i = Internet::find($id);
		$i->update($internet_data);
		$i->services()->sync(Input::get('services'));
		return Redirect::back()->with('suc', 'Internet Info has been Updated!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Internet::find($id)->delete();
		return Redirect::back()->with('suc', 'Internet Info has been Removed!');

	}

}
