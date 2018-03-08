<?php
/* get user role */
$etr_production_access 	    = array("create" => false, 
									"read" => false,
									"update" => false,
									"delete" => false
									);
$subsystem_code 			= "OQC";
$module 					= "ETR-Production Section";
foreach($user_role['subsystem_code'] as $key => $subsystem_code ){
	if($subsystem_code == $subsystem_code && $user_role['module'][$key] == $module){ 
		if ($user_role['create'][$key] == 1){
			$etr_production_access['create'] = true;
		}
		if ($user_role['read'][$key] == 1){
			$etr_production_access['read'] = true;
		}
		if ($user_role['update'][$key] == 1){
			$etr_production_access['update'] = true;
		}
		if ($user_role['delete'][$key] == 1){
			$etr_production_access['delete'] = true;
		}
	}
}

// $lqc_supervisor_oqc_lon_access 	= array("create" => false, 
									// "read" => false,
									// "update" => false,
									// "delete" => false
									// );
// $subsystem_code 			= "OQC";
// $module 					= "Lot-out Notice-LQC Supervisor";
// foreach($user_role['subsystem_code'] as $key => $subsystem_code ){
	// if($subsystem_code == $subsystem_code && $user_role['module'][$key] == $module){ 
		// if ($user_role['create'][$key] == 1){
			// $lqc_supervisor_oqc_lon_access['create'] = true;
		// }
		// if ($user_role['read'][$key] == 1){
			// $lqc_supervisor_oqc_lon_access['read'] = true;
		// }
		// if ($user_role['update'][$key] == 1){
			// $lqc_supervisor_oqc_lon_access['update'] = true;
		// }
		// if ($user_role['delete'][$key] == 1){
			// $lqc_supervisor_oqc_lon_access['delete'] = true;
		// }
	// }
// }
// $lqc_manager_oqc_lon_access 	= array("create" => false, 
									// "read" => false,
									// "update" => false,
									// "delete" => false
									// );
// $subsystem_code 			= "OQC";
// $module 					= "Lot-out Notice-LQC Asst. Manager/Manager";
// foreach($user_role['subsystem_code'] as $key => $subsystem_code ){
	// if($subsystem_code == $subsystem_code && $user_role['module'][$key] == $module){ 
		// if ($user_role['create'][$key] == 1){
			// $lqc_manager_oqc_lon_access['create'] = true;
		// }
		// if ($user_role['read'][$key] == 1){
			// $lqc_manager_oqc_lon_access['read'] = true;
		// }
		// if ($user_role['update'][$key] == 1){
			// $lqc_manager_oqc_lon_access['update'] = true;
		// }
		// if ($user_role['delete'][$key] == 1){
			// $lqc_manager_oqc_lon_access['delete'] = true;
		// }
	// }
// }
// $subsystem_code 			= "OQC";
// $module 					= "Lot-out Notice-Production";
// foreach($user_role['subsystem_code'] as $key => $subsystem_code ){
	// if($subsystem_code == $subsystem_code && $user_role['module'][$key] == $module){ 
		// if ($user_role['create'][$key] == 1){
			// $lqc_production_oqc_lon_access['create'] = true;
		// }
		// if ($user_role['read'][$key] == 1){
			// $lqc_production_oqc_lon_access['read'] = true;
		// }
		// if ($user_role['update'][$key] == 1){
			// $lqc_production_oqc_lon_access['update'] = true;
		// }
		// if ($user_role['delete'][$key] == 1){
			// $lqc_production_oqc_lon_access['delete'] = true;
		// }
	// }
// }
?>

<div class="col-sm-12">
	<!-- Nav tabs -->
	<div class="">
		<ul class="nav nav-tabs" role="tablist">
			<?php 
				$class_active = "active";
				if($etr_production_access['read']){
					echo '<li role="presentation" class="'.$class_active.'"><a href="#etr_production" aria-controls="etr_production" role="tab" data-toggle="tab">Production Section</a></li>';
					$class_active = '';
				}
				// if($lqc_supervisor_oqc_lon_access['read']){
					// echo '<li role="presentation" class="'.$class_active.'"><a href="#lqc_supervisor" aria-controls="lqc_supervisor" role="tab" data-toggle="tab">LQC Supervisor</a></li>';
					// $class_active = '';
				// }
				// if($lqc_manager_oqc_lon_access['read']){
					// echo '<li role="presentation" class="'.$class_active.'"><a href="#lqc_manager" aria-controls="lqc_manager" role="tab" data-toggle="tab">LQC Asst. Manager/Manager</a></li>';
					// $class_active = '';
				// }
				// if($lqc_production_oqc_lon_access['read']){
					// echo '<li role="presentation" class="'.$class_active.'"><a href="#lqc_production" aria-controls="lqc_production" role="tab" data-toggle="tab">Production</a></li>';
					// $class_active = '';
				// }
			?>
			
		</ul>
	</div>
</div>

