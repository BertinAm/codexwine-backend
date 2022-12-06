<?php
function send_twilio_sms($id, $token, $from, $to, $body){
    $url = "https://api.twilio.com/2010-04-01/Accounts/ACb8284021369639638a7182e2fa561d64/Messages.json";
    $data = array (
        'From' => $from,
        'To' => $to,
        'Body' => $body,
    );
    $post = http_build_query($data);
    $x = curl_init($url );
    curl_setopt($x, CURLOPT_POST, true);
    curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
    curl_setopt($x, CURLOPT_POSTFIELDS, $post);
    $y = curl_exec($x);
    curl_close($x);
    return $y;
}
?>