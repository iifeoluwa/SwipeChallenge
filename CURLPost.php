<?php

/*	
	Function to handle posting of data in fom of arrays to a specified url.

	Written By: Arowosegbe Ifeoluwa
	For: Swipe Challenge
*/

function postData($data, $url){

    	//NOTE: Data passed to the '$data' argument should be in the form of an associative array.

    	if (filter_var($url, FILTER_VALIDATE_URL)){
    		
    		//If the url passes the validation test, create a new cURL resource

    		$startCurl = curl_init();

    		/*Set URL data is to be posted to and the data to be posted
			  plus other appropriate options.
    		*/
    		$curlOptions = array(
    			CURLOPT_URL => $url,
    			CURLOPT_RETURNTRANSFER => true,
    			CURLOPT_POST => true,
    			CURLOPT_POSTFIELDS => $data,
    			CURLOPT_HEADER => false
    			);

    		curl_setopt_array($startCurl, $curlOptions);

	    		//Check for error(s) in the request then store the response in $response if there are no errors.

	    		if (curl_exec($startCurl) === false) {
	    			
	    			echo ('An error of this nature occurred<br>' . curl_error($startCurl) . '<br>Please check the data you posted');
	    		}

	    		else {
	    			$response = curl_exec($startCurl);
	    		}

	    		return $response;
    	}
    
    	else {
    
    		echo "Please check the url. <br>Note that a correct url has this format: 'http://www.stutern.com'";
    	}
    
    }

?>