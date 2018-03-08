	<section class="main">
		
		<section class="tab-content" id="tab-content">
			
		   <section class="tab-pane active fade in content" id="dashboard">
				<div class="row">
				   <div class="col-xs-12">
						<legend><a href="#" id="a_menu"><i class="fa fa-dashboard"></i> Dashboard - Total Quality Tracking System (TQTS)</a></legend>
					    <ol class="breadcrumb" style="background-color:lightblue;">
						  <li id="bc_menu"><a href="#" class="active"><i class="fa fa-search"></i> IQC </a></li>
						  <li id="bc_pp"><a href="#"><i class="fa fa-search"></i> IPQC </a></li>
						  <li id="bc_oqc"><a href="#"><i class="fa fa-search"></i> OQC </a></li>
						  <li id="bc_ypd"><a href="#"><i class="fa fa-line-chart"></i> Yield Performance Data </a></li>
						  <li id="bc_dir"><a href="#"><i class="fa fa-file"></i> Quality Feedback Report </a></li>
						  <li id="bc_etr"><a href="#"><i class="fa fa-users"></i> ETR </a></li>
						</ol>
					</div>
				</div>
				
				<div class="row">
					<?php 
						/* Check if there is a read role on one IQC modules */
						$user_iqc_read_access = false;
						foreach($user_role['subsystem_code'] as $key => $subsystem_code ){
							if($subsystem_code == "IQC" && $user_role['read'][$key] == 1){ 
								$user_iqc_read_access = true;
							}
						}
						if( $user_iqc_read_access ){
							echo '<div class="col-xs-6 col-sm-3">
									<a href="#" id="a_dashboard_menu_iqc">
										<div class="panel panel-success" style="padding:0px;">
										  <div class="panel-heading">
											<div class="row">
											  <div class="col-xs-5">
												<i class="fa fa-search fa-5x"></i>
											  </div>
											  <div class="col-xs-7 text-right">
												<p class="announcement-heading"></p>
												<p class="announcement-text fa-2x"> IQC</p>
											  </div>
											</div>
										  </div>
											<div class="panel-footer announcement-bottom">
											  <div class="row">
												<div class="col-xs-6">
												  Open
												</div>
												<div class="col-xs-6 text-right">
												  <i class="fa fa-arrow-circle-right"></i>
												</div>
											  </div>
											</div>
										</div>
									</a>
								</div>';
						}
						/* Check if there is a read role on one IPQC modules */
						$user_ipqc_read_access = false;
						foreach($user_role['subsystem_code'] as $key => $subsystem_code ){
							if($subsystem_code == "IPQC" && $user_role['read'][$key] == 1){ 
								$user_ipqc_read_access = true;
							}
						}
						if( $user_ipqc_read_access ){
							echo '<div class="col-xs-6 col-sm-3">
									<a href="#" id="a_dashboard_menu_ipqc">
										<div class="panel panel-info" style="padding:0px;">
										  <div class="panel-heading">
											<div class="row">
											  <div class="col-xs-5">
												<i class="fa fa-search fa-5x"></i>
											  </div>
											  <div class="col-xs-7 text-right">
												<p class="announcement-heading"></p>
												<p class="announcement-text fa-2x"> IPQC</p>
											  </div>
											</div>
										  </div>
										 
											<div class="panel-footer announcement-bottom">
											  <div class="row">
												<div class="col-xs-6">
												  Open
												</div>
												<div class="col-xs-6 text-right">
												  <i class="fa fa-arrow-circle-right"></i>
												</div>
											  </div>
											</div>
										 
										</div>
									</a>
								</div>';
						}
						/* Check if there is a read role on one OQC modules */
						$user_oqc_read_access = false;
						foreach($user_role['subsystem_code'] as $key => $subsystem_code ){
							if($subsystem_code == "OQC" && $user_role['read'][$key] == 1){ 
								$user_oqc_read_access = true;
							}
						}
						if( $user_oqc_read_access ){
							echo '<div class="col-xs-6 col-sm-3">
									<a href="#" id="a_dashboard_menu_oqc">
										<div class="panel panel-warning" style="padding:0px;">
										  <div class="panel-heading">
											<div class="row">
											  <div class="col-xs-5">
												<i class="fa fa-search fa-5x"></i>
											  </div>
											  <div class="col-xs-7 text-right">
												<p class="announcement-heading"></p>
												<p class="announcement-text fa-2x"> OQC</p>
											  </div>
											</div>
										  </div>
										  
											<div class="panel-footer announcement-bottom">
											  <div class="row">
												<div class="col-xs-6">
												  Open
												</div>
												<div class="col-xs-6 text-right">
												  <i class="fa fa-arrow-circle-right"></i>
												</div>
											  </div>
											</div>
										</div>
									</a>
								</div>';
						}
						/* Check if there is a read role on one YPD modules */
						$user_ypd_read_access = false;
						foreach($user_role['subsystem_code'] as $key => $subsystem_code ){
							if($subsystem_code == "YPD" && $user_role['read'][$key] == 1){ 
								$user_ypd_read_access = true;
							}
						}
						if( $user_ypd_read_access ){
							echo '<div class="col-xs-6 col-sm-3">
									<a href="#" id="a_dashboard_menu_ypd">
										<div class="panel panel-danger" style="padding:0px;">
										  <div class="panel-heading">
											<div class="row">
											  <div class="col-xs-5">
												<i class="fa fa-line-chart fa-5x"></i>
											  </div>
											  <div class="col-xs-7 text-right">
												<p class="announcement-heading"></p>
												<p class="announcement-text fa-lg"> Yield Performance Data</p>
											  </div>
											</div>
										  </div>
											<div class="panel-footer announcement-bottom">
											  <div class="row">
												<div class="col-xs-6">
												  Open
												</div>
												<div class="col-xs-6 text-right">
												  <i class="fa fa-arrow-circle-right"></i>
												</div>
											  </div>
											</div>
										</div>
									</a>
								</div>';
						}
						/* Check if there is a read role on one QFR modules */
						$user_qfr_read_access = false;
						foreach($user_role['subsystem_code'] as $key => $subsystem_code ){
							if($subsystem_code == "QFR" && $user_role['read'][$key] == 1){ 
								$user_qfr_read_access = true;
							}
						}
						if( $user_qfr_read_access ){
							echo '<div class="col-xs-6 col-sm-3">
									<a href="#" id="a_dashboard_menu_qfr">
										<div class="panel panel-success" style="padding:0px;">
										  <div class="panel-heading">
											<div class="row">
											  <div class="col-xs-5">
												<i class="fa fa-cogs fa-5x"></i>
											  </div>
											  <div class="col-xs-7 text-right">
												<p class="announcement-heading"></p>
												<p class="announcement-text fa-lg"> Quality Feedback Report</p>
											  </div>
											</div>
										  </div>
											<div class="panel-footer announcement-bottom">
											  <div class="row">
												<div class="col-xs-6">
												  Open
												</div>
												<div class="col-xs-6 text-right">
												  <i class="fa fa-arrow-circle-right"></i>
												</div>
											  </div>
											</div>
										</div>
									</a>
								</div>';
						}
						/* Check if there is a read role on one ETR modules */
						$user_etr_read_access = false;
						foreach($user_role['subsystem_code'] as $key => $subsystem_code ){
							if($subsystem_code == "ETR" && $user_role['read'][$key] == 1){ 
								$user_etr_read_access = true;
							}
						}
						if( $user_etr_read_access ){
							echo '<div class="col-xs-6 col-sm-3">
									<a href="#" id="a_dashboard_menu_etr">
										<div class="panel panel-info" style="padding:0px;">
										  <div class="panel-heading">
											<div class="row">
											  <div class="col-xs-5">
												<i class="fa fa-users fa-5x"></i>
											  </div>
											  <div class="col-xs-7 text-right">
												<p class="announcement-heading"></p>
												<p class="announcement-text fa-2x"> ETR</p>
											  </div>
											</div>
										  </div>
											<div class="panel-footer announcement-bottom">
											  <div class="row">
												<div class="col-xs-6">
												  Open
												</div>
												<div class="col-xs-6 text-right">
												  <i class="fa fa-arrow-circle-right"></i>
												</div>
											  </div>
											</div>
										</div>
									</a>
								</div>';
						}
					?>
					<!--					
					<div class="col-xs-6 col-sm-3">
						<a href="#" id="a_menu4">
							<div class="panel panel-danger" style="padding:0px;">
							  <div class="panel-heading">
								<div class="row">
								  <div class="col-xs-5">
									<i class="fa fa-line-chart fa-5x"></i>
								  </div>
								  <div class="col-xs-7 text-right">
									<p class="announcement-heading"></p>
									<p class="announcement-text fa-lg"> Yield Performance Data</p>
								  </div>
								</div>
							  </div>
								<div class="panel-footer announcement-bottom">
								  <div class="row">
									<div class="col-xs-6">
									  Open
									</div>
									<div class="col-xs-6 text-right">
									  <i class="fa fa-arrow-circle-right"></i>
									</div>
								  </div>
								</div>
							</div>
						</a>
					</div>-->
					
					
					
					<!--<div class="col-xs-6 col-sm-3">
						<a href="#" id="a_menu4">
							<div class="panel panel-info" style="padding:0px;">
							  <div class="panel-heading">
								<div class="row">
								  <div class="col-xs-5">
									<i class="fa fa-users fa-5x"></i>
								  </div>
								  <div class="col-xs-7 text-right">
									<p class="announcement-heading"></p>
									<p class="announcement-text fa-2x"> ETR</p>
								  </div>
								</div>
							  </div>
								<div class="panel-footer announcement-bottom">
								  <div class="row">
									<div class="col-xs-6">
									  Open
									</div>
									<div class="col-xs-6 text-right">
									  <i class="fa fa-arrow-circle-right"></i>
									</div>
								  </div>
								</div>
							</div>
						</a>
					</div>-->
				<!--
					<div class="col-sm-6">
						<div class="panel panel-default col-sm-12">
							<div class="panel-heading">
								<div class="row">
									<div class="col-sm-6">
										<span class="fa fa-Search"></span> Search
									</div>
									<div class="col-sm-6">
										<a href="#" class="btn-sm fa fa-caret-down pull-right" id="btn-minimize"></a>
									</div>
								</div>
							</div>
							<div class="panel-body">
								Search
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-xs-12">
						<div class="c-widget c-widget-quick-info c-widget-size-small highlight-color-blue" data-url="#">
							<div class="c-widget-icon">
								<span class="icon icon-check"></span>
							</div>
							<div class="c-wdiget-content-block">
								<div class="c-widget-content-heading">
									6,508
								</div>
								<div class="c-widget-content-sub">
									Completed Orders
								</div>
							</div>
						</div>
					</div>
				</div>-->
			
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-info">
						   <div class="panel-heading">
							  <i class="fa fa-search"></i> <span class="fa fa-lg"> Search Item</span>
						   </div>
						   <div class="panel-body" style="overflow:auto;">
							   	<div class="row" id="container_google_like_search">    
									<div class="col-xs-12">
										<div class="input-group">
											<div class="input-group-btn search-panel">
												<button type="button" class="btn btn-default btn-md dropdown-toggle" data-toggle="dropdown">
													<span id="search_concept">Filter by</span> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
												  <li><a href="#PONumber">PO Number</a></li>
												  <li><a href="#DeviceCode">Parts Code</a></li>
												  <li><a href="#DeviceName">Parts/Series Name</a></li>
												  <li><a href="#Supplier">Supplier's Name</a></li>
												</ul>
											</div>
											<input type="text" class="form-control" name="x" id="txt_search" placeholder="Search term..." style="height:39px;">
										</div>
									</div>
								</div><br />
								<div class="row">
									<div class="col-sm-12">
										<table class="table table-bordered table-striped table-hover table-condensed" id="tbl_record" style="font-size:12px;">
											<thead>
												<tr>
													<th>PO Number</th>
													<th>Device Code</th>
													<th>Device Name</th>
													<th>IQC Result</th>
													<th>IPQC Result</th>
													<th>OQC Result</th>
													<th>Yield Performance</th>
													<th>Quality Feedback Report</th>
													<th>ETR</th>
												</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		   
		   </section>
		   
		</section>
		
	</section>
