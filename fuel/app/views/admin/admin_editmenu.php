﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Garden Admin Page</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="keywords" content="blue garden" />
<meta name="description" content="Blue Garden 上永谷のアロマサロン " />
  <link rel="shortcut icon" href="http://666522dacac20340.lolipop.jp/bluegarden/blueGarden/assets/img/candle.ico">
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
						<tr><td style="font-size: 12px;"><?php echo Asset::img('img2/user_icon.gif'); ?>	</td>
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
										<strong>サービス・メニューの編集</strong><hr />
									</td>
									
								</tr>	
								
								<tr><td>&nbsp;</td></tr>
								
					</table>
						<div class="box-type1 ns">
						<?php $service_name = Session::get('service_name');
							  $category = Session::get('category');
							?>
						<?php foreach($menuedit as $edit): ?>
						
							<form action="editmenu_confirm" name="editmenu_confirm" method="post"　>
								  <table width="100%" border="0" class="type1">
								  <?php  if($category!='option'){ ?>
									<tr>
									  <th width="150">サービス名</th>
									  <td>
									  <?php echo Form::input('servicename',Input::post('servicename',$edit['svc_name']), array('size'=>'50', 'class' => 'textinput')) ?>											
										<p class="attention"></p>
									  </td>
									</tr>
									<tr>
									  <th width="150">内容</th>
									  <td>
									  <?php echo Form::input('service_content',Input::post('service_content',$edit['svc_contents']), array('size'=>'50', 'class' => 'textinput')) ?>	
									  </td>
									</tr>
									<tr>
									  <th width="150">基本価格（税込）</th>
									  <td>
									  <?php echo Form::input('service_price',Input::post('service_price',$edit['svc_price_regular']), array('size'=>'50', 'class' => 'textinput')) ?>	
									  </td>
									</tr>
									<tr>
									  <th width="150">会員価格（税込）</th>
									  <td>
									  <?php echo Form::input('service_price_mem',Input::post('service_price_mem',$edit['svc_price_member']), array('size'=>'50', 'class' => 'textinput')) ?>	
									  </td>
									</tr>
									<tr>
									  <th width="150">金額価格（税込）</th>
									  <td>
									  <?php echo Form::input('service_price_cont',Input::post('service_price_cont',$edit['svc_price_cont']), array('size'=>'50', 'class' => 'textinput')) ?>	
									  </td>
									</tr>
									
				<!-- -->	<?php }else{?>
				
									<tr>
									  <th width="150">サービス名</th>
									  <td>
									  <?php echo Form::input('servicename',Input::post('servicename',$edit['opt_name']), array('size'=>'50', 'class' => 'textinput')) ?>											
										<p class="attention"></p>
									  </td>
									</tr>
									<tr>
									  <th width="150">内容</th>
									  <td>
									  <?php echo Form::input('service_content',Input::post('service_content',$edit['opt_contents']), array('size'=>'50', 'class' => 'textinput')) ?>	
									  </td>
									</tr>
									<tr>
									  <th width="150">基本価格（税込）</th>
									  <td>
									  <?php echo Form::input('service_price',Input::post('service_price',$edit['opt_price_regular']), array('size'=>'50', 'class' => 'textinput')) ?>	
									  </td>
									</tr>
									<tr>
									  <th width="150">会員価格（税込）</th>
									  <td>
									  <?php echo Form::input('service_price_mem',Input::post('service_price_mem',$edit['opt_price_member']), array('size'=>'50', 'class' => 'textinput')) ?>	
									  </td>
									</tr>
									<tr>
									  <th width="150">継続価格（税込）</th>
									  <td>
									  <?php echo Form::input('service_price_cont',Input::post('service_price_cont',$edit['opt_price_cont']), array('size'=>'50', 'class' => 'textinput')) ?>	
									  </td>
									</tr>
									
									<?php } ?>
													
									<tr>	
										<td align="center" colspan="2">
										
											<input name="submit" type="submit" value="確認" >
											<input action="action" type="button" value="戻る" onclick="history.go(-1);" />
										
										</td>
									</tr>
							</table>
						</form>
					<?php endforeach; ?>
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