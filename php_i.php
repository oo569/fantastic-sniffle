<?php 
# من تنشر لا تغير حقوق عزيزي 
#قدر تعب غيرك لتعدل وكلت صار الي 
#
ob_start();
$API_KEY = '"605245411":AAFz14jJl0K1yTfYt0HfFZFp98dZk2qV61E'; //add your bot token
$sudo = "1416859590"; // add your id
$bot_id = "1586676802"; 
$e = "@oo_569";
define('API_KEY',$API_KEY);
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
#     dev:- @dev_i or @dev_a or @ailnoor  #    CH:- @php_i         #
$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message    = $update->message;
$from_id    = $message->from->id;
$text       = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$chat_id    = $message->chat->id;
$new        = $message->new_chat_member;
$left       = $update->message->left_chat_member;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb       = $update->message->message_id;
$game       = $update->message->game; 
$name       = $update->message->from->first_name;
$gp_name    = $update->message->chat->title;
$user       = $update->message->from->username;
$for        = $update->message->from->id;
$sticker    = $update->message->sticker;
$bsma       = $update->message->bsma;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$cha       = $update->message->Gif;
$gif     = $update->message->cha;
$bots       = $update->message->bots;
$doc        = $update->message->document;
$fwd        = $update->message->forward_from;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$mid        = $message->message_id;
$dev_i      = "php_i";
$number     = str_word_count($text);
$numper     = strlen($text);
$set        = file_get_contents("data/$chat_id.txt");
#     dev:- @dev_i or @dev_a or @ailnoor  #    CH:- @php_i         #
$ex         = explode("\n", $set);
$photo1     = $ex[0];
$sticker1   = $ex[1];
$contact1   = $ex[2];
$doc1       = $ex[3];
$fwd1       = $ex[4];
$bsma1      = $ex[5];
$link1      = $ex[6];
$audio1     = $ex[7];
$voice1     = $ex[8];
$tag1       = $ex[9];
$mark1      = $ex[10];
$bots1      = $ex[11];
$cha        = $ex[12];
$gif1        = $ex[13];
$group = $info['result']['status'];
$admin = "administrator";
$mudir = "creator";
#     dev:- @dev_i or @dev_a or @ailnoor  #    CH:- @php_i         #
$info_ = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$edit_chat_id&user_id=".$edit_from_id), true);
$admin = "administrator";
$mudir = "creator";
$group_ = $info_['result']['status'];
$bot = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=605245411");
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
if(in_array($text, $commands) and $bot != "administrator"){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"ارفعني ادمن اول شي 😒🤚🏿",
  'reply_to_message_id'=>$mid
    ]);
}
#     #
$get = file_get_contents("".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
$admin = 612393384; // your id ;

if($text == "/start"){$from_id = $message->from->id;
$ch = "@oo_569";
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
عذراََ !⚠️
يجب الاشتراك في قناة البوت .📡 اولاََ 
لـ استخدام البوت 💯
",

[['text'=>"اضغط هنا لـلأشتراك 📮",    
]    }
bot('sendMessage',[
'chat_id'=>$chat_id, 
    'text'=>"≈ اهلآ وسهلآ بڪ في بوت الحماية👨🏻‍💻

≈ البــﯚت يعــمل بــ لغــة🌀 En / Ar 🌀

≈ قــ۾ بإضافــة الــبوت مشرف في مجموعتڪ🔖

≈ واسل امر /add او تفعيل ⏯

≈ تــ۾ تــطوير هذٱ البــوت من قبــل🗯

≈ 『مــطــﯢر ﺄلبوت』 @oo_569 👨🏻‍🔧",'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>"• اضغط هنا لإضافتي إلى مجموعتك •",'url'=>"telegram.me/i9ii_bot?startgroup=new"]],
        [['text'=>"💡اضـغـط هـنا من فضـلڪ💡",}
            
if ($new and $new->id == $bot_id) { bot('sendMessage',[ 'chat_id'=>$chat_id,'text'=>"ــم بــرفــعــي مشــرف أولآ⚠️
وارســل ڪلمــة تفــعيل اﯛ  ⏸",]);}
#     dev:- @dev_i or @dev_a or @ailnoor  #    CH:- @php_i         #
if ($type == "supergroup" and in_array($chat_id, $groups)){
   if($you != "creator" && $you != "administrator" && $from_id != $sudo){
    if($photo && $photo1 == "l"){ bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}
    if($bsma and $bsma1 == "l"){ bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id ]); } 
    if($audio && $audio1 == "l"){ bot('deleteMessage',[ 'chat_id'=>$chat_id,'message_id'=>$message->message_id ]);}
    if($video && $video1 == "l"){bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id
      ]);}
    if($link1 == "l" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){ bot('deleteMessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message->message_id ]);} 
    if($tag1 == "l" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){ bot('deleteMessage',[ 'chat_id'=>$chat_id,'message_id'=>$message->message_id ]); }
    if($doc and $doc1 == "l"){ bot('deleteMessage',['chat_id'=>$chat_id, 'message_id'=>$message->message_id  ]);}
    if($sticker and $sticker1 == "l"){ bot('deleteMessage',['chat_id'=>$chat_id, 'message_id'=>$message->message_id]);}
    
    
    if($update->message->forward_from && $fwd1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($message->entities and $mark1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
   
      
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
$id_bot = 605245411;
if($New_member and $bots1 == "l"){
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and $id != $id_bot){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ آلعضـو : @$user
👤¦ الايدي : $id 
🚫¦ مـمـنوع آضـآفهہ آلبوتآت 
📛¦ تم طـرد آلبوت 
✘",
]);
}}}
if($edit && is_dir("mute")){
bot('deletemessage',[
'chat_id'=>$chat_edit_id,
'message_id'=>$message_edit_id,
]);
}
if($message and $cha =="1"and $you =="member"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
#     dev:- @dev_i or @dev_a or @ailnoor  #    CH:- @php_i         #
if($bot == "administrator"){
if($you == "creator" or $you == "administrator") {
$re_user    = $update->message->reply_to_message->from->username;
  if($re  &&  $text == "مسح"){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
    ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="ديي" or $text == "دفره" or $text == "طرده" or $text=="طرد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"• تـٰمہ طـﮧ̯͡ـٰرد الـﮧ̯͡ـعـُِضـٖۧوٰ ،🙎🏻‍♂️)'

• مَ ٰـٰۛــعرفـ๋͜‏ـۿہ🌀 :-
 @$re_user",
  'reply_to_message_id'=>$mid
      ]);
    bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="حضره" or $text == "بلوك" or $text == "/ban" or $text=="حضر"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"• تـٰمہ حـﮧ̯͡ـظـٰر الـﮧ̯͡ـعـُِضـٖۧوٰ ،🙎🏻‍♂️)'

•م̷َـٰۛــعرفـ๋͜‏ـۿہ🌀:-  @$re_user",
  'reply_to_message_id'=>$mid
      ]);
    bot('banChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "الغاء جضر"or $text == "الغاء الحضر"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"• تـٰمہ الـﮧ̯͡ـغـٰاء حـﮧ̯͡ـظـٰر الـﮧ̯͡ـعـُِضـٖۧوٰ ،🙎🏻‍♂️)'

•م̷َـٰۛــعرفـ๋͜‏ـۿہ🌀:- @$re_user",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
    }
    #     dev:- @dev_i or @dev_a or @ailnoor  #    CH:- @oo_569         #
  if($text == "/promote" or $text == "رفع ادمن"){
      bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"● -  مــعرفه👈🏻 : - @$re_user

● - تــم رفــعه ادمــن 🤴🏻 بنــجــاح ✓",
  'reply_to_message_id'=>$mid
      ]);
      bot('promoteChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$re_id
        ]);
  }
  #     dev:- @dev_i or @dev_a or @ailnoor  #    CH:- @php_i         #
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
   if($re and $text == "/pin" or $text == "تثبيت"){
    bot('pinChatMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
      ]);
   }
      if($re and $text == "/unpin" or $text == "الغاء التثبيت"){
    bot('unpinChatMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid]);}
 ////////////////////////////////////////////////////////////قفل
  if($text == "/lock all" or $text == "قفل الكل"){
    file_put_contents("data/$chat_id.txt", "\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\no\n1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل الـٰـڪـُِـلـٰـُِـہ‏ ، 🎪)",
  'reply_to_message_id'=>$mid,]);}
 
   if($text == "/open all" or $text == "فتح الكل"){
    file_put_contents("data/$chat_id.txt", "\no\no\no\no\no\no\no\no\no\no\no\no\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح الـٰـڪـُِـلـٰـُِـہ‏ ؛🎻⇣‘",
  'reply_to_message_id'=>$mid,]);}
        
   if($text == "/lock photo" or $text == "قفل الصور"){
    file_put_contents("data/$chat_id.txt", "\nl\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ر• تـ໋͟مـہ قـْٰـٖفــູཻـل آلـٰـصــُِـ̯ور ،🃏)",
  'reply_to_message_id'=>$mid,]);}
 
   if($text == "/open photo" or $text == "فتح الصور"){
    file_put_contents("data/$chat_id.txt", "\no\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح آلـٰـصــُِـ̯ور ؛🀄️⇣‘",
  'reply_to_message_id'=>$mid,]);}
 
    if($text == "/lock sticker" or $text == "قفل الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\nl\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰفـູཻـل الـٰـمـُِڶـٰـُِصـُِقــٖۧاتٌ ،🥤)",
  'reply_to_message_id'=>$mid,]);}

       if($text == "/open sticker" or $text == "فتح الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\no\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح الـٰـمـُِـڶـٰـُِصـُِقــٖۧاتـُہ ؛ 🍫⇣‘",
  'reply_to_message_id'=>$mid,]);}

       if($text == "/lock contact" or $text == "قفل الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\nl\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل جـٰـهـُِـات الاتـﹻۧـصــُِـالـٖۧـُہ ، 📵)",
  'reply_to_message_id'=>$mid,]);}
