﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Garden Admin Page</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="keywords" content="blue garden" />
<meta name="description" content="Blue Garden 上永谷のアロマサロン " />

<?php echo Asset::css('admin_style.css');?>
<?php echo Asset::css('rankingviewtable.css');?>
<?php echo Asset::js('date.js');?>
</head>

<body class="MyGradientClass">
	<div id="bluegarden_container">
		<div id="bluegarden_header">
			<p class="header_title">
			<?php echo Asset::img('img2/title_admin.gif',array('height' => '120')); ?></p></title>
		</div> <!-- end of header -->
	   	

	    <!-- login -->
	   	<div id="bluegarden_content">
				<div id="bluegarden_left">
				

						<table width="90%" class="loginspacer">
							<tr >
								
								<td><?php echo Asset::img('img2/home_pic.png'); ?>	</td>
								<td class="columntitle">Myページ</td>
								
							</tr>
							<tr>
								
								<td><?php echo Asset::img('pword_icon.png'); ?>	</td>
								<td class="navi_btn"><a href="top">Myページトップ</a></td>
								
							</tr>
							<tr >
								
								<td><?php echo Asset::img('pword_icon.png'); ?>	</td>
								<td class="navi_btn">
									<a href="cusinfo">お客様情報管理</a>
								</td>
									
							</tr>
							<tr >
								
								<td><?php echo Asset::img('pword_icon.png'); ?>	</td>
								<td class="navi_btn"><a href="reserveinfo">予約管理</a></td>
								
							</tr>
						<?php  $auth = Auth::instance();
								if (Auth::member(100)){

							?>
							<tr>
								
								<td><?php echo Asset::img('pword_icon.png'); ?>	</td>
								<td class="navi_btn"><a href="staffinfo">従業員情報管理</a></td>
								
							</tr>
						<?php }	?>
							<tr>
								
								<td><?php echo Asset::img('pword_icon.png'); ?>	</td>
								<td class="navi_btn"><a href="menuinfo">メニュー</a></td>
								
							</tr>
							<tr>
								
								<td><?php echo Asset::img('pword_icon.png'); ?>	</td>
								<td class="navi_btn"><a href="mail">メール設定</a></td>
								
							</tr>
							<tr>
								
								<td><?php echo Asset::img('pword_icon.png'); ?>	</td>
								<td class="navi_btn"><a href="logout">ログアウト</a></td>
								
							</tr>
							
						</table>

				</div>
	          	<div id="bluegarden_right">
				<div class="coldivider_right"><!--fix -->
				<table width="100%">
					<tr><td style="font-size: 50px;" rowspan="2">
				
							<?php echo 
									'<script type="text/javascript">'
								   , 'get_time();'
								   , '</script>';
							?>
						</td>
					
						</td>
						<td class="font_sizer"><strong>
									<?php echo 
										'<script type="text/javascript">'
									   , 'get_day();'
									   , '</script>';
									?> 
									</strong>
						</td>
					</tr>
					<tr>
						
						<td style="font-size: 15px;">
							<?php echo 
									'<script type="text/javascript">'
								   , 'get_date();'
								   , '</script>';
							?>
						</td>
					</tr>
					
					
				</table>
			
				</div> 
				
				<div class="coldivider_left">
					<table width="80%">
						<tr><td><?php echo Asset::img('img2/user_icon.gif'); ?>	</td>
							<td>
								店舗：<?php echo Session::get('branch');?><br><hr><i>役割：<?php echo Session::get('role');?></i>
							</td>
							<td>
							</td>
						</tr>	
					</table> 
				</div>	 <!-- ************************************************** end fix ****************************************************-->
				
				<div class="coldivider_center" style="margin-top:80px;">
			
					<table width="100%">
						<tr><td>&nbsp;</td></tr>
						<tr>
							<td colspan="2" style="font-size: 18px;"　>
								<strong>お客様情報詳細</strong><hr />
							</td>
							
						</tr>	
						
						<tr><td>&nbsp;</td></tr>
						
					</table> 
						<div class="box-type1 ns">
						
						
						<?php foreach((array)$rows as $row): ?>
						  <table width="100%" border="0" class="type1">
							<tr>
							  <th width="150"><span class="attention">＊</span>メールアドレス</th>
							   <td style="border: 1px solid #99bbff;"><?php echo $row['email'] ?></td>
								<?php Session::set('email', $row['email']);?>
							</tr>
							<tr>
							  <th width="150"><span class="attention">＊</span>お名前</th>
							 <td style="border: 1px solid #99bbff;"><?php echo $name ?></td>
							<input type = "hidden" value = "<?php echo $name;?>" name = "del">
								
							</tr>
							<tr>
							  <th width="150">フリガナ</th>
							 <td style="border: 1px solid #99bbff;"><?php echo $kana ?></td>
					
							</tr>

							<tr>
							  <th width="150">電話番号</th>
							  <td style="border: 1px solid #99bbff;"><?php echo $tel ?></td>
						
							</tr>
							<tr>
							  <th width="150">郵便番号</th>
							  <td style="border: 1px solid #99bbff;"><?php echo $post_no ?></td>
							 						  
							</tr>
							<tr>
							  <th width="150">住所</th>
							  <td style="border: 1px solid #99bbff;"><?php echo $pref ?><?php echo $addr1 ?><?php echo $addr2 ?></td>
							
							</tr>
							<tr>
							  <th width="150">性別</th>
							  <td style="border: 1px solid #99bbff;"><?php echo $sex ?></td>
							  
							</tr>
							<tr>
							  <th width="150">生年月日</th>
							  <td style="border: 1px solid #99bbff;"><?php echo $birthy ?>年<?php echo $birthm ?>月<?php echo $birthd ?>日</td>
						
							</tr>
						
							<tr>
							 <th width="150">お客様ID</th>
								<td style="border: 1px solid #99bbff;"><?php echo $row['id'] ?></td>
								
							</tr>
							<tr>
							  <th width="150">登録日</th>
							  
							  <td style="border: 1px solid #99bbff;"><?php
								$reg_date = $row['created_at'];
								$reg_date = Date::forge($reg_date)->format("%Y年%m月%d日 %H:%M");
			
								echo $reg_date  ?></td>
								<?php Session::set('reg_date', $reg_date);?>
							</tr>

						<?php endforeach ?>
						
							<tr>	
								<td align="right" colspan="2">
								<form action="memberedit" name="memberedit" method="post"　>
									<input name="submit" type="submit" value="編集" >
								</form>
								
								</td>
								<td><form action="memberdelete" name="memberdelete" method="post"　>
									 
										<input name="submit" type="submit" value="削除" >
									</form>
								</td>
							</tr>
						  </table>
						</div>
					
				</div>
				
				</div>
	    </div> <!-- end of content -->
	    
	   <div id="bluegarden_footer">
	      
	   	  Copyright &copy; 2013 Blue Garden All Rights Reserved.
	   </div> 
	    <!-- end of footer -->

	</div> <!-- end of container -->

</body>
</html>