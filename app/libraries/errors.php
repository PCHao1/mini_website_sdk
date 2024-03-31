<?php 
class Errors{
	public function notFound(){
		http_response_code(404);
		echo "Not Found";
	}
}