#     dev:- @dev_i or @dev_a  #    CH:- @php_i         #
 if($text == "/open contact" or $text == "فتح الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\no\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح جـٰـهـُِـات الاتـﹻۧـصــُِـالـٖۧـُہ ؛🎸⇣‘",
  'reply_to_message_id'=>$mid,]);}

   if($text == "/lock doc" or $text == "قفل الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\nl\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل الـٰـمـُِـلـٰفـُِــٌِاتـُِـہ‏ ، 🗂)",
  'reply_to_message_id'=>$mid,]);}

  if($text == "/open doc" or $text == "فتح الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\no\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح الـٰـمـُِـلـٰفـُِــٌِاتـُِـہ‏ ؛ 📔⇣‘",
  'reply_to_message_id'=>$mid,]);}

if($text == "/lock fwd" or $text == "قفل التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\nl\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"ي• تـ໋͟مـہ قـْٰـٖفـູཻـل الـٰتـُِـوٰ୬جـٰـُِيــٌِﮬ̲̐هہ‏ ، 📻)",
  'reply_to_message_id'=>$mid,]);}

   if($text == "/open fwd" or $text == "فتح التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\no\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتـູཻـح الـٰتـُِـوٰ୬جـٰـُِيــٌِﮬ̲̐هہ‏ 
؛ 🗃⇣‘",
  'reply_to_message_id'=>$mid,]);}

   if($text == "/lock bsma" or $text == "قفل البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\nl\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل الـٰـبـُِـصـٰـُِمـُِآتـُِـہ ، 🎎)",
  'reply_to_message_id'=>$mid,]);}

     if($text == "/open bsma" or $text == "فتح البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\no\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح الـٰـبـُِـصـٰـُِمـُِآتـُِـہ ؛ 🎼⇣‘",
  'reply_to_message_id'=>$mid,]);}

     if($text == "/lock link" or $text == "قفل الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma\nl\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل آلـٰـرﯛآبــُِـ̯طہ ، 📎 )",
  'reply_to_message_id'=>$mid,]);}
