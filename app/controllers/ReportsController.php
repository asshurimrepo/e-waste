<?php

class ReportsController extends BaseController {

	public function __construct()
	{
		Session::put('active', 'reports');
	}

	public function getIndex()
	{
		$techniques = Technique::with('managements')->get();
		$data = [];

		foreach ($techniques as $t) {
			$data[] = ['label'=>$t->name, 'data'=>$t->managements->count()];
 		}

 		
		$categories = Category::with('managements')->get();
		$total = CategManagement::count();
		return View::make('reports.index', compact('categories', 'total', 'data'));
	}

}
