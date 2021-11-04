
<?php

/*
//======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//
//======تنشر اذكر اسمي=====@P_PPPP======P_PPPP// اذاعه
//======تعدل اذكر المصدر =====@P_PPPP======P_PPPP//
*/
ob_start();
$API_KEY = '2055379191:AAFrow317mR-mOJ9XZTzAwW1eAbPra2AnCQ'; //add your bot token
$sudo = 736595861; // ايدي المطور الاساسي
$bot_id = 2055379191; // ايدي البوت $sudo2
$sudo2 = 2079259022; // ايدي المطور الثالث
$e = "@Mxiotxsxbot";// معرف البوت
define('xi_82',$xi_82);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".xi_82."/".$method;
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


$update = json_decode(file_get_contents('php://MitQx1'));
var_dump($update);
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$from_id    = $message->from->id;
$text= $message->text;
$chat_id    = $message->chat->id;
$new = $message->new_chat_member;
$left= $update->message->left_chat_member;
$result2    = $json2->result;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb= $update->message->message_id;
$game= $update->message->game; 
$name= $update->message->from->first_name;
$re  = $update->message->reply_to_message;
$re_msgid   = $update->message->reply_to_message->message_id;
$re_id      = $update->message->reply_to_message->from->id;
$gp_name    = $update->message->chat->title;
$user= $update->message->from->username;
$for = $update->message->from->id;
$sticker    = $update->message->sticker;
$video      = $update->message->video;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$doc = $update->message->document;
$fwd = $update->message->forward_from;
$re  = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type= $update->message->chat->type;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$id = $message->from->id;
$message_id = $message->message_id;
  $LE_C4_KR = $message->message_id;

$forward = $update->message->forward_from_id;
$number     = str_word_count($text);
$numper     = strlen($text);
$set = file_get_contents("data/$chat_id.txt");
$ex  = explode("\n", $set);
$photo1     = $ex[0];
$sticker1   = $ex[1];
$contact1   = $ex[2];
$doc1= $ex[3];
$fwd1= $ex[4];
$voice1     = $ex[5];
$link1      = $ex[6];
$audio1     = $ex[7];
$video1     = $ex[8];
$tag1= $ex[9];
$mark1      = $ex[10];
$bots1      = $ex[11];
$commands = array('/add','/lock photo','/lock voice','/lock audio','/lock video','/lock link','/lock user','/lock sticker','/lock contact','/lock doc','/promote','/ban','/kick','/pin','/setname',"قفل الصور","قفل البصمات","قفل الصوت","قفل الفيديو","قفل الروابط","قفل الجهات","قفل الملفات","حظر","طرد","رفع ادمن","ضع اسم","تثبيت","/link","الرابط");
$s = file_get_contents("https://api.telegram.org/bot$MitQx1/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
if(in_array($text, $commands) and $bot != "administrator"){
  bot('xi_82',[
      'chat_id'=>$chat_id,
      'text'=>"🚫┇للأسف البوت ليس ادمن في المجموعة",
  'reply_to_message_id'=>$mid
    ]);
}

$from_id     = $message->from->id;
$get = file_get_contents("https://api.telegram.org/bot$MitQx1/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
 if($text=="/start" and $type == "xi_82"){
  bot('xi_82',[
    'chat_id'=>$chat_id,
    'photo'=>"https://t.me/xi_82",
    'caption'=>"📮¦ اهلا بك عزيزي ❪ @$user ❫
📬¦ انا بوت اسمي ❪ستورم❫
⭐️¦ اختصاصي حماية كروبات المتفاعله
🔖¦ لتفعيل البوت اتبع مايلي
⚀¦ اضف البوت الى المجموعه
⚁¦ ارفع البوت ادمن في المجموعه
⚂¦ سيتم تفعيل البوت ورفع مشرفي الكروب
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
🎭¦ مطور البوت ❪@xi_82❫",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 [['text'=>"آلمـطـور 🌿",'url'=>"https://t.me/xi_82"]]
    ]

  ])
  ]);
}
if ($new and $new->id == $bot_id) {
    bot('xi_82',[
    'chat_id'=>$chat_id,
'photo'=>"https://t.me/xi_82",
    'caption'=>"🚨¦ مرحبا صديقي انا بوت حمايه ،
    🛠¦ يمڪنني حمايه مجموعتڬ ،
    📮¦ ارفعني ڪمشرف في المجموعه ،
    📛¦ ۅمن بعدها يتم تفعيل المجموعه ،
    🎲¦ ويتم رفع الادمنيه والمدير تلقائيا",
    
    ]);
}

