<?php
class AdminController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function addSong()
    {
        try {
				$message = "";
				#create new object from database 
				$options = array(
    				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
				);
				$db = new PDO("mysql:host = localhost ; dbname=musicband",'root','',$options);
				#take arguments from post request
				$name = Input::get('name');
				$path = Input::get('path');
				$artist = Input::get('artist');


				#check if all arguments exist then do something else return an errorMessage
				if($name && $path && $artist){
					#set query
					$add = $db->prepare('insert into songs(name,path,artist) value(:name,:path,:artist)');
					#bind values
					$add->bindValue(':name',$name);
					$add->bindValue(':path',$path);
					$add->bindValue(':artist',$artist);

					#run the query
					$add->execute();
					#close database
					$db = null;
					#go back to admin page
					return Redirect::to('admin');
				}
				else {
					#return error message
					$message = "لطفا همه ی فیلد ها را پر کنید";
					return View::make('admin',array('message'=>$message));
				}
				#close database
		   		$db = null;
			}
			#exception
			catch(PDOException $e)
			{
				    echo $e->getMessage();
		    }
    }

    public function delSong()
    {
    			
    	try{
    			$message = "";
    			$ID = intval($_POST['ID']);

				#create new object from database 
				$options = array(
    				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
				);
				$db = new PDO("mysql:host = localhost ; dbname=musicband",'root','',$options);
				#take arguments from post request
				$id = $ID;

				#check if all arguments exist then do something else return an errorMessage
				if($id){
					#set query
					$del = $db->prepare("DELETE FROM songs WHERE id = :id");
					#bind values
					$del->bindValue(':id',$id);
					#run the query
					$del->execute();
					#close database
					$db = null;
					#go back to admin songscontrol page
					return Redirect::to('/admin/songscontrol');
				}
				else {
					#return error message
					$message = "لطفا همه ی فیلد ها را پر کنید";
					return View::make('admin',array('message'=>$message));
				}
				#close database
		   		$db = null;
		   		print($id);
			}
			#exception
			catch(PDOException $e)
			{
				    echo $e->getMessage();
		    }
    }
    
}