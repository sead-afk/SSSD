<?php 

/*curl -X "POST" "https://rest.nexmo.com/sms/json" \
-d "from=Vonage APIs" \
-d "text=Hello from Vonage SMS API" \
-d "to=38766662664" \
-d "api_key=23591e1f" \
-d "api_secret=0FaUSYo1SYY5J6vI"*/

function send_text_message($to, $text){
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, "https://rest.nexmo.com/sms/json");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 
                "from=JosePC&text=yo&to=38766662664&api_key=23591e1f&api_secret=0FaUSYo1SYY5J6vI");
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $server_output = curl_exec($ch);
    
    if($server_output === false){
        echo 'Curl error: ' . curl_error($ch);
    }
    
    print_r($server_output);
    curl_close($ch);
}

?>