if ($type == "supergroup" and in_array($chat_id, $groups)){
  
  if($you != "creator" && $you != "administrator" && $from_id != $sudo){
    if($photo && $photo1 == "l"){
 bot('PT2PP',[
     'chat_id'=>$chat_id,
     'message_id'=>$message->message_id
 ]);
    }

    if($voice and $voice1 == "l"){
      bot('PT2PP',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    } 
    if($audio && $audio1 == "l"){
      bot('PT2PP',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($video && $video1 == "l"){
      bot('PT2PP',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($link1 == "l" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('PT2PP',[
  'chat_id'=>$chat_id,
  'message_id'=>$message->message_id
      ]);
    } 
    if($tag1 == "l" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('PT2PP',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
]);
    }
    if($doc and $doc1 == "l"){
      bot('PT2PP',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($sticker and $sticker1 == "l"){
      bot('PT2PP',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($update->message->forward_from && $fwd1 == "l"){
      bot('PT2PP',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($message->entities and $mark1 == "l"){
      bot('PT2PP',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($new and $bots1 == "l"){
      $new_user = $new->username;
      if (preg_match('/^(.*)([Bb][Oo][Tt]/', $new_user)) {
 bot('kickChatMember',[
   'chat_id'=>$chat_id,
   'user_id'=>$new->id
   ]);
      }
    }
  }

if($bot == "administrator"){
if($you == "creator" or $you == "administrator") {
$re_user    = $update->message->reply_to_message->from->username;
  if($re  &&  $text == "/del"){
    bot('PT2PP',[
 'chat_id'=>$chat_id,
 'message_id'=>$re_msgid
    ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "حظر" or $text == "/kick" or $text=="طرد"){
    bot('xi_82',[
      'chat_id'=>$chat_id,
      'text'=>"
  📮¦ العضــو » ❪ @$re_user ❫
      📬¦ الايـدي » ( $re_id )
📬¦  تم حظره 
",
  'reply_to_message_id'=>$mid
      ]);
    bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "الغاء الحظر"){
    bot('xi_82',[
      'chat_id'=>$chat_id,
      'text'=>"
📮¦ العضــو » @$re_user 
📬¦ الايـدي » ( $re_id )
📬¦  تم الغاء حظره 
",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$re_id
      ]);
    }

  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ضع اسم ", "$aname", $text);
  if($text == "/setname $ename"){
    bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$ename 
      ]);
  }
   if($text == "ضع اسم $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "تثبيت"){
    bot('pinChatMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$re_msgid
      ]);
   }
   if($text == "/lock photo" or $text == "قفل الصور"){
    file_put_contents("data/$chat_id.txt", "l\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
     bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"
💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ الصور 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
 
   if($text == "/open photo" or $text == "فتح الصور"){
    file_put_contents("data/$chat_id.txt", "o\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ الصور 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
 
    if($text == "/lock sticker" or $text == "قفل الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\nl\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ الملصقات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/open sticker" or $text == "فتح الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\no\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ الملصقات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
	}
if($text == "/lock contact" or $text == "قفل الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\nl\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ جهات الاتصال 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
 if($text == "/open contact" or $text == "فتح الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\no\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ جهات الاتصال 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock doc" or $text == "قفل الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\nl\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ الملفات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/open doc" or $text == "فتح الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\no\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ الملفات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "/lock fwd" or $text == "قفل التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\nl\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ التوجيه 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open fwd" or $text == "فتح التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\no\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ التوجيه 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock voice" or $text == "قفل البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\nl\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ البصمات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/open voice" or $text == "فتح البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\no\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ البصمات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "/lock link" or $text == "قفل الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\nl\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ الروابط 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open link" or $text == "فتح الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\no\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ الروابط 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock audio" or $text == "قفل الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\nl\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ الصوت 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open audio" or $text == "فتح الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\no\n$video1\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ الصوت 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock video" or $text == "قفل الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\nl\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ الفيديو 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open video" or $text == "فتح الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\no\n$tag1\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ الفيديو 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/lock user" or $text == "قفل المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\nl\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ المعرفات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open user" or $text == "فتح المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\no\n$mark1\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ المعرفات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
    if($text == "/lock mark" or $text == "قفل الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\nl\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ الماركدون 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open mark" or $text == "فتح الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\no\n$bots1");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ الماركدون 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "/lock bots" or $text == "قفل البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\nl");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم قفل  ✓ البوتات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open bots" or $text == "فتح البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\no");
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"💥¦ اهــلا عزيزي [$name](tg://user?id=$chat_id) 🍃 
📮¦ تـم فتح  ✓ البوتات 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
      ]);
   }


    $export = json_decode(file_get_contents("https://api.telegram.org/bot$MitQx1/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;

   if($you == "creator" or $you == "administrator" or $you == "member" or $from_id == $sudo or $from_id == $sudo2){
    if ($text == "المطور" or $text ==  "مطور"  and  $you == "administrator") {
    $result2 = $json2->result;
    bot( sendmessage ,[
     chat_id =>$chat_id, 
     text =>"
     📮┇مرحبا عزيزي قمت بارسال رساله للمطور في الخاص للحضور
     💥┇وارفقت مع الرساله معلومات المجموعه ومعلوماتك
     👁‍🗨┇ انتضر قليلا ",
     reply_to_message_id =>$message->message_id,
    ]);
    bot( sendMessage ,[
     chat_id =>$sudo,
     text =>"
     💥┇عزيــزي المطــور الاساسي
    📮┇قــام احد الاشخاص بأستدعائــك
    👥¦ اسم العضو ( $name )
    🚸¦  رابط الكروب ( $l )
    📆┇اســم المجمــوعه【  $gp_name  】
    🔘┇ ايــدي المجمــوعه » $chat_id 🗣
    👁‍🗨┇ يوزر الــذي قام بأستدعائــك  » @$user
    ",
    ]);
    }
    }


   if(preg_match('/^(مسح) (.*)/', $text, $delmsg) and $from_id == $sudo ){
    for($h=$message_id; $h>=$message_id-$delmsg[2]; $h--){
    bot('deletemessage',[
    'chat_id' => $chat_id,
    'message_id' =>$h,]);}}
	$editMessage = $update->edited_message;
	$ename = $update->edited_message->from->first_name;
	$euser = $update->edited_message->from->username;
    $chatedit = $update->edited_message->chat->id;
    $chat_id2 = $update->callback_query->message->chat->id;
    $message_id = $update->callback_query->message->message_id;
    $data = $update->callback_query->data;
    if($editMessage){
         bot('xi_82',[
         'chat_id'=>$chatedit,
 'text'=>"
 📮¦ يامنشئين تعالو
 📮¦ العضو [$ename](https://t.me/$euser)
 📮¦ قام بلتعديل في المجموعه
 ------------------------------
 ",
         'message_id'=>$message->edited_message->message_id,
         'reply_to_message_id'=>$update->edited_message->message_id,
         ]);
     }
     //======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//
//======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//

  if($text=="الاوامر"){
    bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"《 آلآوآمـر آلعآمـہ‌‏》

 🔱~> 《م1》 ~ آوآمـر آلآدآرهہ‌‏
 ⚙️~> 《م2》 ~ آوآمـر آعدآدآت آلمـجمـوعهہ‌‏
 🛡~> 《م3》~ آوآمـر آلحمـآيهہ‌‏
 ♻️~> 《م4》 ~ آلآوآمـر آلعآمـهہ‌‏
 🕵️‍♂️~> 《م المطور》 ~ آوآمـر آلمـطـور
 
  ‌‌‏قناتنا ~>  
 @MitQx1


 ‏‎‏❋¦ رآسـلني للآسـتفسـآر ☜ { @xi_82 } ",
      ]);
  }

//======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//
//======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//
if($bot == "administrator"){
 if ($you == "administrator" or $you == "creator") {
if($text == "/add" or $text == "/add$e" or $text=="تفعيل"){
if(!in_array($chat_id, $groups)){
  file_put_contents("data/$chat_id.txt", "o\no\no\no\nl\no\nl\no\no\nl\no");
  file_put_contents("data/groups.txt", "$chat_id\n",FILE_APPEND);
$t =  $message->chat->title;
  bot('xi_82',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
    👨🏽‍🔧¦¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ آلگروب بآلبوت 
    ✓
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
    ]);
 }
if (in_array($chat_id, $groups)) {
$t =  $message->chat->title;
  bot('xi_82',[
    'chat_id'=>$chat_id,
    'text'=>"🎗¦ المجموعه بالتأكيد  تم تفعيلها",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MitQx1',
'disable_web_page_preview'=>true,
    ]);
 }
}
}
}
 if($text == "عدد الكروبات"){
  $c = count($groups);
  bot('xi_82',[
    'chat_id'=>$chat_id,
    'text'=>"🔐¦¦ عدد عدد الكروبات المفعلة » $c  ➼"
    ]);
 }
//======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//
//======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$from_user = $message->from->username;
$get = file_get_contents("https://api.telegram.org/bot$MitQx1/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info= json_decode($get, true);
$P_PPPP4        = $info['result']['status'];
if($message){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://PT2PP'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
$P_PPPP2 = array(
"خوش متفاعل 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜️",
"نايس التفاعل 💘ء");
 $JJ119 = array_rand($P_PPPP2,1);
 $p_pppp = array(
    "0.14%",
    "0.22%",
    "0.31%",
    "0.65%",
    "0.77%",
    "0.80%",
    "0.89%",
    "0.95%");
     $markst = array_rand($p_pppp,1);
    
$photo = "https://t.me/$user";
if($text=="ايدي" and $from_id == $sudo){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
🚦⎮اسمك •  $name
⚜️⎮ايديك • ❲ $from_id ❳  
🔘⎮معرفك • ❲ $from_user ❳ ،
👁‍🗨⎮رتبتك • ❲ مطور اساسي ❳ ،
🗃⎮تفاعلك • ❲ $P_PPPP2[$JJ119] ❳ ،
⏰⎮تفاعلك اليومي ( $p_pppp[$markst] )
💭⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 
💵⎮نقودك • ❴0❵
-----------------------
*",
"parse_mode"=>"MitQx1",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" and $from_id == $sudo){
 bot("sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"*
 🚦⎮اسمك •  $name
⚜️⎮ايديك • ❲ $from_id ❳  
🔘⎮معرفك • ❲ $from_user ❳ ،
👁‍🗨⎮رتبتك • ❲ مطور اساسي ❳ ،
🗃⎮تفاعلك • ❲ $P_PPPP2[$JJ119] ❳ ،
💭⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 
⏰⎮تفاعلك اليومي ( $p_pppp[$markst] )
💵⎮نقودك • ❴0❵
-----------------------
• لاتمتلك صوره لحسابك ،🌈ء
*",
"parse_mode"=>"MitQx1",
 ]);
 }
if($text=="ايدي" and $P_PPPP4 == "creator" and $from_id != $sudo){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
🚦⎮اسمك •  $name
⚜️⎮ايديك • ❲ $from_id ❳  
🔘⎮معرفك • ❲ $from_user ❳ ،
👁‍🗨⎮رتبتك • ❲ منشئ الكروب ❳ ،
🗃⎮تفاعلك • ❲ $P_PPPP2[$JJ119] ❳ ،
⏰⎮تفاعلك اليومي ( $p_pppp[$markst] )
💭⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 
💵⎮نقودك • ❴0❵
-----------------------
*",
"parse_mode"=>"MitQx1",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي"and $P_PPPP4 == "administrator"  and $from_id != $sudo and  $from_id !== $sudo2){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
🚦⎮اسمك •  $name
⚜️⎮ايديك • ❲ $from_id ❳  
🔘⎮معرفك • ❲ $from_user ❳ ،
👁‍🗨⎮رتبتك • ❲ ادمن الكروب ❳ ،
🗃⎮تفاعلك • ❲ $P_PPPP2[$JJ119] ❳ ،
⏰⎮تفاعلك اليومي ( $p_pppp[$markst] )
💭⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 
💵⎮نقودك • ❴0❵
-----------------------
*",
"parse_mode"=>"MitQx1",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي"and $P_PPPP4 == "member" and $from_id != $sudo){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
🚦⎮اسمك •  $name
⚜️⎮ايديك • ❲ $from_id ❳  
🔘⎮معرفك • ❲ $from_user ❳ ،
👁‍🗨⎮رتبتك • ❲ عضو فقط ❳ ،
🗃⎮تفاعلك • ❲ $P_PPPP2[$JJ119] ❳ ،
⏰⎮تفاعلك اليومي ( $p_pppp[$markst] )
💭⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 
💵⎮نقودك • ❴0❵
-----------------------
*",
"parse_mode"=>"MitQx1",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}

if($text=="ايدي" and $from_id == $sudo2 and $from_id != $sudo){
    bot("xi_82",[
    'chat_id'=>$chat_id,
    "photo"=>$photo,
    'caption'=>"*
    🚦⎮اسمك •  $name
    ⚜️⎮ايديك • ❲ $from_id ❳  
    🔘⎮معرفك • ❲ $from_user ❳ ،
    👁‍🗨⎮رتبتك • ❲ مطور رتبه ثالثه) ،
    🗃⎮تفاعلك • ❲ $P_PPPP2[$JJ119] ❳ ،
    ⏰⎮تفاعلك اليومي ( $p_pppp[$markst] )
    💭⎮رسائلك •  ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳ 

    💵⎮نقودك • ❴0❵
    -----------------------
    *",
    "parse_mode"=>"MitQx1",
    'message_id'=>$message->message_id,
    'reply_to_message_id' =>$message->message_id, 
    ]);
    }
    //======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//
//======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//
if($text=="صورتي"){
$photo = "https://t.me/$user";
  bot('xi_82',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"
صورتك : @$from_user
",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}
if($text == "msg" or $text == "رسائلي" and $id == $sudo){
 bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"
 📮¦ مرحبا عزيزي » ❲ المطور الاساسي⭐️ ❳
 📬¦ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
 💥
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text == "msg" or $text == "رسائلي" and $you == "member"and $chat_id !== $sudo){
  bot('xi_82',[
  'chat_id'=>$chat_id,
  'text'=>"
  📮¦ مرحبا عزيزي » ❲ عضو مهتلف ❳
  📬¦ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
  💥
  ",
  'reply_to_message_id'=>$message->message_id, 
  ]);
  }
  if($text == "msg" or $text == "رسائلي" and $you == "administrator"  and $from_id!== $sudo){
    bot('xi_82',[
    'chat_id'=>$chat_id,
    'text'=>"
    📮¦ مرحبا عزيزي » ❲ ادمن الكروب ❳
    📬¦ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
    💥
    ",
    'reply_to_message_id'=>$message->message_id, 
    ]);
    }
    if($text == "msg" or $text == "رسائلي" and $you == "creator" and $you !== "administrator" and $chat_id !== $sudo){
      bot('xi_82',[
      'chat_id'=>$chat_id,
      'text'=>"
      📮¦ مرحبا عزيزي » ❲ منشئ الكروب ❳
      📬¦ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
      💥
      ",
      'reply_to_message_id'=>$message->message_id, 
      ]);
      }
//////////////////////////////منهاية قفل الفارسيه///////////////////////
$update = json_decode(file_get_contents('php://PT2PP'));
$message = $update->message;
$p_pppp = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$k5ot9 = file_get_contents("xi_82.txt");
$hamza21 = file_get_contents("xi_010.txt");
$result2    = $json2->result;
$p_pppp = array(
	"📮¦ للاسف لقد خسرت 
	📬¦ المحيبس مو بهاي الايد
	💥¦ حاول مره اخرى للعثور على المحيبس",
	" 📮¦ مبروك فزت وطلعت المحيبس بل ايد 
	🎊¦ لقد حصلت على { 3 }من نقاط يمكنك استبدالهن برسائل",
   );
$marks = array_rand($p_pppp,1);
   
if($text == "محيبس"){
file_put_contents("k5ot9.txt","k5");
bot('xi_82',[
	'chat_id'=>$chat_id,
	'text'=>"
(1)      (2)       (3)
👊 ‹› 👊 ‹› 👊

(4)      (5)      (6)
👊 ‹› 👊 ‹› 👊
💥
📮¦ اختر لأستخراج المحيبس الايد التي تحمل المحيبس 
🎁¦ الفائز يحصل على { 3 } من النقاط",
'reply_markup'=>json_encode([
 'keyboard'=>[
 [
['text'=>""]
]
   ],
 'resize_keyboard'=>true
   ])
  ]);   
}


if($text == "1"  and $xi_82 == "i5"){
file_put_contents("xi_82.txt","none");
  bot('xi_82',[
  'chat_id'=>$chat_id,
  'text'=>"$p_pppp[$marks]",
  'reply_to_message_id'=>$message->message_id

  ]);
  }
  

  if($text == "2" and $xi_82 == "i5"){
 file_put_contents("xi_82.txt","none");
	bot('xi_82',[
	'chat_id'=>$chat_id,
	'text'=>"$p_pppp[$marks]",
	'reply_to_message_id'=>$message->message_id

	]);
	}
	

	if($text == "3"  and $xi_82 == "i5"){
file_put_contents("xi_82.txt","none");
 bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>"$p_pppp[$marks]",
 'reply_to_message_id'=>$message->message_id

 ]);
 }
 

 if($text == "4"  and $xi_82 == "i5"){
  file_put_contents("xi_82.txt","none");
 
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"$p_pppp[$marks]",
'reply_to_message_id'=>$message->message_id

]);
}


if($text == "5"  and $xi_82 == "i5"){
	file_put_contents("xi_82.txt","none");
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"$p_pppp[$marks]",
'reply_to_message_id'=>$message->message_id

]);
}


if($text == "6"  and $xi_82 == "i5"){
	file_put_contents("xi_82.txt","none");
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"$p_pppp[$marks]",
'reply_to_message_id'=>$message->message_id

]);
}
   
//======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//
if($text=="انجب" and $you == "creator"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"حاظر تاج راسي انجبيت 😇
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "administrator"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"فوك ما مصعدك ادمن و تكلي انجب 😏 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "member"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"انجب انته لا تندفر 😒",
'reply_to_message_id'=>$message->message_id, 
]);
}



##### الستارت #####
if($text == 'تفعيل الالعاب'){ 
bot('xi_82', [
'chat_id'=>$xi_82,
'text'=>"📮¦ تم تفعيل الالعاب في المجموعه 
✓",
]);}


##### الاسئله #####
$هدوء = array('الكلمة 📮¦ [ ل س ا ق ت ب ا ] '
,'الكلمة 📮¦ [ ه ا ر س ي ]'
,'الكلمة 📮¦ [ ر و ح س ]'
,'الكلمة 📮¦ [ ن ف ه ق ]'
,'الكلمة 📮¦ [ و ن ي ا ف  ]'
,'الكلمة 📮¦ [  ن و ه ب ز  ]'
,'الكلمة 📮¦ [ ر ك و س ت ن ا ي ]'
,'الكلمة 📮¦ [ ا ع ل ق ا ر ]'
,'الكلمة 📮¦ [ و هـ ك ه ]'
,'الكلمة 📮¦ [ ف ي س ه ن ]'
,'الكلمة 📮¦ [ ج ا د ج  ه ]'
,'الكلمة 📮¦ [ س م ر د ه ]'
,'الكلمة 📮¦ [ ا ن ا و ل ]'
,'الكلمة 📮¦ [ ه غ ف ر ]'
,'الكلمة 📮¦ [ ج ه ث ل ا ]'
,'الكلمة 📮¦ [ خ م ب ط ]'
);
$ailnoor = array_rand($هدوء, 1);
if($text =="الاسرع" or $text =="اسرع واحد"){
bot('xi_82',[
'chat_id'=>$xi_82,
'text'=>$هدوء[$ailnoor],
'reply_to_message_id'=>$message->message_id
]);
}


##### الاجوبه #####
if($text == 'سحور' or $text == 'سياره'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'كهوه' or $text == 'سفينه' or $text == 'العراق'){
$MitQx1 = array('📮¦ مبروك فزت انت الاسرع
🎊¦ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',
'📮¦ مبروك فزت انت الاسرع
🎊¦ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',
' 📮¦ مبروك فزت انت الاسرع
🎊¦ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',
'📮¦ مبروك فزت انت الاسرع
🎊¦ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',);
$php = array_rand($MitQx1, 1);
bot('xi_82',[
'chat_id'=>$xi_82,
'text'=>$MitQx1[$php],
'reply_to_message_id'=>$message->message_id
]);
}

$rnd = rand(1,999999999999999999);
if($text=="صورتي"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("MitQx1",["xi_82"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://hamza70788.000webhostapp.com//$rnd.jpg"; // رابط استضافتك
bot("xi_82",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>" ",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
if($text == "/link" or $text == "الرابط"){
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$MitQx1/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('xi_82',[
      'chat_id'=>$chat_id,
      'text'=>"ٴ📮¦ » رابط مجموعة ↓
      ٴ📬¦ » $t
      ٴ📛¦ »  $l
      📆¦ تم سحب الرابط بواسطة »( $name )
      📎¦ معرفه »( @$user )",
      'disable_web_page_preview'=>true,
      'reply_to_message_id'=>$message->message_id,
      ]);
  
   }
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
$id_bot = 2055379191;
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and $id != $id_bot and  $you == "member"){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"👤¦ آلعضـو : @$user
👤¦ الايدي : $id 
🚫¦ مـمـنوع آضـآفهہ آلبوتآت 
📛¦ تم طـرد آلبوت والعضو الذي اضاف البوت
✘",
]);
}

if($rep && $text == "ايدي" or $text == "ايديه"){
bot('xi_82', [
'chat_id' => $chat_id,
'text' => " 
ايديه : $re_id
معرفه : @$re_user ",
'reply_to_message_id'=>$message->message_id,

]);
}
//======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//
if($text == "م1"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"💯~>《آوآمـر آلرفع وآلتنزيل 》
      
✔️~>《 رفع ادمن ~ تنزيل ادمن 》

🚷~>《 آوآمـر  التقيد+آلحظـر+ وآلطـرد 》

🚫~>《 تقييد بالرد  》 : لتقيد العضو
الغاء تقيد برد      
❌~>《 طرد بالرد  》 : لطرد العضو 
🚯~>《 حظر بالرد  》 : لحظر وطرد العضو 
♻️~>《 الغاء الحظر بالرد 》 : لالغاء الحظر عن عض
🗳⁞ الاسرع •
  🗳⁞ سمايلات • 
  🗳⁞ الرابط •
  🗳⁞ موقعي •
  🗳⁞ محيبس •
  🗳⁞ نقاطي •
  🗳⁞ اطردني •
  🗳⁞ صورتي •
  🗳⁞ رسائلي •
  🗳⁞ ايديي •
  🗳⁞ معرفي •
  🗳⁞ اسمي •
  🗳⁞ ايدي •
  🗳⁞ سمايلات •
  🗳⁞ ترتيب •
  🗳⁞ معلوماتي •
  🗳⁞ القوانين •
  🗳⁞ السورس •
  🗳⁞ المطور •
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م2"){
    bot('xi_82',[
    'chat_id'=>$chat_id, 
    'text'=>"🔱~> 《اوامر الوضع للمجموعه 》

    🎖~> 《زخرف + الاسم》
   📬~> 《ضع اسم》~ لوضع اسم  
     
   🛠~>《الـرابـط 》~  لعرض الرابط  
   
   
    📬~> 《اوامر  الاعدادات 》
   
   🕵️‍♂️~> 《المطور》 : لعرض معلومات المطور 
   ⚠️~> 《معلوماتي》 : لعرض معلوماتك  
   🔰~> 《الاعدادات》 : لعرض اعدادات المجموعه 
   ⚜️~> 《المجموعه 》: لعرض معلومات المجموعه 
   ",
    'reply_to_message_id'=>$message->message_id, 
    ]);
    }
    if($text == "م3"){
        bot('xi_82',[
        'chat_id'=>$chat_id, 
        'text'=>"اوامر حمايه المجموعة 》

        《مسح + تقيد》 
        🌀~> قفل ~ فتح : 《الروابط 》
        🔈~> قفل ~ فتح :  《الصوت》
        🎥 ~> قفل ~ فتح :  《الــفيديو》
        🖼~> قفل ~ فتح :  《الـصــور》
        🚫~> قفل ~ فتح :  《الملصقات》
        🤖~> قفل ~ فتح : 《البوتات》
        🗯~> ️قفل ~ فتح : 《المعرفات》
        💮~> قفل ~ فتح :  《التوجيه》
        📱~> قفل ~ فتح : 《الجهات 》
        🗂~> قفل ~ فتح : 《الملفات》
        ⁉️~> قفل ~ فتح : 《الماركدون》
        💯~> قفل ~ فتح : 《البصمات》
       ",
        'reply_to_message_id'=>$message->message_id, 
        ]);
        }
        if($text == "م4"){
            bot('xi_82',[
            'chat_id'=>$chat_id, 
            'text'=>"📍💭 اوامر اضافيه 

            🕵🏻️‍♂️ معلوماتك الشخصيه ⚙️
            📝~> 《اسمي》 : لعرض اسمك 💯
            🌀~> 《معرفي》 : لعرض معرفك 💯
             ⚜️~> 《ايدي+ايديي》 لعرض ايديك 💯
             ✔️~>《ايديه بالرد》لعرض ايدي العضو
             
           ",
            'reply_to_message_id'=>$message->message_id, 
            ]);
            }

//======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//

if($text == '$name' or $text == "مطور"){
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>"+9647810611817",
'first_name'=>"ستورم",
'last_name'=>"MS",
'reply_to_message_id'=>$message->message_id, 
]);
}
//======الملف مقدم من قناتي=====@P_PPPP======P_PPPP//
//======شغل شهر لتبعص الحقوق=====@P_PPPP======P_PPPP//
if($text=="رتبتي" and $you == "creator"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"
📮¦ رتبة البوت » ❲ منشئ اساسي⭐️ ❳
📬¦ رتبتة الكروب » ❲ منشئ ❳
💥
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and $chat_id == $sudo){
    bot('xi_82',[
    'chat_id'=>$chat_id, 
    'text'=>"
    📮¦ رتبة البوت » ❲ مطور اساسي⭐️ ❳
    📬¦ رتبتة الكروب » ❲ عضو ❳
    💥
    ",
    
        ]);
}
if($text=="رتبتي" and  $you == "administrator" and $chat_id !== $sudo){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"
📮¦ رتبة البوت » ❲ ادمن ⭐️ ❳
📬¦ رتبتة الكروب » ❲ ادمن ❳
💥",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "member"and $chat_id !== $sudo){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"
📮¦ رتبة البوت » ❲ عضو ⭐️ ❳
📬¦ رتبتة الكروب » ❲ عضو ❳
💥",
'reply_to_message_id'=>$message->message_id, 
]);
}

/////////////////////////ممحيبس/////////////////
$u = explode("\n",file_get_contents("memb.txt"));
$m = count($u)-1;
$modxe = file_get_contents("usr.txt");
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",xi_82);
  }
if($text == '/admin' and $for == $sudo){ 
bot('xi_82',[ 
'chat_id'=>$chat_id, 
'text'=>'🎖¦ آهہ‏‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 🛠
...

🚸¦ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‏‏', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'🚦⎮ ايديك •'] ,['text'=>'🔘⎮ضع كليشه المطور'] ,['text'=>'📎⎮تحديث السورس'] 
], 
[
['text'=>'🗂¦ الملفات'] ,['text'=>'📆⎮ اذاعه •'] ,['text'=>'⌛️¦ اذاعه خاص']
], 
[ 
['text'=>'◼️¦ فحص الكروبات القليله •'] ,  ['text'=>'👁‍🗨¦ الاحصائيات'] ,['text'=>'🆔¦ تغير اسم البوت •'] 
], 
[ 
['text'=>'📤¦ اذاعه عام'] ,['text'=>'🖇¦ اذاعه عام توجيه'] ,['text'=>'⚫️¦ اذاعه خاص توجيه'] 
], 
]
]) 
]); 
}
/////////////////////////بنل المطور + لتخمط وتغير حقوق ضلعي/////////// الاذاعههه/////


$update     = json_decode(file_get_contents('php://MitQx1'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$from_user = $message->from->username;
mkdir("PT2PP_s");

$message_id = $message->message_id;
$gp_get = file_get_contents("PT2PP_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("PT2PP_s/P_PPPP2.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
if($message and !in_array($chat_id, $groups)){
file_put_contents("PT2PP_s/groups.txt", "$chat_id\n",FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}elseif($message and in_array($chat_id, $groups)) {
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}

if($text == "🖇¦ اذاعه عام توجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" and $from_id == $sudo){
    file_put_contents("PT2PP_s/P_PPPP2.txt","P_PPPP2");
    bot('xi_82',[
    'chat_id'=>$chat_id,
    'text'=>"
    📮┇ اهلا عزيزي الـمطور ، 
    👁‍🗨┇ قم بارسال التوجيه لعمل اذاعه",
    'parse_mode'=>"MitQx1",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "P_PPPP2" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('PT2PP',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
$MOhaMMed = count($pirvate)-1;
bot('PT2PP',[
          'chat_id'=>$chat_id,
          'text'=>"
📮┇ اهلا عزيزي الـمطور الاساسي
👁‍🗨┇ تم توجيه رسالتك الى $MOhaMMed عضو ، وجميع مجموعات البوت ",
'parse_mode'=>"xi_82",
'reply_to_message_id'=>$message->message_id
   ]);
 unlink("P_PPPP2/P_PPPP2.txt");
} 







if($message and !in_array($from_id, $pirvate)){
file_put_contents("PT2PP_s/pirvate.txt", "$from_id\n",FILE_APPEND);
bot("MitQx1",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}elseif($message and in_array($from_id, $pirvate)) {
bot("MitQx1",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}



if($text == "⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("P_PPPP2/P_PPPP2.txt","xi_82");
    bot('xi_82',[
    'chat_id'=>$chat_id,
    'text'=>"
📮┇ اهلا عزيزي الـمطور ، قم بأرسال رسالتك
👁‍🗨┇ ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MitQx1",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "xi_82" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('xi_82',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MitQx1",
'disable_web_page_preview'=>true,
]);
 file_put_contents("PT2PP_s/P_PPPP2.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('xi_82',[
          'chat_id'=>$chat_id,
          'text'=>"
📮┇ اهلا عزيزي الـمطور ، 
👁‍🗨┇ تم ارسال رسالتك الى $MOhaMMed عضو ",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}
if ($text == "📤¦ اذاعه عام" || $text == "🖇¦ اذاعه عام توجيه'" || $text == "اذاعه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/P_PPPP2.txt","LE_C4_KR");
    bot('xi_82',[
    'chat_id'=>$chat_id,
    'text'=>"
📮┇ اهلا عزيزي الـمطور الاساسي قم بأرسال رسالتك
📥┇ ملاحظةهہ : يمكنك استعمال الماركداون ",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "MitQx1" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('xi_82',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MitQx1",
'disable_web_page_preview'=>true,

]);
 unlink("PT2PP_s/P_PPPP2.txt");
} 
$MoHaMMed = count($private)-1;
bot('xi_82',[
          'chat_id'=>$chat_id,
          'text'=>"
📮┇ اهلا عزيزي الـمطور الاساسي
🔘┇ تم ارسال رسالتك الى $MoHaMMed عضو وجميع مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id
          ]);
}

if($text == "⚫️¦ اذاعه خاص توجيه" and $from_id == $sudo){
    file_put_contents("PT2PP_s/P_PPPP2.txt","PT2PP");
    bot('xi_82',[
    'chat_id'=>$chat_id,
    'text'=>"
    📮┇ مرحبا عزيزي المطور الاساسي
🔘┇ قم بارسال رسالتك للقيام بلاذاعه",
    'parse_mode'=>"MitQx1",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "PT2PP" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('MitQx1',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
} 
$MOhaMMed = count($pirvate)-1;
bot('xi_82',[
          'chat_id'=>$chat_id,
          'text'=>"
📮┇ اهلا عزيزي الـمطور الاساسي
💬┇ تم توجيه رسالتك الى $MOhaMMed  عضو",
'parse_mode'=>"MitQx1",
          'reply_to_message_id'=>$message->message_id
   ]);
 unlink("PT2PP_s/P_PPPP2.txt");
}
/////////////نهاية الاذاعه///////////////
$markos = file_get_contents("data/sudo.txt");
if($from_id == $sudo){
if($text=="🔘⎮ضع كليشه المطور"){
     file_put_contents("data//setengs.txt", "set");
     bot('xi_82',[
         'chat_id'=>$chat_id,
         'text'=>"📮┇ارسل الكليشه",
         'reply_to_message_id'=>$message->message_id
     ]);
 }
 if($text !== "🔘⎮ضع كليشه المطور" && $text == "$text" and file_exists("data/setengs.txt")){
 file_put_contents("data/sudo.txt","$text");
     bot('xi_82',[
         'chat_id'=>$chat_id,
         'text'=>"📮┇تم التغير الى :- $text",
         'reply_to_message_id'=>$message->message_id
     ]);
     unlink("data/setengs.txt");
 }
}

if($text == "المطور" or $text == 'مطور'){
bot('xi_82',[
'chat_id'=>$chat_id,
"text"=>"$markos",
'parse_mode'=>"MitQx1",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id
]);
}

if($text == "$namebots"){
bot('xi_82',[
'chat_id'=>$chat_id,
"text"=>$jasmea[$reply_as],
'reply_to_message_id'=>$message->message_id
]);
}

///////sudo المطور p_pppp///////////

$left = explode("\n", $gp_left);
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
if($text == "👁‍🗨¦ الاحصائيات" and $from_id == $sudo ){
$m = count($left)-1;
$c = count($groups)-1;
$r = $c - $m;
echo"$r";
$memocount = count($memopv) -1;
bot('xi_82',[
'chat_id'=>$chat_id,
"text"=>"
🗳¦ عدد الكلي للمجموعات « *$c* »
📈¦ عدد المجموعات الغير مفعله « *$m* »
👁‍🗨¦ عدد المجموعات المدفوعه « *0* »
📊¦ عدد المجموعات الصحيح « *$r* » 
📮¦عدد اعضاء الخاص :- $memocount",
'reply_to_message_id'=>$message->message_id
]);
}

///////////الاحصائيات p_pppp////////////
if($text == "☑️¦ عدد الكروبات •"){
  $c = count($groups);
  bot('xi_82',[
    'chat_id'=>$chat_id,
    'text'=>"
    📬¦ عدد المجموعات المفعله ↫ ❪ $c ❫
    💥¦ عدد المشتركين ↫ 
    ✓   ➼"
    ]);
 }
$export = json_decode(file_get_contents("https://api.telegram.org/bot$MitQx1/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "تفعيل" or $text == '/add' and  $you == "administrator") {
$result2 = $json2->result;
$gp_name1 = $update->message->from->chat_title;
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->message_id,
]);
bot('xi_82',[
'chat_id'=>$sudo,
'text'=>"
📬¦ قام احد المدراء بتفعيل البوت
☑️¦اسم العضو ( $name )
🚸¦[اضغط للدخول للمجموعه](https://t.me/$l)
📆┇[$gp_name1](https://t.me/$l)
🎫¦ ايدي المجموعه » $chat_id
⚖️¦ عدد الاعضاء » 【  $result2  】 عضو 🗣
👁‍🗨¦ بواسطة » $name
💬¦ معرفه » @$user
🔘┇ ايــدي المجمــوعه » $chat_id 🗣

",
"parse_mode"=>"MitQx1",
'message_id'=>$message->message_id,
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "ايديي"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معرفي"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اسمي"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بوت"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"أسمي ستورم 🌚🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😔"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"ليش الحلو ضايج ❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😳"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"ها بس لا شفت خالتك الشكره 😳😹🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😭"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"لتبجي حياتي 😭😭",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😡"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"ابرد  🚒",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😍"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"يَمـه̷̐ إآلُحــ❤ــب يَمـه̷̐ ❤️😍",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😉"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"😻🙈",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😋"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"طبب لسانك جوه عيب 😌",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "☹️"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"لضوج حبيبي 😢❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هلو"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"هلووات 😊🌹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مح"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"محات حياتي🙈❤",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تف"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"عيب ابني/بتي اتفل/ي اكبر منها شوية 😌😹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تخليني"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"اخليك بزاويه 380 درجه وانته تعرف الباقي 🐸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اكرهك"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"ديله شلون اطيق خلقتك اني😾🖖🏿🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "باي"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"بايات حياتي 😍 $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحف"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"زاحف عله خالتك الشكره 🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "واو"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"قميل 🌝🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو ماكو"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"غيرك/ج بل كلب ماكو يبعد كلبي😍❤️️",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"كلشي وكلاشي🐸تگـول عبالك احنـة بالشورجـة🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معزوفه"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"طرطاا طرطاا طرطاا 😂👌",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحفه"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"لو زاحفتلك جان ماكلت زاحفه 🌝🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حفلش"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"افلش راسك 🤓",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ضوجه"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"شي اكيد الكبل ماكو 😂 لو بعدك/ج مازاحف/ة 🙊😋",
'reply_to_message_id'=>$message->message_id, 
]);
}
$message_id = $update->message->message_id;
if($text == " مجهول"){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>" @xi_82  يسخر من الجروح كل من لا يعرف الألم ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == 'ستورم'){
$rand = array('سويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب 😑','نعم حبي 😎','اشتعلو اهل ستورم شتريد 😠','لك فداك ستورم حبيبي انت اموووح 💋','بووووووووو 👻 ها ها فزيت شفتك شفتك لا تحلف 😂','هياتني اجيت 🌚❤️','راجع المكتب حبيبي عبالك ستورم سهل تحجي ويا 😒','باقي ويتمدد 😎','لك دبدل ملابسي اطلع برااااا 😵😡 ناس متستحي','دا اشرب جاي تعال غير وكت 😌','هوه غير يسكت عاد ها شتريد 😷','انت مو اجيت البارحه تغلط عليه ✋🏿😒');
$ra = array_rand($rand ,1);
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}

if($re and $re_id != $bot and $re_id != $sudo and $text=="تقييد"){
    bot('xi_82',[
      'chat_id'=>$chat_id,
      'text'=>"🔱¦ العضو » @$re_user
♨️ ¦الايدي » ( $re_id )
💢¦ تم تقييده ✔️
",
  'reply_to_message_id'=>$mid
      ]);
    bot('restrictChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$re_id
      ]);
  }

mkdir(id/$chat_id);
if($text == "فتح الايدي"){
file_put_contents("id/$chat_id/id.txt", "$id");
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
💥¦ تم تفعيل الايدي بنجاح
💥¦ بواسطة $name
💥¦ ايديه <$chat_id>
",
    'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "قفل الايدي"){
unlink("id/$chat_id/id.txt");
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
💥¦ تم تعطيل الايدي بنجاح
💥¦ بواسطة $name
💥¦ ايديه <$chat_id>
",
'reply_to_message_id'=>$message->message_id,
]);
}
if (preg_match('/(حظر عام)(.*)/', $text) and $from_id == $sudo) {
  $text = str_replace('حظر عام', '', $text);
  $bans[] = trim($text,'@');
  file_put_contents('bans.json', $text);
  bot('xi_82',[
    'chat_id'=>$chat_id,
    'text'=>'~> '.$text."\n - تم حظره عام ،",
    'reply_to_message_id'=>$message->message_id
  ]);
}
if ($message and in_array($message->from->username, $bans) or in_array($message->from->id, $bans)) {
  bot('kickchatmember',[
    'chat_id'=>$chat_id,
    'user_id'=>$message->from->id
  ]);
}


$id = $message->from->id;
$P_PPPP2 = $update->message->reply_to_message->from->id;
$P_PPPP3 = $update->message->reply_to_message->from->username;
if($text =="رفع ادمن" and $id == $sudo){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$P_PPPP2,
'can_delete_messages'=>true,
'can_invite_users'=>true,
'can_restrict_members'=>true,
'can_pin_messages'=>true,
]);
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
🚦¦العضو » @$P_PPPP3
⚜️¦ الايدي » ( $P_PPPP2 )
🔘¦ تم رفعه ادمن بالمجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}elseif($text =="رفع ادمن" and $id != $sudo){
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=> "
🌀¦ انت لست مدير او منشئ 
🔘¦ لايمكن اتمام الامر
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد" and $id == $sudo){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$P_PPPP2,
'can_send_messages'=>true,
]);
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
🚦¦العضو » @$P_PPPP3
⚜️¦ الايدي » ( $P_PPPP2 )
🔘¦ تم الغاء تقيده من المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}elseif($text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد" and $id != $sudo){
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
🌀¦ انت لست مدير او منشئ او ادمن
🔘¦ لايمكن اتمام الامر
",
'reply_to_message_id'=>$message->message_id,
]);
}
if( $text=="تقيد" || $text == "تقييد" and $id == $sudo){
    bot('xi_82',[
      'chat_id'=>$chat_id,
      'text'=>"
🚦⎮اسمك » @$P_PPPP3
⚜️¦ الايدي » ( $P_PPPP2 )
🔘¦ تم تقيده من المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
      ]);
    bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$P_PPPP2
      ]);
  }elseif( $text=="تقيد" || $text == "تقييد" and $id != $sudo){
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
🌀¦ انت لست مدير او منشئ او ادمن
🔘¦ لايمكن اتمام الامر
",
'reply_to_message_id'=>$message->message_id,
]);
}
  

      //////////////////////////////////////////////////////// الاعاااااااب/////////////////
	  if(preg_match('/^(زخرف) (.*)/s', $text, $mtch)){
		$mh = file_get_contents('http://www.api-hany.cf/zgrfa/get.php?text=' . urlencode($mtch[2]));
		bot('xi_82',['chat_id'=>$chat_id,'text'=>"$mh\n تم زخرفه : $mtch[2] يمكنك الضغط ع الاسم ليتم نسخه",
		'parse_mode'=>'MarkDown','reply_to_message_id'=>$msg,
		]);
		}
		$mid = $message->message_id;
		
       ///////////////////// store ///////////////

   
   if($text=="🗂¦ الملفات" and $id == $sudo){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"🗂¦ مرحبا بكم في متجر الملفات »  
ـ----------------------------
🔘| جميع الملفات متاحه الان .

1- zhrf.php » {✖️}
:- ملف الزغرفه
l- [تفاصيل اكثر](https://t.me/MitQx1)
------------------------------
2- iranblok.php » {✖️}
:- ملف قفل الفارسيه
l- [تفاصيل اكثر](https://t.me/MitQx1)
------------------------------

* علامه الـ✓ تعني الملف مفعل
* وعلامه الـ✖️ تعني الملف غير مفعل
 ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id, 
"parse_mode"=>"MitQx1",
'message_id'=>$message->message_id,
'reply_to_message_id'=>$message->message_id, 
]);
}
 if($text == "تفعيل ملف zhrf.php" and $id == $sudo ){
bot('xi_82',[
'chat_id'=>$chat_id, 
'text'=>"🗂¦ مرحبا عزيزي المطور الاساسي ⭐️  
ـ------------------------
🔘| تم تفعيل ملف الزغرفه .
🔘| الزغرفه بلانكليزيه فقط EN + NAME
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
🔘┇كمثال .... 
 
☑️┇EN marks
----------------------
🗂┇ zhrf.php » {✓}
----------------------
  ",
  "parse_mode"=>"MitQx1",
'message_id'=>$message->message_id,
'reply_to_message_id'=>$message->message_id, 
]);
}
           