<!-- Tab panes -->
<div class="tab-content">
	<?php
		$class_active = "active";
				if($etr_production_access['read']){
					echo '<div role="tabpanel" class="tab-pane '.$class_active.'" id="etr_production">	
							<div class="col-sm-12">
								<div class="panel panel-info">
									<div class="panel-heading"><i class="fa fa-puzzle-piece fa-lg"> ETR - Production Section</i></div>
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-6">
												<!-- <button class="btn btn-default fa" id="btn_oqc_lon_search_main"><i class="fa fa-search"></i> Search</button> -->
											</div>
											<div class="col-sm-6">';
												if($etr_production_access['create']){
													echo '<button class="btn btn-primary fa pull-right" id="btn_etr_new"><i class="fa fa-plus"></i> NEW</button>';
												}
											echo '</div>
										</div>
										<div class="row">
											<div class="col-sm-12"><br />
												<table class="table table-striped table-bordered table-condensed" id="tbl_etr_production">
													<thead>
														<th>Status</th>
														<th>Control No.</th>
														<th>Title</th>
														<th>Objective</th>
														<th>Line</th>
														<th>Series Name</th>
														<th>Reason Certification</th>
														<th>Training Date</th>
														<th>Signatories Logs</th>
														<th>Action</th>
													</thead>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>';
						
					$class_active = '';
				}
	?>
</div>

<!---------------------
	Modals - Start 
---------------------->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_etr_production_new">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-upload"></i> New Training / Qualification / Certification</h4>
      </div>
	  <div class="modal-body" style="overflow:inherit;">
		 <form id="frm_etr_production_new">
			<div class="profile-info-title h4" >
				<span class="fa fa-plus-circle"></span> Production Section (Training and Orientation)
			</div>
			<hr class="graph-orange" style="margin-top:0px;">
			<div class="row" style="margin-top:5px;">
				<div class="col-sm-12">
					<div class="alert alert-danger" style="display:none;" role="alert" id="container_etr_production_new_message">					
					</div>
				</div>				
				<div class="col-sm-2">
					<label class="fa fa-md">Training Title: </label>
				</div>
				<div class="col-sm-4">
					<datalist id="dl_training_title">
					</datalist>
					<input type="text" class="form-control" id="training_title" name="training_title" list="dl_training_title">
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Control No.: </label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="control_no" name="control_no" readonly>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<label class="fa fa-md">Objective: </label>
				</div>
				<div class="col-sm-10">
					<textarea class="form-control" id="objective" name="objective"></textarea>
				</div>
			</div>
			<div class="row" style="margin-top:5px;">
				<div class="col-sm-2">
					<label class="fa fa-md">Mechanics: </label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="mechanics" name="mechanics">
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Type of Training: </label>
				</div>
				<div class="col-sm-4">
					<select class="form-control" id="type_of_training" name="type_of_training">
					</select>
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Venue: </label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="venue" name="venue">
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Line: </label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="line" name="line">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<label class="fa fa-md">Series Name: </label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="series_name" name="series_name">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<label class="fa fa-md">Reason for Certification: </label>
				</div>
				<div class="col-sm-10" id="container_reason_certification">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<label class="fa fa-md">Training Category: </label>
				</div>
				<div class="col-sm-10" id="container_training_category">
				</div>
			</div>
			<div class="profile-info-title h4" >
				<span class="fa fa-circle-plus"></span> Operator List
			</div>
			<hr class="graph-orange" style="margin-top:0px;">
			<div class="profile-info-title h4" >
				<span class="fa fa-circle-plus"></span> Signatories
			</div>
			
			<hr class="graph-blue" style="margin-top:0px;">
			<div class="row" style="margin-top:5px;">
				<div class="col-sm-2">
					<label class="fa fa-md">Engineering Section: </label>
				</div>
				<div class="col-sm-4">
					<select class="" id="engr_name" name="engr_name[]" multiple="multiple" style="width:100%;">
					</select>
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Quality Control Section: </label>
				</div>
				<div class="col-sm-4">
					<select class="" id="quality_control" name="quality_control[]" multiple="multiple" style="width:100%;">
					</select>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="submit" class="btn btn-primary fa fa-save"> Save</button>
			<button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"> Close</button>
		  </div>
		</form><!-- /#frm_upload_measdata -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal for system message -->
<div class="modal" tabindex="-1" role="dialog" id="modal_etr_system_message">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fa fa-search"> System Message</h4>
      </div>
      <div class="modal-body">
		<div class="" id="div_system_message"></div>
      </div>
      <div class="modal-footer">
        <div id="div_countdown"></div>
		<!--<button type="submit" class="btn btn-primary fa fa-search"> Search</button>-->
        <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"> Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal" tabindex="-1" role="dialog" id="modal_etr_advance_search">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fa fa-search"> Advance Search</h4>
      </div>
	  <form id="frm_oqc_lon_advance_search">
      <div class="modal-body">
		<button type="button" class="btn btn-default fa pull-left fa fa-eraser" id="btn_dir_as_reset"> Reset Search Value</button>
		<button type="button" class="btn btn-primary fa pull-right fa fa-plus" id="btn_dir_as_add"> Add</button><br /><br />
		<table class="table" id="tbl_oqc_lon_advance_search">
			<tbody>
			</tbody>
		</table>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default fa fa-search"> Search</button>
        <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"> Close</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->