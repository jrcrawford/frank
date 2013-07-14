<?php 
function tidy (form_string) { 
  form_string = trim(stripslashes(form_string)); 
  return form_string; 
} 
// Output incoming data 
// Handles both GET and POST 
echo '<pre>' . "\n"; 
print_r($_REQUEST); 
echo '</pre>' . "\n"; 

// Jump out of the code here 
exit; 
?>     $request_method = $_SERVER["REQUEST_METHOD"];
    if($request_method == "GET"){
      $query_vars = $_GET;
    } elseif ($request_method == "POST"){
      $query_vars = $_POST;
    }
    reset($query_vars);
    $t = date("U");
    $fp = fopen("../data/gdform_$t","w");
    while (list ($key, $val) = each ($query_vars)) {
     fputs($fp,"<GDFORM_VARIABLE NAME=$key START>\n");
     fputs($fp,"$val\n");
     fputs($fp,"<GDFORM_VARIABLE NAME=$key END>\n");
     if ($key == "redirect") { $landing_page = $val;}
    }
    fclose($fp);
    if ($landing_page != ""){
	header("Location: http://".$_SERVER["HTTP_HOST"]."/$landing_page");
    } else {
	header("Location: http://".$_SERVER["HTTP_HOST"]."/");
    }


?>