if($text == "تفعيل ملف zhrf.php" and $id == $sudo ){
  bot('xi_82',[
  'chat_id'=>$chat_id, 
  'text'=>"
⭐️¦ مرحبا عزيزي المطور الاساسي 
🗂┇جميع الملفات : 
 
  ---------------------- 
 ✔️┇الملفات المفعله 
   zhrf.php 

   
    ",
  'reply_to_message_id'=>$message->message_id, 
  ]);
  }
if($text == "اطردني" and $you == "member"){
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
🚷┇ ارسل ؛ نعم ، ليتم طردك
🔘┇ارسل ؛ لا ، لالغاء الامر",
'parse_mode'=>'MitQx1'
]);
}
elseif($text == "نعم" and $you == "member"){
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"🚷┇ تم طردك من المجموعة سارسل لك الرابط في الخاص اذا غيرت رأيك ",
'reply_to_message_id'=>$MitQx1
]);
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
}

if (preg_match('/(فحص الاعضاء)(.*)/', $text) and $message->from->id == $sudo) { 
  $get = json_decode(file_get_contents('data.json'),true); 
  $bye_keko = $get; 
  $text = str_replace('فحص الاعضاء', '', $text); 
  if (isset($get['groups'])) { 
    $bye_keko = $get['groups']; 
  } 
  foreach ($bye_keko as $key => $value) { 
    $hello_keko = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMemberscount?chat_id=$key"))->result; 
    if ($hello_keko < $text) { 
      bot('leaveChat',[ 
        'chat_id'=>$key, 
      ]); 
      bot('xi_82',[ 
        'chat_id'=>$sudo, 
        'text'=>"id => $key \n members => $hello_keko \n bot leave Chat" 
      ]); 
    } 
  } 
}