#     dev:- @dev_i or @dev_a  #    CH:- @php_i         #
   if($text == "/open link" or $text == "فتح الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\no\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻح  آلـٰـرﯛآبــُِـ̯طہ ؛ 📌⇣‘",
  'reply_to_message_id'=>$mid,]);}

   if($text == "/lock audio" or $text == "قفل الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\nl\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل آلـٰـصــُِﯛتہ ،🛰 )",
  'reply_to_message_id'=>$mid,]);}

   if($text == "/open audio" or $text == "فتح الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\no\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح آلـٰـصــُِﯛتہ ؛🎙⇣‘",
  'reply_to_message_id'=>$mid,]);}

   if($text == "/lock video" or $text == "قفل الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n1\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل الـٰـفـُِـيـٰـُِديـُِوٰ୬  ، 🚇)",
  'reply_to_message_id'=>$mid,]);}
#     dev:- @dev_i or @dev_a  #    CH:- @php_i         #  
   if($text == "/open video" or $text == "فتح الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\no\n$tag1\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح الـٰـفـُِـيـٰـُِديـُِوٰ୬ ؛ 🎬⇣‘",
  'reply_to_message_id'=>$mid,]);}
  
   if($text == "/lock user" or $text == "قفل المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\nl\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل الـٰـمـُِعـ̯رفـٰـاتـُِہ،💮)",
  'reply_to_message_id'=>$mid,]);}
   if($text == "/open user" or $text == "فتح المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\no\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتـູཻـح  الـٰـمـُِعـ̯ـرفـٰاتـُِہ ؛ 🌀⇣‘",
  'reply_to_message_id'=>$mid, ]);}
    if($text == "/lock user" or $text == "قفل التاك"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\nl\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل الـٰـتـُِـآڪـٰـُِـہ‏  ،🚸 )",
  'reply_to_message_id'=>$mid,]);}
