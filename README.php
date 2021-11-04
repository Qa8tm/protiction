<?php 


ob_start();
$API_KEY = '2055379191:AAFrow317mR-mOJ9XZTzAwW1eAbPra2AnCQ'; //add your bot token
$bot_ = "Mxiotxsxbot"; // add your bot username 
$sudo = 736595861; // add your id 
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
 function sendmessage($chat_id, $text, $model){
 bot('xi_82',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>$mode
 ]);
 }
 function sendphoto($chat_id, $photo, $captionl){
 bot('xi_82',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendsticker($chat_id, $photo, $captionl){
 bot('xi_82',[
 'chat_id'=>$chat_id,
 'sticker'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendaudio($chat_id, $audio, $caption){
 bot('PT2PP',[
 'chat_id'=>$chat_id,
 'audio'=>$audio,
 'caption'=>$caption,
 ]);
 }
 function sendvoice($chat_id, $voice, $caption){
 bot('MitQx1',[
 'chat_id'=>$chat_id,
 'voice'=>$voice,
 'caption'=>$caption,
 ]);
 }

 function sendaction($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
 ]);
 }
	
	function save($filename,$TXTdata)
	{
	$myfile = fopen("data/".$filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
 //====================the file by mounir======================//

$update = json_decode(file_get_contents('php://MitQx1'));
var_dump($update);
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$textid = $message->text->id;
$text = $message->text;
$textmessage = isset($update->message->text)?$update->message->text:'';
$myphoto = $update->message->file_size;
$edit = $update->edited_message;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
  
$new_gp_name = $update->message->new_chat_title;
$new_gp_photo = $update->message->new_chat_photo;
$del_gp_photo = $update->message->delete_chat_photo;
$new_member = $update->message->new_chat_member;
$left = $update->message->left_chat_member;
$contact = $update->message->contact;
$audio = $update->message->audio;
$location = $update->message->location;
$memb = $update->message->message_id;
$game = $update->message->game; 
$name = $update->message->from->first_name;
$gp_name = $update->message->chat->title;
$user = $update->message->from->username;
$for = $update->message->from->id;
$sticker = $update->message->sticker;
$video = $update->message->video;
$photo = $update->message->photo;
$voice = $update->message->voice;
$doc = $update->message->document;
$fwd = $update->message->forward_from;
$fwd_id = $update->message->forward_from->id;
$fwd_to = $update->message->forward_to;
$fwd_user = $update->message->forward_from->username;
$fwd_name = $update->message->forward_from->first_name;
$pin = $update->message->pinned_message;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$message_id = $update->message->message_id;
$type = $update->message->chat->type;

$number = str_word_count($text);
$numper = strlen($text);

$cllchatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$cllmsegid = $update->callback_query->message->message_id;
$cllfor = $update->callback_query->from->id;

$gplang1 = file_get_contents("data/$chat_id/lang.txt");
$gplink = file_get_contents("data/$chat_id/gplink.txt");
$getruels = file_get_contents("data/$chat_id/rules.txt");
$getwelcome = file_get_contents("data/$chat_id/welcome.txt");
$photo1 = file_get_contents("data/$chat_id/photo.txt");
$sticker1 = file_get_contents("data/$chat_id/sticker.txt");
$pin1 = file_get_contents("data/$chat_id/pin.txt");
$contact1 = file_get_contents("data/$chat_id/contact.txt");
$doc1 = file_get_contents("data/$chat_id/doc.txt");
$game1 = file_get_contents("data/$chat_id/game.txt");
$fwd1 = file_get_contents("data/$chat_id/fwd.txt");
$voice1 = file_get_contents("data/$chat_id/voice.txt");
$link1 = file_get_contents("data/$chat_id/link.txt");
$audio1 = file_get_contents("data/$chat_id/audio.txt");
$video1 = file_get_contents("data/$chat_id/video.txt");
$text1 = file_get_contents("data/$chat_id/text.txt");
$tag1 = file_get_contents("data/$chat_id/tag.txt");
$edit1 = file_get_contents("data/$chat_id/edit.txt");
$edit123 = file_get_contents("data/$chat_edit_id/edit.txt");
$lang1 = file_get_contents("data/$chat_id/lang.txt");
$location1 = file_get_contents("data/$chat_id/location.txt");
$long_list1 = file_get_contents("data/$chat_id/long_list.txt");
$menglish1 = file_get_contents("data/$chat_id/menglish.txt");
$marabi1 = file_get_contents("data/$chat_id/marabi.txt");
$mpersian1 = file_get_contents("data/$chat_id/mpersian.txt");
$gif1 = file_get_contents("data/$chat_id/gif.txt");
$allmsg = file_get_contents("data/allmsg.txt");
$allmsgpv = file_get_contents("data/allmsgpv.txt");

$gplang12 = file_get_contents("data/$cllchatid/lang.txt");
$photo12 = file_get_contents("data/$cllchatid/photo.txt");
$sticker12 = file_get_contents("data/$cllchatid/sticker.txt");
$pin12 = file_get_contents("data/$cllchatid/pin.txt");
$doc12 = file_get_contents("data/$cllchatid/doc.txt");
$game12 = file_get_contents("data/$cllchatid/game.txt");
$fwd12 = file_get_contents("data/$cllchatid/fwd.txt");
$voice12 = file_get_contents("data/$cllchatid/voice.txt");
$contact12 = file_get_contents("data/$cllchatid/contact.txt");
$location12 = file_get_contents("data/$cllchatid/location.txt");
$long_list12 = file_get_contents("data/$cllchatid/long_list.txt");
$link12 = file_get_contents("data/$cllchatid/link.txt");
$audio12 = file_get_contents("data/$cllchatid/audio.txt");
$video12 = file_get_contents("data/$cllchatid/video.txt");
$text12 = file_get_contents("data/$cllchatid/text.txt");
$tag12 = file_get_contents("data/$cllchatid/tag.txt");
$edit12 = file_get_contents("data/$cllchatid/edit.txt");
$lang12 = file_get_contents("data/$cllchatid/lang.txt");
$menglish12 = file_get_contents("data/$cllchatid/menglish.txt");
$marabi12 = file_get_contents("data/$cllchatid/marabi.txt");
$mpersian12 = file_get_contents("data/$cllchatid/mpersian.txt");
$gif12 = file_get_contents("data/$cllchatid/gif.txt");
$silent = file_get_contents("data/$chat_id/silent.txt");
$super_silent = explode("\n", $silent);

$warn = file_get_contents("data/$chat_id/warn/warn.txt");
$warn_1 = file_get_contents("data/$chat_id/warn/$from_id.txt");
$warn_ = file_get_contents("data/$cllchatid/warn/warn.txt");
$warn_2 = file_get_contents("data/$chat_id/warn/$re_id.txt");
$warn_3 = file_get_contents("data/$chat_id/warn/$re_id.txt");


$get = file_get_contents("https://api.telegram.org/bot$xi_82/MitQx1?PT2PP=$PT2PP&xi_82=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$you_ = $info['result']['user']['id'];

$get_ = file_get_contents("https://api.telegram.org/bot$xi_82/MitQx1?PT2PP=$cllchatid&xi_82=".$cllfor);
$info_ = json_decode($get_, true);
$you_ = $info_['result']['status'];
include "MitQx1.php";
//====================the file by mounir======================//
if($text == '/start'){
$mem = file_get_contents('data/members.txt');
$allmem= explode("\n",$mem);
	if (!in_array($chat_id,$allmem)) {
		$aaddd = file_get_contents('data/members.txt');
		$aaddd .= $chat_id."
";
    	file_put_contents('data/members.txt',$aaddd);
} 
sendaction($chat_id,'typing');
bot('xi_82',[
    'chat_id'=>$chat_id,
    'text'=>"
	<code>
اهلا بك عزيزي 💎في بوت حماية المجموعات الاقوى على التلكرام 😁 لبدء الاسخدام اضغط على الزر الاول 🙂
</code>
▪️بعد اضافة البوت في مجموعتك ارسل الامر /add 😁
", 
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
		['text'=>"🇮🇶العربية🇮🇶",'callback_data'=>"arabi"]
	  ],
	   [
     ['text'=>"اشترك في قناة البوت☑️", 'url'=>"https://t.me/MitQx1"]
     ],
   
     [
['text'=>"مطور البوت👁", 'url'=>"t.me/ @xi_82  736595861"]
     ]
		]
		])
  ]);
}

if($data == 'st'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"🇮🇶 من فضلك اختر اللغة المناسية لك 🇮🇶", 
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
[
		['text'=>"🇮🇶العربية🇮🇶",'callback_data'=>"arabi"]
	  ],
	   [
     ['text'=>"اشترك في قناة البوت☑️", 'url'=>"https://t.me/MitQx1"]
     ],
   
     [
['text'=>"مطور البوت👁", 'url'=>"t.me/ @xi_82  736595861"]
     ]
	 
		]
		])
  ]);
}