function sendmessage($chat_id, $text){
 bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>"MitQx1"
 ]);
 }
function save($filename, $data)
{
    $file = fopen($filename, 'w');
    fwrite($file, $data);
    fclose($file);
}



$update = json_decode(file_get_contents('php://PT2PP'));
$message = $update->message; 
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;
$from_id = $message->from->id;
$firstname = $message->from->first_name;
$lastname = $message->from->last_name;
$username = $message->from->username;
$textmessage = $message->text;
$step = file_get_contents("data/ko/step.txt");
$btn = file_get_contents("data/ko/btnlist.txt");
$dex = file_get_contents("data/ko/dex.txt");


if ($textmessage == 'اضف رد') {
    save("data/ko/step.txt","set txtbt");
  var_dump(bot('xi_82',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"رسل الكلمه التي تريد اضافتها",
         'reply_to_message_id'=>$message->message_id, 

      ]));
 }
 
 
 if ($step == 'set txtbt') {
  save("data/ko/step.txt","set txtans");
  var_dump(bot('xi_82',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"📥┇الان ارسل الرد الذي تريد اضافته",
      ]));
   save("data/ko/$textmessaage.txt","");
   save("data/ko/last_btn.txt",$textmessage);
 }
 if ($step == 'set txtans') {
  save("data/ko/step.txt","none");
  
  $last = file_get_contents("data/ko/last_btn.txt");
   $myfile2 = fopen("data/ko/btnlist.txt", "a") or die("Unable to open file!"); 
   fwrite($myfile2, "$last\n");
   fclose($myfile2);
   save("data/ko/$last.txt","$textmessage");
  
  var_dump(bot('xi_82',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"☑┇تم حفظ الرد",
         'reply_to_message_id'=>$message->message_id, 

      ]));
 }

 if (file_exists("data/ko/$textmessage.txt")) {
  Sendmessage($chat_id,file_get_contents("data/ko/$textmessage.txt"));
}