#     dev:- @dev_i or @dev_a  #    CH:- @php_i         #  
   if($text == "/open user" or $text == "فتح التاك"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\no\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح الـٰـتـُِـآڪـُِـہ‏ ؛ 🎞⇣‘",
  'reply_to_message_id'=>$mid,]);}
  
    if($text == "/lock mark" or $text == "قفل الماركداون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\nl\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل المـﹻۧـارڪــُِـداﯛنـٖۧـُہ ؛ 🔖⇣‘",
  'reply_to_message_id'=>$mid,]);}
   if($text == "/open mark" or $text == "فتح الماركداون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\no\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح المـﹻۧـارڪــُِـداﯛنـٖۧـُہ ؛ 🗳⇣‘",
  'reply_to_message_id'=>$mid,]);}
 #     dev:- @dev_i or @dev_a  #    CH:- @php_i         # 
  if($text == "/lock bots" or $text == "قفل البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\nl\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل الـٰـبـُِﯛتـ̯ـاتـٰـُِہ  ،🚡 )",
  'reply_to_message_id'=>$mid,]);}
   if($text == "/open bots" or $text == "فتح البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\no\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح الـٰـبـُِﯛتـ̯ـاتـٰـُِہ ؛ 🚠⇣‘",
  'reply_to_message_id'=>$mid,]);}
  
if($text == "/lock bots" or $text == "قفل الدردشه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ قـْٰـٖفــູཻـل الـٰـدردشـُِــٰـُِﮬ̲̐هہ‏ ،🤹🏻‍♀️)",
  'reply_to_message_id'=>$mid,]);}
   
   if($text == "/open bots" or $text == "فتح الدردشه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots\no\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• تـ໋͟مـہ فـْٰـٖتــູཻـح الـٰـدردشـُِــٰـُِﮬ̲̐هہ‏ ؛ 🤹🏿‍♂️⇣‘️",
  'reply_to_message_id'=>$mid,]);}
  
#     
   #  
  
  if($text == "/lock bots" or $text == "قفل متحرك"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"تم قفل متحرك",
  'reply_to_message_id'=>$mid,]);}
   
   if($text == "/open bots" or $text == "فتح متحرك"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots\n$cha1\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"تم فتح متحرك",
  'reply_to_message_id'=>$mid,]);} 
  
