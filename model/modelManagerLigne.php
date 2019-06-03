<?php

class modelManager
{

	protected  function dbConnect()
{
	    try
	{$db = new PDO('mysql:host=db5000072940.hosting-data.io;dbname=dbs67511', 'dbu232050', 'Golf7sw122/');
	   
	    return $db;

	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
}
     
}