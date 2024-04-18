$gauth = new Google_Service_oauth($client); 
$google_info = $gauth->userinfo->get(); 
$email = $google_info->email;
$name $google_info->name;