#هذاه الامر كامل بس عدل عليه شويه 
 ////////////////////////////// new
 #             #
   if($text=="/help" or $text=="الاوامر" or $text=="اوامر"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"اهـلا بك 🔘

فـي قائـمه الاوامـر 💠
ֆ • • • • • • • • • • • • • ֆ

اوامر القفل ✖️
لعرض اوامر القفل 📣

اوامر الفتح ✔️
لعرض اوامر الفتح ▪️

اوامر اخـرى 📯
لعرض الاوامر الاخـرى 🗃

الاعـدادات ⚙️
لـعرض اعدادات الـوسائط 🛡

الوقت ⏰
لعرض الوقت بدقه 🚩

ֆ • • • • • • • • • • • • • ֆ
تطوير 🔅 :- @oo_569 📍",]);}
   if($text=="اوامر الفتح" or $text=="م2"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"مرحبـا بك 🔳

في قائـمه الـفتح 💬

استخدم 🥁
فتح = للفتح ✔️
ֆ • • • • • • • • • • • • • ֆ

| الروابط 📌
| المعرفات 🔱
| البوتات 🕹
| الدردشه 🤹🏿‍♀️

| الصور 🌿
| الملصقات ⏱
| الفيديو 📒
| البصمات 🎙

| التوجيه 💎
| الصوت ♦️
| جهات الاتصال 🏷
| الملفات ⚡️
| تاك 🀄️
| الكل🚸

ֆ • • • • • • • • • • • • • ֆ
تطـوير 💡 :- @oo569 📍",]); }

   if($text=="اوامر القفل" or $text=="م1"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"مرحبـا بك 🔳

في قائـمه الـقفل💬

استخدم ♣️
قفل = للقفل ✖️
ֆ • • • • • • • • • • • • • ֆ

| الروابط 📌
| المعرفات 🔱
| البوتات 🕹
| الدردشه 🤹🏿‍♀️

| الصور 🌿
| الملصقات ⏱
| الفيديو 📒
| البصمات 🎙

| التوجيه 💎
| الصوت ♦️
| جهات الاتصال 🏷
| الملفات ⚡️
| تاك 🀄️
| الكل🚸

ֆ • • • • • • • • • • • • • ֆ
تطـوير 💡 :- @oo_569📍",]);}}
#            #

   if($text=="الاوامر الاخرى" or $text=="اوامر اخرى" or $text=="م3"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"اهـلا بـك 💐

فـي قائـمه الاوامـر الاخـرى  ♣️
ֆ • • • • • • • • • • • • • • • • 
ֆ
| رفـع ادمـن 🗼
| لـرفع ادمـن 🗽

| تثبيت + رد 💡
| لتثبيت رسـاله بـ رد

| الغاء التثبيت + رد ⏳
| لـ الغاء تثبيت الرساله

| طرد + رد 🗃
|لطرد العـضو 📈
ֆ • • • • • • • • • • • • • • • • ֆ
| كتم +رد 🏺
| لـ كتم الـعضو بـ رد 🔖

| الغاء الكتم +رد ⚱️
| لـ الغـاء الكـتم عـن العضو 🔖

| صورتـي 🚩
| لـعرض صورتـك 🤚🏿

| معـرفي 🌀
| لـعرض معرفـك ❕
ֆ • • • • • • • • • • • • • • • • ֆ
| ايـدي ♻️
| لـعرض معلـوماتـك 💠

| موقعي ❗️
| لـعـرض موقعك بـلمجموعه 💮

| كـول + كلام 📝
|راح يكوله البوت 📥

|اسمي 📌
| لعرض اسمـك 📃

| للمطور فقط || مسح + عدد 🥁
| لمسح رسـائل مجموعه 🎬
ֆ • • • • • • • • • • • • • • • • ֆ
| حظر  || الغاء الحظر♦️
|لـحضر العضو 🚸

| تقييد || الغاء التقييد ⭕️
| لـتقييد العضو 📎

|مسح + رد 🎯
|لمسح مسج معين 🔨
ֆ • • • • • • • • • • • • • • • • ֆ
|ضـع اسم +الاسم 🎪
|لـتغير اسم المجموعه 🤹🏻‍♀️

| رتبتي 🚣🏻‍♀️
| يدزلك رتبتك ب كـروب  🎳

| ايديه || ايديها + رد 🎗
| لـعرض ايدي الشخص 🎟

| كوله + تكتب كلام + رد 🎖
| راح يكول لـشخص 🥇
ֆ • • • • • • • • • • • • • • • • ֆ
مطور 💡 :- @php_i 📍",]);}}

if($text=="/setting" or $text=="اعدادات" or $text=="الاعدادات"){
  bot('sendMessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
  
☑️┇الأعدادات

🔒┇مقفول ~⪼ l
🔓┇مفتوح ~⪼ o

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉

🖼┇الصور ~⪼ $photo1
🎀┇الملصقات ~⪼ $sticker1

📹┇الفيديو ~⪼ $voice1 
🔗┇الروابط ~⪼ $link1

☎️┇الجهات ~⪼ $contact1
🗂┇الملفات ~⪼ $doc1

↩️┇التوجيه ~⪼ $fwd1
🎙┇البصمات ~⪼ $bsma1

📣┇الصوت ~⪼ $audio1
🌀┇المعرف ~⪼ $tag1

🗯┇الماركدون ~⪼ $mark1
📟┇البوتات ~⪼ $bots1
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉",]);}}
#     dev:-      #
if($bot == "administrator"){
 if ($you == "administrator" or $you == "creator") {
if($text == "/add" or $text == "/add$e" or $text=="تفعيل"){
if(!in_array($chat_id, $groups)){
  file_put_contents("data/$chat_id.txt", "\no\no\no\no\no\no\no\no\no\no\no\no");
  file_put_contents("data/groups.txt", "$chat_id\n",FILE_APPEND);
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"• تـ໋͟مـہ تـٰفـُِـعـﹻۧيــُِلٌ الـﮧ̯͡ــبو୭تہ ؛ ✔️🤹🏿‍♂️⇣‘

• ٱرسـ໋͟لـہ {{ الاﯛامـٰـٖۧـُر }} لـﮧ̯͡ــعـُِـرضـٖۧـُہهـْٓا،  ؛ 🎸⇣‘️",
  'reply_to_message_id'=>$mid,
    ]); }
if (in_array($chat_id, $groups)) {
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>" 🕹❕┇المجموعه { $t } مفعله سابقا",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]); }}}}
if($text == "اذاعة" and $chat_id == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📭¦ حسننا الان ارسل الكليشه للاذاعه للمجموعات 
🔛",
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "اذاعة" and $mode=="bc" and $chat_id == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
if($text == "المجموعات" and $chat_id == $sudo){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ عدد المجموعات المفعلة » $c  ➼"
    ]);
 }
$id = $message->from->id;
if($text == "اسمي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
#              #
if($text == "الاحصائيات" and $chat_id == $sudo){
$c = count($groups);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" الاحصائيات : 📈 

👥¦ عدد المجموعات المفعله : $c 
👤¦ عدد المشتركين في البوت : $m 📡 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
$id   = $message->from->id; 
$user = $message->from->username; 
$name = $message->from->first_name; 
if($text=="موقعي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي :

📜¦ الاسم : $name
🎟¦ المعرف: @$user
🏷¦ الايدي : ( $id )
🎗¦ رتبتك : منشئ المجموعة 🛠
🎫¦ ايدي المجموعه : ( $chat_id )
📨¦ رسائل المجموعة : $message->message_id
🏌🏻¦ مـطـور البوت : @oo_569
👨🏽‍🔧
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="موقعي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي :

📜¦ الاسم : $name
🎟¦ المعرف : @$user
🏷¦ الايدي : ( $id )
🎗¦ رتبتك : ادمن المجموعة 🛠
🎫¦ ايدي المجموعه : ( $chat_id )
📨¦ رسائل المجموعة : $message->message_id
🏌🏻¦ مـطـور البوت : @oo_569
👨🏽‍🔧",
'reply_to_message_id'=>$message->message_id, 
]);
}
#     dev:- @dev_i or @dev_a  #    CH:- @php_i         #
if($text=="موقعي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي :

📜¦ الاسم : $name
🎟¦ المعرف : @$user
🏷¦ الايدي : ( $id )
🎗¦ رتبتك : عضو المجموعة 🛠
🎫¦ ايدي المجموعه : ( $chat_id )
📨¦ رسائل المجموعة : $message->message_id
🏌🏻¦ مـطـور البوت : @oo_569
👨🏽‍🔧",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » المنشىء 🏌🏻🌿
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » ادمن في البوت 🎖🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » فقط عضو 🙍🏼‍♂️🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
#     dev:- @dev_i or @dev_a  #    CH:- @php_i         #
if ($text == "تفعيل" or $text == '/add' and  $you == "administrator") {
$result2 = $json2->result;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
👮🏽¦ قام احد المدراء بتفعيل البوت
👥¦ $t
🎫¦ ايدي المجموعه » $chat_id
⚖️¦ عدد الاعضاء » 【  $result2  】 عضو 🗣
👨🏽‍💻¦ بواسطة » $name
🎟¦ معرفه » @$user
📮
",
]);
}
$rnd = rand(1,999999999999999999);
if($text=="معلوماتي" or $text == "ايدي" or $text == "/id" or $text == "id"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "http://alsaedn.000webhostapp.com/newbot/$rnd.jpg"; // رابط استضافتك
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>"
🌿 ايدي المجموعةه :- $chat_id
📡 معرفك :- @$user
🔗 ايديك :- $id
🔥 اسمك :- $name "
]);
unlink("$rnd.jpg");
}
if($text=="صورتي"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://alsaedn.000webhostapp.com/newbot/$rnd.jpg"; // رابط استضافتك
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>" ",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
if($text == "/link" or $text == "الرابط"){
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"🔖¦رابـط الـمـجـمـوعه 💯
🌿¦$t : 
    $l",
      'disable_web_page_preview'=>true,
      'reply_to_message_id'=>$message->message_id,
      ]);
  }

