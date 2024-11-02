
<?php
ob_start();
    define('6461910157','7242421312:AAGv7_Uy_Uo8PRcvYJaI7d6ylbGURirA8z0')
    function bot($method,$datas=[]){
        $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
        $res = curl_exec($ch);
        if(curl_error($ch)){
            var_dump(curl_error($ch));
        }else{
            return json_decode($res);
        }
    }
    
    
    
    $update = json_decode(file_get_contents('php://input'));
    $message = $update->message;
    $chat_id = $message->chat->id;
    $text = $message->text;


    if($text && $text != "/start" && $message->reply_to_message->from->id == 428029564 && $message->chat->type != "private"){
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, "lang=ar"."&hoi=".$text);
    $res = curl_exec ( $ch );
    $res = preg_replace("/<img .*|<span .*|<\/.*/", '', $res);
    $res = str_replace("\n", '', $res);
        $res = file_get_contents('http://ghuntur.com/simsim.php?deviceId=&bad=0&lc=ar&txt='.urldecode($text));
    $res = str_replace("https://play.google.com/store/apps/details?id=www.speak.com","😂🌚",$res);
    bot("sendChatAction",[
    'action'=>'typing',
    'chat_id'=>$chat_id
    ]);

    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$res,
    'reply_to_message_id'=>$message->message_id
    ]);

    }
    
        if($text && $text != "/start" && $message->chat->type == "supergroup"){
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, "lang=ar"."&hoi=".$text);
    $res = curl_exec ( $ch );
    $res = preg_replace("/<img .*|<span .*|<\/.*/", '', $res);
    $res = str_replace("\n", '', $res);
       $res = file_get_contents('http://ghuntur.com/simsim.php?deviceId=&bad=0&lc=ar&txt='.urldecode($text)); 
    $res = str_replace("https://play.google.com/store/apps/details?id=www.speak.com","😂🌚",$res);

    bot("sendChatAction",[
    'action'=>'typing',
    'chat_id'=>$chat_id
    ]);

    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$res,
    'reply_to_message_id'=>$message->message_id
    ]);

    }
    if($text && $text != "/start" && $message->chat->type == "private"){
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, "lang=ar"."&hoi=".$text);
    $res = curl_exec ( $ch );
    $res = preg_replace("/<img .*|<span .*|<\/.*/", '', $res);
    $res = str_replace("\n", '', $res);
       $res = file_get_contents('http://ghuntur.com/simsim.php?deviceId=&bad=0&lc=ar&txt='.urldecode($text)); 
    $res = str_replace("https://play.google.com/store/apps/details?id=www.speak.com","😂🌚",$res);

    bot("sendChatAction",[
    'action'=>'typing',
    'chat_id'=>$chat_id
    ]);

    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$res,
    'reply_to_message_id'=>$message->message_id
    ]);

    }
    
    if($text == "هلو"){
    bot("sendMessage",[
    'chat_id'=>$chat_id,
    'text'=>"هلا حبيبي اشترك بقناتي https://t.me/A_iii_b حباب"
    ]);
    }
    
    if($message->new_chat_member){
        bot("sendMessage",[
        'chat_id'=>$chat_id,
        'text'=>"منور/ة",
        'reply_to_message_id'=>$message->message_id
        ]);
    }

 if(preg_match("/@$namebot/",$text)){
        bot("sendMessage",[
        'chat_id'=>$chat_id,
        'text'=>"عيونها 🤤❣️",
        'reply_to_message_id'=>$message->message_id
        ]);
    }
    
  if(preg_match("/سمسوم/",$text) or preg_match("/سمسم/",$text)){
        bot("sendMessage",[
        'chat_id'=>$chat_id,
        'text'=>"ها 😔😂️",
        'reply_to_message_id'=>$message->message_id
        ]);
    }


    if(preg_match("/سمسمي/",$text) or preg_match("/بس/",$text)){
        bot("sendMessage",[
        'chat_id'=>$chat_id,
        'text'=>"ميوووو 🌚😹",
        'reply_to_message_id'=>$message->message_id
        ]);
    }
if($text == "/start"){
    bot("sendMessage",[
    'chat_id'=>$chat_id,
    'text'=>"- هلو حبي وياك سمسمي 🌚♥️
- تعال نسؤلف لان ضايج كلش ):
تـابع قناتي بعد عمك https://t.me/A_iii_b
- وذا تحتاج شي هذا مطوري @O_II_R
- خوش ولد ☹️😂 "
    ]);
    }


    ?>

