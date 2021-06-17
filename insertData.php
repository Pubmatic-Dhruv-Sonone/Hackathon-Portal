<?php



   $lineItemURL = "https://tech-stack-mgmt.pubmatic.com/creativecache/hackathon21-kvserver/creativecache/kv/add/lineitem?id=" . $_POST['id'] . "&type=" . $_POST['type'] . "&fcap=" . $_POST['fcap'] . "&startdate=" . $_POST['startdate'] . "&enddate=" . $_POST['enddate'] . "&goal=" . $_POST['goal'] . "&price=". $_POST['price'] . "&device=" .  urlencode($_POST['device']) . "&os=" . urlencode($_POST['os']) . "&ig=" . urlencode($_POST['ig']);

   print_r($lineitem);
  
   $client = curl_init($lineItemURL);
     curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
     $response = curl_exec($client);

   $creativeURL = "https://tech-stack-mgmt.pubmatic.com/creativecache/hackathon21-kvserver/creativecache/kv/add/creative?id=" . $_POST['creative_Id'] . "&type=" .$_POST['creative_type'] . "&adm=" . urlencode($_POST['adm']) ;


    print_r($creativeURL);
   $client = curl_init($creativeURL);
     curl_setopt($client,CURLOPT_RETURNTRANSFER,true);

    
     $response = curl_exec($client);
           print_r($response);
 
   
 $mappingURL = "https://tech-stack-mgmt.pubmatic.com/creativecache/hackathon21-kvserver/creativecache/kv/add/licr?liid=" . $_POST['id'] . "&crid=" .  $_POST['creative_Id'];

  
    
print_r($mappingURL);
   $client = curl_init($mappingURL);
     curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
     $response = curl_exec($client);
           print_r($response);
?>