if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد احذف الحساب" or $text == "رابط الحذف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 🗑┇رابط حذف التلي  ⬇️
‼️┇احذف ولا ترجع عيش حياتك
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
🔎┇ https://telegram.org/deactivate
",
'reply_to_message_id'=>$message->message_id, 
]);
}

 if($text == "المطور" or $text =="مطور" ){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"≈ مــطور هذٱ البــوت 🗯

≈ 『مــطــﯢر ﺄلبوت』  @dev_i 👨🏻‍🔧

≈ تــابــ؏۶ قنــاته 🕸 @php_i 💡",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"منو صاحني ☹️💔
كول حمبي 😻🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}
#     dev:- @dev_i or @dev_a  #    CH:- @php_i         #
if($text == "شلونكم" or $text == "شلونك" or $text == "شلونج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تمام ونته/ي 😻🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ايديي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معرفي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
#     dev:- @dev_i or @dev_a  #    CH:- @php_i         #
if($re and $re_id != $bot and $re_id != $sudo and $text=="تقييد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"• تـٰمہ تـﮧ̯͡ـقيـٰيـٌِد الـﮧ̯͡ـعـُِضـٖۧوٰ ،🙎🏻‍♂️)'

•م̷َـٰۛــعرفـ๋͜‏ـۿہ🌀:-️ @$re_user ",
  'reply_to_message_id'=>$mid
      ]);
    bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "الغاء التقييد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"• تـٰمہ الـﮧ̯͡ـغـٰاء تـﮧ̯͡ـقيـٰيـٌِد الـﮧ̯͡ـعـُِضـٖۧوٰ ،🙎🏻‍♂️)'

