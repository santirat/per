 <?php
  

function send_LINE($msg){
 $access_token = 'iPHvhfKLR9OsZgp0ieQiuXy5yS0+C1WtarWF/4oP/exBEkHE27OZRczlETzLW6fFPoP9IuE3jqiNT9/tshUIinqRjTyNSeWAIguZx7+Fe9tVzkv/VcVCoWHuQxlBkKQGagBImRe2vUb35Nu2/m80lgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U8565287603ffabb7396b75da1205323f',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