</article>

<?php
$file_location = 'pages/modals/sample_modal1.php';
if(file_exists($file_location)){
	require_once($file_location);
}else{
	echo "No file exist for ".$file_location;
}

?>
<!-- 
	Script - Homapage Google Like Search 
-->
<script>
	var table_id 	   = 'tbl_record';
	var search_keyword = '';
	var search_value   = '';
	var otable_search  = '';
	
	$('.tab-content').on('click','#btn-minimize',function(){
		$(this).closest('div.panel').find('div.panel-body').toggle();
	});
	
	$('#a_dashboard_menu_iqc').click(function(){
		$('.sidebar li#li_iqc').trigger('click');
	});
	
	$('#a_dashboard_menu_qfr').click(function(){
		$('.sidebar li#li_qfr').trigger('click');
	});
	
	$('#a_dashboard_menu_ipqc').click(function(){
		$('.sidebar li#li_ipqc').trigger('click');
	});
	
	$('#a_dashboard_menu_oqc').click(function(){
		$('.sidebar li#li_oqc').trigger('click');
	});
	
	$('#a_dashboard_menu_ypd').click(function(){
		$('.sidebar li#li_ypd').trigger('click');
	});
	
	
	// otable_search = $('#'+table_id).DataTable({
		// "aaSorting"	 : [],	
		// "ajaxSource": "server_side_scripts/search/dt_search.php?kw="+search_keyword+"&vl="+search_value
	// });
		
	// var container_google_like_search_id = 'container_google_like_search';
	// $('#'+container_google_like_search_id+' .search-panel .dropdown-menu li').click(function(){
		// var search_text = $(this).find('a').text();
			// search_keyword = ($(this).find('a').attr('href')).replace("#","");
		// $('#'+container_google_like_search_id+' #search_concept').text(search_text);
	// });
	// $('#'+container_google_like_search_id+' #txt_search').keyup(function(e){
		// if(e.keyCode == 13) {
			// search_value = $(this).val();
			// otable_search.ajax.url( "server_side_scripts/search/dt_search.php?kw="+search_keyword+"&vl="+search_value ).load();
		// }
	// });
</script>