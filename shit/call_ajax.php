<?php
   
    
    $url = 'https://lottociti.com/'.$_GET['url'].'/lp'; // New url

    if(isset($_POST['ip']) && !empty($_POST['ip'])){
        $_POST['ip_address'] = $_SERVER['REMOTE_ADDR']; 
    }
    
    $arrPost = $_POST;
    

    
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//            'Content-Type: application/json'
//                )
//        );
        //curl_setopt($ch, CURLOPT_HEADER, 1); // tells curl to include headers in response, use for testing
        // turning off the server and peer verification(TrustManager Concept).
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        // setting the NVP $my_api_str as POST FIELD to curl
        curl_setopt($ch, CURLOPT_POSTFIELDS, $arrPost);
        // getting response from server
        $httpResponse = curl_exec($ch);
        if (!$httpResponse) {
            $response = "$API_method failed: " . curl_error($ch) . "(" . curl_errno($ch) . ")";
            print_r($response);
        }
        
        //$httpResponse = json_decode($httpResponse, true);
        //echo "<pre>";        print_r($httpResponse);
        echo $httpResponse;
