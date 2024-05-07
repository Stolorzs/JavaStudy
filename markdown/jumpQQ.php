<?php
header('Content-Type:application/json; charset=utf-8');
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
//url 参数 ?qq=123456789
$qq = isset($_GET['qq']) ? $_GET['qq'] : "";
if(empty($qq)){
  echo json_encode(array('code'=>201,'msg'=>'QQ不能为空'),480);
}elseif(!preg_match("/^[1-9][0-9]{4,10}$/",$qq)){
  echo json_encode(array('code'=>202,'msg'=>'QQ格式不正确'),480);
}elseif(strpos($agent,'windows nt')){
  $loca = "tencent://ContactInfo/?subcmd=ViewInfo&puin=0&uin={$qq}";
}elseif(strpos($agent,'iphone')){
  $loca = "mqq://im/chat?chat_type=wpa&uin={$qq}&version=1&src_type=web";
}elseif(strpos($agent,'android')){
  $loca = "mqq://card/show_pslcard?src_type=internal&version=1&uin={$qq}&card_type=person&source=sharecard";
}
if(empty($loca)==false){
header("Location:$loca");
exit; 
}
?>