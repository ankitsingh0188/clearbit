<?php

  // $domain = $_SESSION['domain'];
  // $query = $_SESSION['query'];

  //url to clearbit pospector search
  $url = 'https://prospector.clearbit.com/v1/people/search?domain=techmahindra.com&query=ravi';
  $result = clearbit_httpGet($url);
  $output = json_decode($result,true);
  foreach ($output as $key => $value) {
    $data = array(
      'id' => $value['id'],
      'givenName' => $value['name']['givenName'],
      'familyName' => $value['name']['familyName'],
      'fullName' => $value['name']['fullName'],
      'title' => $value['title'],
      'role' => $value['role'],
      'seniority' => $value['seniority'],
    );
    echo '<pre>';
    print_r($data);
  }

// CURL http get request
function clearbit_httpGet($url)
  {
    $username = 'sk_068a4f13162973cfa52bae23866281cf';
    $password = 'Business@123'; 
    $ch = curl_init($url);   
    curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); 
    $output=curl_exec($ch); 
    curl_close($ch);
    return $output;
  }
 
 // CURL http post request
 function clearbit_httpPost($url,$params)
  {
    $postData = '';
     //create name value pairs seperated by &
     foreach($params as $k => $v) 
     { 
        $postData .= $k . '='.$v.'&'; 
     }
     $postData = rtrim($postData, '&');
     $ch = curl_init($url);
     curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
     curl_setopt($ch,CURLOPT_HEADER, false); 
     curl_setopt($ch, CURLOPT_POST, count($postData));
     curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
     $output=curl_exec($ch);
     curl_close($ch);
     return $output;
  }

?>
