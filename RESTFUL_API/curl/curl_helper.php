<?php 
    function sendRequest($url, $method = 'GET', $data=[]) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );

        if ($method == 'GET') {
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
        // }elseif ($method == 'POST') {
        //     curl_setopt($ch, CURLOPT_POST, 1);
        //     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        // }elseif ($method == 'PUT') {
        //     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        //     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        // }elseif ($method == 'DELETE') {
        //     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        }else {
            print("Must Be implement in nearly");
        }

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return json_encode(
            [
                "response" => $response,
                "http_code" => $httpCode
            ]
        );
    }


?>