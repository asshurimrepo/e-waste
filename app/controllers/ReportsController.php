<?php

class ReportsController extends BaseController {

	public function __construct()
	{
		Session::put('active', 'reports');
	}

	public function getIndex()
	{
		$categories = Category::with('managements')->get();
		$total = CategManagement::count();
		return View::make('reports.index', compact('categories', 'total'));
	}

}