•م̷َـٰۛــعرفـ๋͜‏ـۿہ🌀:-  @$re_user",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$userid,
      ]);
    }
    if($re and $re_id != $bot and $re_id != $sudo and $text=="كتم"){
    bot('restrictChatMember',[
      'chat_id'=>$chat_id,
      'text'=>"• تـٰمہ ڪـﮧ̯͡ـتـٰم الـﮧ̯͡ـعـُِضـٖۧوٰ ،🙎🏻‍♂️)'

•م̷َـٰۛــعرفـ๋͜‏ـۿہ🌀:-  @$re_user
️",
  'reply_to_message_id'=>$mid
      ]);
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }
  #     dev:- @dev_i or @dev_a  #    CH:- @php_i         #
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unba" or $text == "الغاء الكتم"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"• تـٰمہ الـﮧ̯͡ـغـٰاء ڪـﮧ̯͡ـتـٰم الـﮧ̯͡ـعـُِضـٖۧوٰ ،🙎🏻‍♂️)'

•م̷َـٰۛــعرفـ๋͜‏ـۿہ🌀:-  @$re_user️",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$userid,
      ]);
    }
    
$editMessage = $update->edited_message;
$chatedit = $update->edited_message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
if($editMessage){
	 bot('sendMessage',[
	 'chat_id'=>$chatedit,
	 'text'=>'سحك وعدل 😹☝🏿',
	 'message_id'=>$message->edited_message->message_id,
	 'reply_to_message_id'=>$update->edited_message->message_id,]);}
if($rep && $text == "ايديها" or $text == "ايديه"){
bot('sendmessage', ['chat_id' => $chat_id,'text' => " $re_id ",]);}

function objectToArrays($object){
if (!is_object($object) && !is_array($object)) {
return $object;}
if (is_object($object)) {
$object = get_object_vars($object);}
return array_map("objectToArrays", $object);}
# Test json
$dev_i = json_decode(file_get_contents
("https://mrdgsy.herokuapp.com/islam.php"));
$bio = objectToArrays($MrDG);
$start = $bio['start'];
$imsak = $bio['prayer_times']['imsak'];
$subuh = $bio['prayer_times']['subuh'];
$syuruk = $bio['prayer_times']['syuruk'];
$zohor = $bio['prayer_times']['zohor'];
$asar = $bio['prayer_times']['asar'];
$maghrib = $bio['prayer_times']['maghrib'];
$isyak = $bio['prayer_times']['isyak'];
#     dev:- @dev_i or @dev_a  #    CH:- @php_i         #
if($text=="الوقت")
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"| الـيوم يصـادف 📌
🔖  $start 🔖

