﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="http://666522dacac20340.lolipop.jp/bluegarden/blueGarden/assets/img/candle.ico">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8;IE=EmulateIE9" />
<title>Blue Garden -アロマサロン予約システム</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="blue garden" />
<meta name="description" content="Blue Garden アロマサロン" />

<?php echo Asset::css('bluegarden_style.css');?>
<?php echo Asset::js('jquery.min.js');?>
<?php echo Asset::js('menu_jquery.js');?>
	
</head>

<body class="MyGradientClass">
<div id="bluegarden_container">
		<div id="bluegarden_header">

		</div> <!-- end of header -->
    <div id="bluegarden_menu">
        <ul>
            <li><a href="index" class="current">トップ</a></li>
	  <li><a href="mypage" >Myページ</a></li>
            <li><a href="privacy">プライバシー規約</a></li>
	    <li><a href="http://localhost:1337/blueGarden/index.html" >Blue Gardenのホームページ</a></li>
           
                     
       </ul> 
    </div> <!-- end of menu -->

    <!-- left column -->
    <div id="bluegarden_content">
    	
	       <div id = "bluegarden_left">
		
 			<div class="left_col_section">	
				<p class="columntitle" style="text-align:center;">My Page</p>
				<div class="left_inside">

					<?php if(Auth::get_profile_fields('name')!=""){?>
					<p>&nbsp;</p>
					<p><span class="attention"><?php echo Auth::get_profile_fields('name'); ?> 様</span></p><br />
					<p>いつもご利用ありがとうございます。</p>
					<p>&nbsp;</p>
					<div id='cssmenu'>
						<ul>
						   <li class='has-sub'><a href='#'><span>会員情報</span></a>
						      <ul>
						         <li><a href='member_profile_change'><span>登録情報の変更</span></a></li>
								 <li><a href='changepassword'><span>パスワードの変更</span></a></li>
						         <li class='last'><a href='quitmembershipnot'><span>退会申請</span></a></li>
						      </ul>
						   </li>
						   <li class='has-sub last'><a href='#'><span>予約状況</span></a>
						      <ul>
						         <li><a href='checkreservation'><span>予約の確認</span></a></li>
						         <li class='last'><a href='reservationhistory'><span>予約の履歴</span></a></li>
						      </ul>
						   </li>
						</ul>
						<br>
						<ul>
						         <li><a href='staff'><span>スタッフ一覧</span></a></li>
						</ul>
						<ul>
						         <li><a href='course'><span>メニュー/コース一覧</span></a></li>
						</ul>
					</div>
					<?php }else{?>
					<p>&nbsp;</p>
					<p><span class="attention">ゲスト 様</span></p><br />
					<p>こんにちは！</p>
					<p>&nbsp;</p>
					<div id='cssmenu'>
						<ul>
						         <li><a href='staff'><span>スタッフ一覧</span></a></li>
						</ul>
						<ul>
						         <li><a href='course'><span>メニュー/コース一覧</span></a></li>
						</ul>
					</div>
					<?php } ?>
				
				</div>
			</div>
			<?php if(Auth::get_profile_fields('name')!=""){?>
			<div class="left_col_section">	
				<table  width="100%"><tr class="columntitle_button"><td align="center"><a href="logout">ログアウト</a></td></tr></table>
			</div>			
			<?php }else{?>
			<div class="left_col_section">	
				<a href="signup"><table  width="100%"><tr class="columntitle_button"><td align="center">新規登録</td></tr></table></a>
			</div>
			<div class="left_col_section">
					<a href="reserve"><?php echo Asset::img('reservebtn.gif',array('width' => '245'));?></a>
			</div>
			<?php }?>
	
	
       		
    	</div>


        <!-- end of left -->
    	<p>&nbsp;</p>
    	
  
    <div id="bluegarden_right">
        <div class="right_col_section">
			<form id="form1" method="post" action="checkagreement" name="agreement_form" --><!-- start of form -->
				<table width="100%" border="0"  class="columntitle">
					<tr><td>ご利用規約</td></tr>
				</table>
				<center>				
			<table width="100%" border="0" class="type1">
				<tr><td class="ptablespacer">Blue Gardenでは全てのお客様が<br>
				&nbsp;&nbsp;&nbsp;&nbsp;最高のリラクゼーションを体感して頂けるよう、スタッフ一同 "真心" のこもったサービスを<br>
				&nbsp;&nbsp;&nbsp;&nbsp;提供させて頂くために下記の項目に同意して頂く必要があります。</td></tr>
				<tr><td class="ptablespacer"><center><b>【規約内容】</b></center></td></tr>
				<tr><td class="ptablespacer">
				<ul>
					<li>妊娠中の方</li>
					<li>生理中の方</li>
					<li>外科的手術を受けられてすぐの方</li>
					<li>皮膚疾患（アトピーなど）がある方</li>
					<li>刺青をされている方や暴力団関係者</li>
					<li>ウィルス性の病気の方</li>
					<li>飲酒されている方</li>
				</ul>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">※当店が規約を守っていただけないと判断した場合は、施術中でも退店していただきます。<br>	
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;尚、料金の返金はいたしません。</span><br><br>
				</td></tr>
				<tr>
					<td colspan="2" class="ptablespacer"><br>
					<center>体調不良時や妊娠中などのコンディションで当店の施術を受け、<br>
					体調に異常や変化をきたしても一切責任は持ちませんのでご了承ください。</center><br>
					<p><center><strong>
					<?php echo Form::checkbox('agree', '1'); ?>
					<?php echo Form::label('同意して、予約手続きを行います。', 'agree'); ?>
					</strong></center></p>
					<p><center>	<?php if (isset($error)): ?>
					<font color="red"><?php echo $error ?></font>
					<?php endif ?></center></p><br>
					<h2><p><center>					
					<input action="action" type="button" value="前の画面にもどる" onclick="history.go(-1);" />
					<input type="submit" value="予約画面へ">
					</center></p>
					</h2></td>
				</tr>
				</table>
				</center>
			</form> <!-- end of form -->
          <div class="cleaner"><p>&nbsp;</p></div> 
        </div> <!-- end of right -->
    </div> <!-- end of content -->
    
   <div id="bluegarden_footer">
           <a href="index" class="current">トップ</a>|
           <a href="mypage" >Myページ</a>|
           <a href="privacy">プライバシー規約</a>|
	   <a href="http://localhost:1337/blueGarden/index.html" >Blue Gardenのホームページ</a>
          
           <br />
   	  Copyright &copy; 2013 Blue Garden All Rights Reserved.
   </div> 
    <!-- end of footer -->

</div> <!-- end of container -->



</body>
</html>