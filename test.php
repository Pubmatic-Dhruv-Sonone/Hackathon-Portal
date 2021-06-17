

<?php

    $data = array();

    class fina{
        public $lineitems;
    }

    

    class lic {
        public $id;
        public $type;
        public $price;
        public $source;
        public $fcap;
        public $startdate;
        public $enddate;
        public $goal;
        public $device;
        public $os;
        public $ig;
        public $targetings;
        public $pacing;

        public $creative_id;
        public $adm;
        public $creative_type;
        
      }

    $url = "https://tech-stack-mgmt.pubmatic.com/creativecache/hackathon21-kvserver/creativecache/kv/get/csig";

    
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);
    
    $result = json_decode($response);
    
    $lineitem = $result->lineitems;
    $creativeMap = $result->creatives;

    for ($i = 0; $i < count($lineitem); $i++) {

        $object = new lic();

        $object->id = $lineitem[$i]->id;
        $object->type = $lineitem[$i]->type;
        $object->price =  $lineitem[$i]->price;
        $object->source =  $lineitem[$i]->source;
        $object->fcap =  $lineitem[$i]->fcap;
        $object->startdate =  $lineitem[$i]->startdate;
        $object->enddate =   $lineitem[$i]->enddate;
        $object->goal =  $lineitem[$i]->goal;
        $object->device =   $lineitem[$i]->device;
        $object->os =    $lineitem[$i]->os;
        $object->ig =  $lineitem[$i]->ig;
        $object->targetings =   $lineitem[$i]->targetings;
        $object->pacing =  $lineitem[$i]->pacing;

        $creatives = $lineitem[$i]->creatives;
       
        foreach ($creatives as $value) {
            $object->creative_Id =$creativeMap->$value->id;
            $object->creative_type =$creativeMap->$value->type;
            $object->adm =$creativeMap->$value->adm;
        }
                    
        array_push($data, $object);
    }

   header("Content-Type: application/json");
    $f = new fina();
    $f->lineitems = $data;
    echo json_encode($f);  
  
?>