if($data == 'arabi'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"بعض الاوامر التي تساعدك 💡
اختر ماتريده 👁‍🗨",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
     ['text'=>"اضفني الى مجموعتك ♣️", 'url'=>"https://telegram.me/$bot_?startgroup=start"]
     ],
    	 [
     ['text'=>"اشترك في قناة البوت☑️", 'url'=>"https://t.me/MitQx1"]
     ],
   
     [
['text'=>"مطور البوت👁", 'url'=>"t.me/ @xi_82  736595861"]
     ]
    ]    
    ])
    ]);
    }           

if ($text && $type == "supergroup" ){
$newmessg = $allmsg + 1;
file_put_contents("data/allmsg.txt","$newmessg");
}
if ($text && $type == "xi_82" ){
$newmessg = $allmsgpv + 1;
file_put_contents("data/allmsgpv.txt","$newmessg");
}
if( !$fwd && $type == "supergroup" && $menglish1 == "❌" && $you != "creator" && $you != "administrator"  && $you != "creator" && $from_id != $sudo ){
 if(preg_match('/^(.*)(q|w|e|r|t|y|u|i|o|p|a|s|d|f|g|h|j|k|l|z|x|c|v|b|n|m|Q|W|E|R|T|Y|U|I|O|P|A|S|D|F|G|H|J|K|L|Z|X|C|V|B|N|M)(.*)|(.*)(q|w|e|r|t|y|u|i|o|p|a|s|d|f|g|h|j|k|l|z|x|c|v|b|n|m|Q|W|E|R|T|Y|U|I|O|P|A|S|D|F|G|H|J|K|L|Z|X|C|V|B|N|M)|(q|w|e|r|t|y|u|i|o|p|a|s|d|f|g|h|j|k|l|z|x|c|v|b|n|m|Q|W|E|R|T|Y|U|I|O|P|A|S|D|F|G|H|J|K|L|Z|X|C|V|B|N|M)(.*)/',$text) ){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
if( !$fwd && $type == "supergroup" && $marabi1 == "❌"&& $you != "administrator" && $you != "creator" && $from_id != $sudo ){
 if(preg_match('/^(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)|(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)|(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)/',$text) ){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
if( !$fwd && $type == "supergroup" && $mpersian1== "❌" && $you != "administrator" && $you != "creator" && $from_id != $sudo ){
 if(preg_match('/^(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)|(.*)(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)|(ض|ص|ث|ق|ف|غ|ع|ه|خ|ح|ج|چ|پ|ش|س|ی|ب|ل|ا|ت|ن|مپک|گ|ظ|ط|ز|ژ|ر|ذ|د|ئ|ئ|و|)(.*)/',$text) ){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }

 if($photo  && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $photo1 == "❌"){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
elseif($update->edited_message && $you != "creator" && $you != "administrator" && $from_id != $sudo){
if($edit123 == "❌"){
bot('PT2PP',[
'chat_id'=>$chat_edit_id,
'message_id'=>$message_edit_id
]);
} }

 if($number > 1000 or $numper > 1000 && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $long_list1 == "❌"){
 bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}


if($voice   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $voice1 == "❌"){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($audio   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $audio1 == "❌"){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($video   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $video1 == "❌"){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
 if( !$fwd && $type == "supergroup" && $link1 == "❌" && $you != "creator" && $you != "administrator" && $from_id != $sudo ){
 if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
 if( !$fwd && $type == "supergroup" && $tag1 == "❌" && $you != "creator" && $you != "administrator" && $from_id != $sudo ){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)  ){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
if($doc   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $doc1 == "❌"){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}

if($doc   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $gif1 == "❌"){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}

if($game   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $game1 == "❌"){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($text && $you != "creator" && $you != "administrator" && $from_id != $sudo && $from_id != $sudo && in_array($from_id, $super_silent)){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($sticker   && $you != "creator" && $you != "administrator" && $from_id != $sudo && !$fwd && $type == "supergroup" && $sticker1 == "❌"){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
elseif($update->message->forward_from && $you != "creator" && $you != "administrator" && $from_id != $sudo ){
if( $fwd1 == "❌"){
	bot('PT2PP',[
 'chat_id'=>$chat_id,
'message_id'=>$message->message_id
   ]);
	}
	}
if($text   && $you != "creator" && $you != "administrator" && $from_id != $sudo && $type == "supergroup" && $text1 == "❌"){
bot('PT2PP',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($you == "creator" or $you == "administrator") {
if($re  &&  $text == "/del" ){
bot('PT2PP',[
'chat_id'=>$re_chatid,
'message_id'=>$re_msgid
]);
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo && $type == "supergroup" ) {
if( $text == "تفعيل" or  $text == "/add" or  $text == "فعال"){
$txxt = file_get_contents('data/allgp.txt');
$pmembersid= explode("\n",$txxt);
	if (!in_array($chat_id,$pmembersid)) {
		$aaddd = file_get_contents('data/allgp.txt');
		$aaddd .= $chat_id."
";
    	file_put_contents('data/allgp.txt',$aaddd);
} 
    mkdir("data");
    mkdir("data/$chat_id");
    file_put_contents("data/$chat_id/game.txt","❌");
    file_put_contents("data/$chat_id/lang.txt","arabi");
    file_put_contents("data/$chat_id/tag.txt","❌");
    file_put_contents("data/$chat_id/photo.txt","❌");
    file_put_contents("data/$chat_id/fwd.txt","❌");
    file_put_contents("data/$chat_id/sticker.txt","❌");
    file_put_contents("data/$chat_id/pin.txt","❌");
    file_put_contents("data/$chat_id/doc.txt","❌");
    file_put_contents("data/$chat_id/link.txt","❌");
    file_put_contents("data/$chat_id/video.txt","❌");
    file_put_contents("data/$chat_id/audio.txt","❌");
    file_put_contents("data/$chat_id/voice.txt","❌");
    file_put_contents("data/$chat_id/edit.txt","✅");
    file_put_contents("data/$chat_id/contact.txt","✅");
    file_put_contents("data/$chat_id/location.txt","✅");
    file_put_contents("data/$chat_id/menglish.txt","✅");
    file_put_contents("data/$chat_id/long_list.txt","✅");
    file_put_contents("data/$chat_id/marabi.txt","✅");
    file_put_contents("data/$chat_id/mpersian.txt","✅");
    file_put_contents("data/$chat_id/gif.txt","✅");
    file_put_contents("data/$chat_id/text.txt","✅");
    file_put_contents("data/$chat_id/silent.txt","11");
    file_put_contents("data/$chat_id/rules.txt", "‼️ لا توجد قوانين هنا 🤦‍♂ من فضلك اكتب /setrules لوضع قوانين 🅿️!");
    bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"احسنت 👍 تم تفعيل البوت قي مجموعتك👥\nاضغط على الزر الاول للبدء😁",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'Markdown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
    [
 		['text'=>"🇮🇶العربية🇮🇶",'callback_data'=>"gparabi"],		
	  ],
	   [
     ['text'=>"اشترك في قناة البوت☑️", 'url'=>"https://t.me/MitQx1"]
     ],
   
     [
['text'=>"مطور البوت👁", 'url'=>"t.me/ @xi_82  736595861"]
     ]

   ]
   ])
   ]);
   }    
   } 
?>