| السـاعـة ⏱
❕  ".date("g", $time).":".date("i", $time)."` ❕

|| اوقـات الـصلاة 🤲🏻🌿

| الامساك 🌪 :- $imsak       
| صـلاه الفجر 🌌:- $subuh

| شـروق شمس🔆:- $syuruk
| صـلاة المغروب🌘:- $maghrib

| صـلاة العـشاء 🍕:-$isyak
| صـلاة الضهر 🌤:- $zohor",]);

$u = explode("\n",file_get_contents("data/memb.txt"));
$c = count($u)-1;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("data/memb.txt", $chat_id."\n",FILE_APPEND);
  }
  if ($text == 'الاعضاء' and $chat_id == $sudo) {
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"مستخدمين البوت 🤖 الخاص بك :- $c"
    ]);
  }
  $about = file_get_contents("data/about.txt");
if($text == "هدووء" or $text == "هدوووء" and $chat_id == $sudo){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"اهلا بك #مطوري

في قائمه الاوامر 📍

اضغط ع المشتركين 💐

لعرض عدد مشتركين ⌛️

و الامر الثاني 🔮

لـ الاذاعه 📥",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"المشتركين ✅",'callback_data'=>"count"]],
            [['text'=>"ارسال رسالة للكل 🔂",'callback_data'=>"send_all"]],
        ] ])]);}
if($data == "count" and $chat_id2 == $sudo){ //مشتركين البوت = مهمة 1
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"عدد مشتركين البوت📬 : $c",
        'show_alert'=>true,
]);}
#     dev:- @dev_i or @dev_a  #    CH:- @php_i         #
$mode = file_get_contents("data/mode.txt");
if($data == "send_all" and $chat_id2 == $sudo){
    file_put_contents("data/mode.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"ارسل رسالتك الان 📩 وسيتم نشرها لـ $c مشترك",   'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"الغاء🚫",'callback_data'=>"off"]],]])]);}
if($text and $mode == "yas" ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text", ]);}} 
if($data == "off"){
    file_put_contents("data/mode.txt","no");
    bot('EditMessageText',[
    'chat_id'=>$chat_id2,    'message_id'=>$message_id2,
    'text'=>"تم الالغاء",]);}

$dev_i = str_replace("غادر ","$dev_i",$text);
if($text=="غادر $dev_i"){
$get = file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$dev_i"); 
$js = json_decode($get);
$res = $js->result;$id = $res->id; 
bot('sendmessage',[
'chat_id'=>$id,
'text'=>"علي غادر بامر من مطوري",
]);
bot('leaveChat',[
'chat_id'=>$id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم الخروج من المجموعة
—
ID : $id",
'reply_to_message_id'=>$message_id,
]);
}

$rep = $message->reply_to_message;
if(preg_match('/^(سويله تاك)(.*)/',$text)){
 if($rep){
 $text = str_replace('سويله تاك ','',$text);
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"[$text](tg://user?id=".$rep->from->id.")",
 'parse_mode'=>'markdown'
 ]);
}
}
$rep = $message->reply_to_message;
if(preg_match('/^(تاك)(.*)/',$text)){
 if($rep){
 $text = str_replace('سويتله تاك','',$text);
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"[تعال يخرا](tg://user?id=".$rep->from->id.")",
 'parse_mode'=>'markdown'
 ]);
}
}
if($re and $text == "جلب صورته"){
  $g = bot("getUserProfilePhotos",["user_id"=>$re_id,"limit"=>1,"offset"=>0]);
$r = $g->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$r]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));

bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>new CURLFile("$rnd.jpg"),
]);
unlink("$rnd.jpg");
}

if($text == "غادر"&& $id == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تف ع  هذا الكروب الفيطي مغادر 🚶🏿‍♂️",
'reply_to_message_id'=>$message->message_id,
]);
bot('leaveChat',[
'chat_id'=>$chat_id,
]);
}
#     dev:- @dev_i or @dev_a  #    CH:- @php_i         #
