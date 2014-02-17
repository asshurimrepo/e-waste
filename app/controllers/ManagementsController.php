<?php

class ManagementsController extends BaseController {

	public function __construct()
	{
		Session::put('active', 'internets');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$internet = Internet::with('managements.categories')->find($id);
        return View::make('managements.index', compact('internet'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('managements.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$data = Input::except('categories');
		$data['internet_id'] = $id;
		$data['date'] = date('Y-m-d', strtotime($data['date']));
		$categories = Input::get('categories');

		$m = Management::create($data);
		$m->categories()->sync($categories);

		return Redirect::back()->with('suc', 'New E-waste Entry has been Added!');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('managements.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($i_id, $m_id)
	{
		$management = Management::with('technique', 'categories')->find($m_id);
        return View::make('managements.edit', compact('management'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($i_id, $m_id)
	{
		$data = Input::except('categories');
		$data['internet_id'] = $i_id;
		$data['date'] = date('Y-m-d', strtotime($data['date']));
		$categories = Input::get('categories');

		$m = Management::find($m_id);
		$m->update($data);
		$m->categories()->sync($categories);

		return Redirect::back()->with('suc', 'New E-waste Entry has been Updated!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($i_id, $m_id)
	{
		Management::find($m_id)->delete();
		return Redirect::back()->with('suc', 'E-waste Entry has been Removed!');
	}

}
