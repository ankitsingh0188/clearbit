<?php

    //url to clearbit pospector search
    $url = 'https://prospector.clearbit.com/v1/people/search';

    $curl = curl_init();
    $username = 'sk_068a4f13162973cfa52bae23866281cf';
    $password = 'Business@123';
    $domain = 'www.techmahindra.com';
    $query = 'Ravi';
   // $values = array($domain,$query);
   /* $values = array(
        domain => 'techmahindra.com',
        query => 'Ravi'
    ); */
     $params = array(
   "domain" => "techmahindra.com",
   "query" => "Ravi",
);
 $postData = '';
   //create name value pairs seperated by &
   foreach($params as $k => $v)
   {
      $postData .= $k . '='.$v.'&';
   }
   $postData = rtrim($postData, '&');

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_USERPWD, "$username:$password");
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_POST, count($postData));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);



    // execute and return string
    $str = curl_exec($curl);

    curl_close($curl);


    var_dump($str);
?>