if($text == 'تفعيل ملف iranblok.php'){
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>'💥¦ اهــلا عـزيـزي المطور الاساسي 
📮¦ تـم قفل  ✓ الفارسيه
🇮🇷¦ سيتم حظر كل عضو ايراني'
]);
}


if ($text == "📎⎮تحديث السورس" and $id == $sudo ){
 bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'
🔘¦  تم تحديث البوت بنجاح
🗂¦ تم تحديث ملفات البوت
☑️¦ تم التسريع والتخلص من الشحطات',
         'reply_to_message_id'=>$message->message_id, 

 ]);
 }
}}}
$from_id     = $message->from->id;
$from_user = $message->from->username;
$first_name = $message->from->first_name;
$get             = file_get_contents("https://api.telegram.org/bot$MitQx1/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$P_PPPP4        = $info['result']['status'];
$mid             = $message->message_id;
mkdir("devil");
mkdir("devil/$chat_id");
$get_devil     = file_get_contents("devil/$chat_id/devil.txt");
$devil             = explode("\n",$get_devil);
$get             = file_get_contents("https://api.telegram.org/bot$MitQx1/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$P_PPPP4        = $info['result']['status'];
mkdir("PT2PP");
mkdir("PT2PP/$chat_id");
$get_PT2PP = file_get_contents("PT2PP/$chat_id/PT2PP.txt");
$od_1J = explode("\n",$get_od_1J);
if($text == "فتح الدردشه" and in_array($chat_id,$devil) and $P_PPPP4 == "administrator" || $P_PPPP4 == "creator" || $from_id == $sudo){
file_put_contents("devil/$chat_id/devil.txt"," ");
bot("xi_82",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ »  تم فتح الدردشةه بواسطةه ‹ $first_name * ›
*📎¦ معرفه » *@$user 
*🕎¦ » سيتم الان السماح لـ الجميع ، بالتحدث !*",
'parse_mode'=>"MitQx1",
'reply_to_message_id'=>$mid,
]);
}
if($text == "فتح الدردشه" and !in_array($chat_id,$devil) and $P_PPPP4 == "administrator" || $P_PPPP4 == "creator" || $from_id == $sudo){
bot("xi_82",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ » مالذي تحاول فعله ،  
🕎¦  » تم فتح الدردشه قبل قليل !*",
'parse_mode'=>"MitQx1",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "فتح الدردشه" and  $P_PPPP4 == "member"){
bot("xi_82",[
'chat_id'=>$chat_id,
'text' =>"*🇱🇦¦ انت ، ليس لديك صلاحيات قفل او فتح الدردشةه ،💗ء*",
'parse_mode'=>"MitQx1",
'reply_to_message_id'=>$mid,
]);
}
if($text == "قفل الدردشه" and !in_array($chat_id,$devil) and  $P_PPPP4 == "administrator" || $P_PPPP4 == "creator" || $from_id == $sudo){
file_put_contents("devil/$chat_id/devil.txt",$chat_id);
bot("xi_82",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم قفل الدردشةه بواسطةه »$first_name *
*📎¦ معرفه » *@$user 
*🕎¦ » سيتم الان السماح لـ المطور  و لـلمنشئ و المشرفين ، بالتحدث فقط !*",
'parse_mode'=>"MitQx1",
'reply_to_message_id'=>$mid,
]);
}
if($text == "قفل الدردشه" and in_array($chat_id,$devil) and  $P_PPPP4 == "administrator" || $P_PPPP4 == "creator" || $from_id == $sudo){
bot("xi_82",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ » مالذي تحاول فعله ،  
🕎¦  » تم قفل الدردشه قبل قليل !*",
'reply_to_message_id'=>$mid,
'parse_mode'=>"MitQx1",
]);
}elseif($text == "قفل الدردشه" and  $P_PPPP4 == "member"){
bot("xi_82",[
'chat_id'=>$chat_id,
'text' =>"*🇱🇦¦ انت ، ليس لديك صلاحيات قفل او فتح الدردشةه ،💗ء*",
'parse_mode'=>"MitQx1",
'reply_to_message_id'=>$mid,
]);
}
if($text || $message->sticker || $message->video_note || $message->game || $message->location || $message->video || $message->photo || $message->voice || $message->document || $message->forward and in_array($chat_id,$od_1J) and $from_id != $sudo and $P_PPPP4 != "creator" and $P_PPPP4 != "administrator"){
bot("deletemessage",[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
}
if($text == "فتح الكل" and in_array($chat_id,$od_1J) and  $P_PPPP4 == "administrator" || $P_PPPP4 == "creator" || $from_id == $sudo){
file_put_contents("MitQx1/$chat_id/od_1J.txt"," ");
bot("xi_82",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم فتح اوامر المجموعه بواسطةه »$first_name *
*📎¦ معرفه » *@$user 
*🕎¦ » سيتم الان السماح بـجميع الميديا !*",
'parse_mode'=>"MitQx1",
'reply_to_message_id'=>$mid,
]);
}
if($text == "فتح الكل" and  $P_PPPP4 == "administrator" || $P_PPPP4 == "creator" || $from_id == $sudo){
bot("xi_82",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ » مالذي تحاول فعله ،  
🕎¦  » تم فتح الاوامر بالفعل !*",
'parse_mode'=>"MitQx1",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "فتح الكل" and  $P_PPPP4 == "member"){
bot("xi_82",[
'chat_id'=>$chat_id,
'text' =>"*🇱🇦¦ انت ، ليس لديك صلاحيات قفل او فتح الاوامر ،💗ء*",
'parse_mode'=>"MitQx1",
'reply_to_message_id'=>$mid,
]);
}


if($text == "قفل الكل" and  $P_PPPP4 == "administrator" || $P_PPPP4 == "creator" || $from_id == $sudo){
file_put_contents("MitQx1/$chat_id/od_1J.txt",$chat_id);
bot("xi_82",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم قفل اوامر المجموعه بواسطةه »$first_name *
*📎¦ معرفه » *@$user 
*🕎¦ » سيتم الان السماح بالمحادثه فقط !*",
'parse_mode'=>"MitQx1",
'reply_to_message_id'=>$mid,
]);
}
if($text == "قفل الكل" and in_array($chat_id,$MitQx1) and  $P_PPPP4 == "administrator" || $P_PPPP4 == "creator" || $from_id == $sudo){
bot("xi_82",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ » مالذي تحاول فعله ،  
🕎¦  » تم قفل الاوامر بالفعل !*",
'parse_mode'=>"MitQx1",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "قفل الكل" and  $P_PPPP4 == "member"){
bot("xi_82",[
'chat_id'=>$chat_id,
'text' =>"*🇱🇦¦ انت ، ليس لديك صلاحيات قفل او فتح الاوامر ،💗ء*",
'parse_mode'=>"MitQx1",
'reply_to_message_id'=>$mid,
]);
}

if($message->sticker || $message->video_note || $message->game || $message->location || $message->video || $message->photo || $message->voice || $message->document || $message->forward and in_array($chat_id,$od_1J) and $from_id != $sudo and $P_PPPP4 != "creator" and $P_PPPP4 != "administrator"){
bot("deletemessage",[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
}
$id = $message->from->id;
$P_PPPP2 = $update->message->reply_to_message->from->id;
$P_PPPP3 = $update->message->reply_to_message->from->username;
if($text =="رفع ادمن" and $id == $sudo){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$P_PPPP2,
'can_delete_messages'=>true,
'can_invite_users'=>true,
'can_restrict_members'=>true,
'can_pin_messages'=>true,
]);
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
⚜️¦ العضو » @$P_PPPP3
▪️¦ الايدي » ( $P_PPPP2 )
🕎¦ تم رفعه ادمن بالمجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}elseif($text =="رفع ادمن" and $id != $sudo){
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=> "
عذرآ صديقي  لكن ، 
- ليس لديك صلاحيات رفع ادمن ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text =="تنزيل ادمن" and $id == $sudo){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$P_PPPP2,
'can_delete_messages'=>false,
'can_invite_users'=>false,
'can_restrict_members'=>false,
'can_pin_messages'=>false,
]);
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
⚜️¦ العضو » @$P_PPPP3
▪️¦ الايدي » ( $P_PPPP2 )
🕎¦ تم تنزيله من ادمنيه المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد" and $id == $sudo){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$P_PPPP2,
'can_send_messages'=>true,
]);
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
⚜️¦ العضو » @$P_PPPP3
▪️¦ الايدي » ( $P_PPPP2 )
🕎¦ تم الغاء تقيده من المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}elseif($text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد" and $id != $sudo){
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
دود مالذي تفعلهہ ؟ 
- انت لست ادمن هنا ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}
if( $text=="تقيد" || $text == "تقييد" and $id == $sudo){
    bot('xi_82',[
      'chat_id'=>$chat_id,
      'text'=>"
⚜️¦ العضو » @$P_PPPP3
▪️¦ الايدي » ( $P_PPPP2 )
🕎¦ تم تقيده من المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
      ]);
    bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$P_PPPP2
      ]);
  }elseif( $text=="تقيد" || $text == "تقييد" and $id != $sudo){
bot('xi_82',[
'chat_id'=>$chat_id,
'text'=>"
دود مالذي تفعلهہ ؟ 
- انت لست ادمن هنا ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}