<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});
Route::get('/songs', function()
{
	return View::make('musics');
});
function getDownload($id){
        //PDF file is stored under project/public/download/info.pdf
		$musicFile=Music::find($id);
        $file= public_path(). $musicFile->path;
        $headers = array(
              'Content-Type: audio/mpeg',
            );
        return Response::download($file, $musicFile->name, $headers);
};
Route::get('/songs/download/{id}',function($id){
	getDownload($id);
});
Route::get('/comming-soon', function()
{
	return View::make('commingsoon');
});
function getUpload($upload_path){
 Input::file('file')->move($upload_path);	
};
Route::get('/admin',function(){
	return View::make('admin');
});
Route::post('/upload',function(){
	$name=Input::get('name');
	$artist=Input::get('artist');
	$path=public_path().'/download/musics'. Input::file('file')->getClientOriginalName();
	getUpload($path);
	$song=Song::create(
		array(
			'name'=>$name,
			'artist'=>$artist,
			'path'=> $path
			)
		);
	if ($song){
		return 'goot';
	}

});