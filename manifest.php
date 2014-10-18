<?php

require_once('vendor/autoload.php');

class Manifest {

	public function load()
	{
		try {
			Dotenv::load(APPPATH);
		}
		catch(Exception $e)
		{
			if(DEBUG)
				echo $e->getMessage();
		}
	}
}
