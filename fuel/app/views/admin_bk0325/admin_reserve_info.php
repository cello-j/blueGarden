<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

	<!-- jQuery -->

	<?php echo Asset::js('jquery-1.2.6.js');?>


	<!-- ui tabs.js -->
		<?php echo Asset::css('ui.tabs.css');?>
		<?php echo Asset::js('ui.core.js');?>
		<?php echo Asset::js('ui.tabs.js');?>

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
						<?php 								
							}?>
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
						<tr><td ><?php echo Asset::img('img2/user_icon.gif'); ?>	</td>
							<td>
							店舗：<?php echo Session::get('branch');?><br><hr><i>役割：<?php echo Session::get('role');?></i>
							</td>
							<td >
							</td>
						</tr>	
					</table> 
				</div>	 <!-- ************************************************** end fix ****************************************************-->
				
				<div class="coldivider_center" style="margin-top:80px;">
			
					<table width="100%">
						<tr><td>&nbsp;</td></tr>
						<tr>
							<td colspan="2" style="font-size: 18px;"　>
								<strong>予約管理ページ</strong><hr />
							</td>
							
						</tr>	
						
						<tr><td>&nbsp;</td></tr>
						
					</table> 
					<script type="text/javascript">
							$(function() {
								$('#ui-tab > ul').tabs();
							});
						</script>
					<div id="ui-tab">
						<ul>
							<li><a href="#fragment-1"><span>一覧</span></a></li>
							<li><a href="#fragment-2"><span>絞り込む</span></a></li>
							<li><pre>                    　　　　　　　　　　　　　　　　　　　　　　　</pre></li>
							<li><span>
							<form action="reservecalendar" method="post">
								<input type="submit" value="新規予約" class="box"></span></li>
							</form>
						</ul>
						<p>※予約様情報の編集または削除を行いたい場合は、<span style="color:red;">予約番号</span>をクリックしてください。</p>
						<div id="fragment-1">
							<div id="schedDiv">
							
								<div id="schedGrid">
									
									<table id="schedTable">
									
										<colgroup><col id="schedTableCol1"></colgroup>
										<thead>
											<tr>
												<th><span id="schedHdr0">予約番号</span></th>
												<th><span id="schedHdr2">顧客名</span></th>
												<th><span id="schedHdr3">指名</span></th>
												<th><span id="schedHdr4">コース</span></th>
												<th><span id="schedHdr5">オプション</span></th>
												<th><span id="schedHdr6">日付</span></th>
												<th><span id="schedHdr7">時間</span></th>
												<th><span id="schedHdr8">金額</span></th>
											</tr>
										</thead>
										
										<tbody>
											<?php foreach((array)$rows as $row): ?>
											<tr>
												<td >
													<form action="deletereserve" method="post">
														<?php echo Form::submit('resno', Input::post('resno', $row['res_no']), array('size'=>'38', 'class' => 'box1') )?>
													</form>
													&nbsp;&nbsp;&nbsp;
												</td>
												<?php Session::set('email',$row['email']) ?>
												<td class="txt"><?php echo $row['name']?><?php Session::set('okyakumei',$row['name']) ?></td>
												<td class="txt"><?php echo $row['staff_name']?></td>
												<td class="txt">
												<?php 
												if(($row['svc_name_1']=="なし") && ($row['svc_name_2']!="なし")){
												echo $row['svc_name_2'];
												}elseif(($row['svc_name_2']=="なし") && ($row['svc_name_1']!="なし")){
													echo $row['svc_name_1'];
												}else{
													echo $row['svc_name_1'];
													print "<br>";
													echo $row['svc_name_2'];
												}?>
												
												</td>
												<td class="txt"><?php echo $row['opt_name']?></td>
												<td class="txt"><?php 
																$resdate = date("Y年m月d日",strtotime($row['res_date']));
																echo $resdate ?></td>
												<td class="txt"><?php echo date('H:i',strtotime($row['res_time']))?></td>
												<td class="txt"><?php echo number_format($row['res_tot_amt']).' 円'?></td>
											</tr>
											<?php endforeach?>
										</tbody>
								   
									</table>
								</div>
							</div>

						</div><!--end of the first tab-->
						
						<div id="fragment-2">
						
							<form name="search_reserveinfo" action="search_reserveinfo" method="post">
								<select id="category" name="category">
									<option>顧客</option>
									<option>予約番号</option>
									<option>予約日付</option>
									<option>指名・スタッフ名</option>
								</select>
								<?php echo Form::input('search',Input::post('search'), array('required' => 'required' ,'size'=>'20', 'class' => 'textinput'))//, $name ?>
								<input type="submit" name="btnsearch" value="絞り込む">
							</form>
							<p>&nbsp;</p>
							<p>※予約の日付の場合　yyyy-mm-dd で入力してください。例：2014-03-24</p>
						</div><!--end of the 2nd tab-->
						
				</div>
				
				
	    </div> <!-- end of content -->
		</div>
	    
	   <div id="bluegarden_footer">
	      
	   	  Copyright &copy; 2013 Blue Garden All Rights Reserved.
	   </div> 
	    <!-- end of footer -->

	</div> <!-- end of container -->

</body>
</html>