<?php

class ServeceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return View::make('service.manage');
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
	public function store()
	{
		$file = Input::file('image'); // your file upload input field in the form should be named 'file'
		$destinationPath = public_path().'/uploads';
		$filename = $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
		$uploadSuccess = Input::file('image')->move($destinationPath, $filename);
		$RandNumber   		= rand(0, 9999999999);
		if( $uploadSuccess ) {
			require_once('PHPImageWorkshop/ImageWorkshop.php');
			chmod($destinationPath . "/" . $filename, 0777);
			$layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path() . '/uploads/' . $filename);
			unlink(public_path() . '/uploads/' . $filename);
			$layer->resizeInPixel(400, null, true);
			$layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
			$layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
			$dirPath = public_path() . '/uploads/' . "service";
			$filename = "_" . $RandNumber . ".png";
			$createFolders = true;
			$backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
			$imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
			$layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
			chmod($dirPath . "/" . $filename, 0777);
		}
			//connect & insert file record in database
		$service = Service::create(array(

			"name" => Input::get('name'),
			"descriptions" => Input::get('descriptions'),
			 "image" => $filename,

		));
		return View::make('service.manage');
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
		$service = Service::find($id);

		return View::make('service.edit', compact("service"));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$service = Service::find($id);

		$file = Input::file('image'); // your file upload input field in the form should be named 'file'
		$destinationPath = public_path().'/uploads';
		$filename = $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
		$uploadSuccess = Input::file('image')->move($destinationPath, $filename);
		$RandNumber   		= rand(0, 9999999999);
		if( $uploadSuccess ) {
			require_once('PHPImageWorkshop/ImageWorkshop.php');
			chmod($destinationPath . "/" . $filename, 0777);
			$layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path() . '/uploads/' . $filename);
			unlink(public_path() . '/uploads/' . $filename);
			$layer->resizeInPixel(400, null, true);
			$layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
			$layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
			$dirPath = public_path() . '/uploads/' . "service";
			$filename = "_" . $RandNumber . ".png";
			$createFolders = true;
			$backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
			$imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
			$layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
			chmod($dirPath . "/" . $filename, 0777);
		}
		//connect & insert file record in database
		$service->image = $filename;
		$service->name = Input::get('name');
		$service->descriptions = Input::get('descriptions');

		$service->save();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$service = Service::find($id);

		$service->delete();
	}


}
