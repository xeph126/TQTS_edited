<?php
/* get user role */
$ipqc_vi_access 	    = array("create" => false, 
									"read" => false,
									"update" => false,
									"delete" => false
									);
$subsystem_code 			= "IPQC";
$module 					= "Visual Inspection Result";
foreach($user_role['subsystem_code'] as $key => $subsystem_code_value ){
	if($subsystem_code == $subsystem_code_value && $user_role['module'][$key] == $module){ 
		if ($user_role['create'][$key] == 1){
			$ipqc_vi_access['create'] = true;
		}
		if ($user_role['read'][$key] == 1){
			$ipqc_vi_access['read'] = true;
		}
		if ($user_role['update'][$key] == 1){
			$ipqc_vi_access['update'] = true;
		}
		if ($user_role['delete'][$key] == 1){
			$ipqc_vi_access['delete'] = true;
		}
	}
}
?>

<div id="div_vir_new">
	<form id="frm_vir_new_ilqcr" method="post">
		<div class="row">
			<div class="col-sm-6">
			</div>
			<div class="col-sm-6">
				<button type="button" class="btn btn-default fa pull-right" id="btn_vir_new_close"><i class="fa fa-remove"></i> Close</button>
			</div>
		</div>
		<div class="panel panel-primary" style="margin-top:2px;">
			<div class="panel-heading"><i class="fa fa-plus fa-lg"> In-Line Quality Control Report <span id="spn_operator_type"></span></i></div>
			<div class="panel-body">
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-1">
								<label class="control-label fa-sm">LINE:</label>
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control condensed" id="line" name="line" required>
							</div>
							<div class="col-sm-1">
								<label class="control-label fa-sm">STATION:</label>
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control condensed" id="station" name="station" required>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<label class="control-label fa-sm">WORKWEEK:</label>
							</div>
							<div class="col-sm-2">
								<input type="text" class="form-control condensed" id="workweek" name="workweek" readonly>
							</div>
							<div class="col-sm-2">
								<label class="control-label fa-sm">SHIFT:</label>
							</div>
							<div class="col-sm-2">
								<input type="text" class="form-control condensed" maxlength="1" id="shift" name="shift" required>
							</div>
							<div class="col-sm-1">
								<label class="control-label fa-sm">CHECKED BY:</label>
							</div>
							<div class="col-sm-3">
								<select class="form-control condensed" id="checked_by" name="checked_by">
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="modal-body" style="overflow:scroll;">
						<div id="div_ipqr_oo_table">
							<button type="submit" class="btn btn-primary fa fa-plus pull-right" id="btn_vir_new_add_monitoring"> Add Monitoring</button>
							<table class="table table-bordered table-condensed" id="tbl_vir_oo_new_monitoring">
								<thead>
									<tr>
										<th rowspan="2"><center>DATE / OPTR NAME</center></th>
										<th rowspan="2"><center>SERIES / P.O. NO. / TRACECODE</center></th>
										<th colspan="4"><center>MONITORING TIME</center></th>
										<th colspan="4"><center>MONITORING TIME</center></th>
										<th colspan="4"><center>MONITORING TIME</center></th>
										<th colspan="4"><center>MONITORING TIME</center></th>
										<th colspan="2"><center>RESULT MONITORING</center></th>
										<th rowspan="2"><center>FEEDBACK REPORT</center></th>
									</tr>
									<tr>
										<th><center>SS</center></th>
										<th><center>AC / REJ.</center></th>
										<th><center>JUDGEMENT</center></th>
										<th><center>QC NAME</center></th>
										<th><center>SS</center></th>
										<th><center>AC / REJ.</center></th>
										<th><center>JUDGEMENT</center></th>
										<th><center>QC NAME</center></th>
										<th><center>SS</center></th>
										<th><center>AC / REJ.</center></th>
										<th><center>JUDGEMENT</center></th>
										<th><center>QC NAME</center></th>
										<th><center>SS</center></th>
										<th><center>AC / REJ.</center></th>
										<th><center>JUDGEMENT</center></th>
										<th><center>QC NAME</center></th>
										<th><center>Reference Conformance</center></th>
										<th><center>Product Conformance</center></th>
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
	</form>
</div>

<div class="col-sm-12" id="div_vir_view">
	<form id="frm_vir_view_ilqcr" method="post">
	<div class="row">
		<div class="col-sm-6" id="div_vir_view_status">
		</div>
		<div class="col-sm-6">
			<button type="button" class="btn btn-default fa pull-right" id="btn_vir_view_close"><i class="fa fa-remove"></i> Close</button>
			<button type="button" class="btn btn-warning fa pull-right" id="btn_vir_view_send"><i class="fa fa-envelope-o"></i> Send for Approval</button>
			<button type="button" class="btn btn-primary fa pull-right" id="btn_vir_view_save"><i class="fa fa-save"></i> Update</button>
			<button type="button" class="btn btn-danger fa pull-right" id="btn_vir_view_disapprove"><i class="fa fa-thumbs-o-down"></i> Disapprove</button>
			<button type="button" class="btn btn-success fa pull-right" id="btn_vir_view_approve"><i class="fa fa-thumbs-o-up"></i> Approve</button>
		</div>
	</div>
	<div class="panel panel-primary" style="margin-top:2px;">
		<div class="panel-heading"><i class="fa fa-edit fa-lg"> Update In-Line Quality Control Report (for Old Operators)</i></div>
		<div class="panel-body">
			<div class="panel panel-primary">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-1">
							<label class="control-label fa-sm">LINE:</label>
						</div>
						<div class="col-sm-3">
							<input type="text" class="form-control condensed" id="line" name="line" required>
						</div>
						<div class="col-sm-1">
							<label class="control-label fa-sm">STATION:</label>
						</div>
						<div class="col-sm-3">
							<input type="text" class="form-control condensed" id="station" name="station" required>
						</div>
						<div class="col-sm-1">
							<label class="control-label fa-sm">CHECKED BY:</label>
						</div>
						<div class="col-sm-3">
							<select class="form-control condensed" id="checked_by" name="checked_by">
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-2">
							<label class="control-label fa-sm">WORKWEEK:</label>
						</div>
						<div class="col-sm-2">
							<input type="text" class="form-control condensed" id="workweek" name="workweek" readonly>
						</div>
						<div class="col-sm-2">
							<label class="control-label fa-sm">SHIFT:</label>
						</div>
						<div class="col-sm-2">
							<input type="text" class="form-control condensed" maxlength="1" id="shift" name="shift" required>
						</div>
						<div class="col-sm-1" id="div_vir_view_remarks_label">
							<label class="control-label fa-sm">REMARKS (CHECKED BY):</label>
						</div>
						<div class="col-sm-3" id="div_vir_view_remarks_textarea">
							<textarea class="form-control condensed" id="checked_by_remarks" name="checked_by_remarks">
							</textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="row container-fluid">
						<div class="panel panel-primary" style="margin-bottom:0px;">
							<div class="panel-heading" style="padding:0px;padding-left:10px;">
								<label class="control-label">SUMMARY OF PRODUCT SAMPLING</label>
							</div>
							<div class="modal-body">
								<table class="table table-bordered table-condensed table-striped" id="tbl_vir_edit_product_sampling">
									<thead>
										<tr>
											<th>Date</th>
											<th>TTL SAMPLES</th>
											<th>TTL REJ.</th>
											<th>DPPM</th>
											<th>REMARKS</th>
											<th>DEFECTS</th>
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
			<div class="row" style="margin-top:20px;">
				<div class="col-sm-12">
					<div class="row container-fluid">
						<div class="panel panel-primary">
							<div class="modal-body" style="overflow:scroll;">
								<button type="submit" class="btn btn-primary fa fa-plus pull-right" id="btn_vir_edit_add_monitoring"> Add Monitoring</button>
								<h6>*Highlighted row is editable. Double click the row to update.</h6>
								<div id="container_vir_tbl_new">
									<table class="table table-bordered table-condensed" id="tbl_vir_edit_monitoring_new">
										<thead>
											<tr>
												<th rowspan="2" style="display:none">PKID</th>
												<th rowspan="2"><center>DATE / OPTR NAME</center></th>
												<th rowspan="2"><center>SERIES / P.O. NO. / TRACECODE</center></th>
												<th colspan="4"><center>MONITORING TIME: <span style="text-decoration: underline;" id="monitoring_time1"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time2"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time3"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time4"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time5"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time6"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time7"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time8"></span></center></th>
												<th colspan="2"><center>RESULT MONITORING</center></th>
												<th rowspan="2"><center>QCFR</center></th>
											</tr>
											<tr>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>Reference Conformance</center></th>
												<th><center>Product Conformance</center></th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
								<div id="container_vir_tbl_old">
									<table class="table table-bordered table-condensed" id="tbl_vir_edit_monitoring_old">
										<thead>
											<tr>
												<th rowspan="2" style="display:none">PKID</th>
												<th rowspan="2"><center>DATE / OPTR NAME</center></th>
												<th rowspan="2"><center>SERIES / P.O. NO. / TRACECODE</center></th>
												<th colspan="4"><center>MONITORING TIME: <span style="text-decoration: underline;" id="monitoring_time1"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time2"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time3"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time4"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time5"></span></center></th>
												<th colspan="4"><center>MONITORING TIME <span style="text-decoration: underline;" id="monitoring_time6"></span></center></th>
												<th colspan="2"><center>RESULT MONITORING</center></th>
												<th rowspan="2"><center>QCFR</center></th>
											</tr>
											<tr>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>SS</center></th>
												<th><center>AC / REJ.</center></th>
												<th><center>JUDGEMENT</center></th>
												<th><center>QC NAME</center></th>
												<th><center>Reference Conformance</center></th>
												<th><center>Product Conformance</center></th>
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
		</div>
	</div>
	</form>
</div>

<div class="col-sm-12" id="vir_main">
	<div class="panel panel-info">
		<div class="panel-heading"><i class="fa fa-puzzle-piece fa-lg"> Visual Inspection Result</i></div>
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-8">
					<button type="button" class="btn btn-default fa" id="btn_vir_search_main"><i class="fa fa-search"></i> Search</button>
				</div>
				<div class="col-sm-4" id="div_vir_new_button">															
					<?php
						if($ipqc_vi_access['create']){
							echo '
								<div class="btn-group pull-right">
								  <button type="button" class="btn btn-primary fa dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="fa fa-plus"> </span> New Monitoring Report <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu">
									<li><a href="#" id="new"> New Operator</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#" id="old"> Old Operator</a></li>
								  </ul>
								</div>
							';
						}
					?>
					<button type="button" class="btn btn-success fa fa-file-excel-o pull-right" id="btn_vir_report_main" style="margin-right:3px;"> Report</button>
				</div><br><br>
				<div class="col-sm-12">
					<table class="table table-striped table-bordered table-condensed" id="tbl_visual_inspection" style="">
						<thead>
							<th>Status</th>
							<th>Line #</th>
							<th>Station</th>
							<th>FY #</th>
							<th>WW #</th>
							<th>Shift</th>
							<th>Checked By / Date:</th>
							<th>Last update</th>
							<th>Action</th>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>

<!---------------------
	Modals - Start 
---------------------->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_vir_advance_search">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fa fa-search"> Advance Search</h4>
      </div>
	  <form id="frm_vir_advance_search">
      <div class="modal-body">
		<button type="button" class="btn btn-default fa pull-left fa fa-eraser" id="btn_vir_as_reset"> Reset Search Value</button>
		<button type="button" class="btn btn-primary fa pull-right fa fa-plus" id="btn_vir_as_add"> Add</button>
		<table class="table" id="tbl_vir_advance_search">
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

<div class="modal fade" tabindex="-1" role="dialog" id="modal_vir_add_monitoring">
  <div class="modal-dialog" role="document" style="width:70%;">
    <div class="modal-content">
	<form id="frm_vir_new_monitoring" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="fa fa-plus"></span> Add Monitoring</h4>
      </div>
      <div class="modal-body">
	    <div class="alert alert-success" role="alert" style="display:none;" id="div_vir_monitoring_message"></div>
		<div class="row">
			<div class="panel panel-default">
			  <div class="panel-heading"> Main Info: </div>
			  <div class="panel-body">
				<div class="row">
					<input type="hidden" class="form-control" id="pkid_visual_inspection_details" name="pkid_visual_inspection_details">
					<div class="col-sm-4">
						<label class="fa fa-md">Date: </label>
					</div>
					<div class="col-sm-8">
						<input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="date_inspected" name="date_inspected" readonly>
					</div>
					<div class="col-sm-4">
						<label class="fa fa-md">Operator Name: </label>
					</div>
					<div class="col-sm-8">
						<select  class="chosen-select" id="operator_name" name="operator_name">
						</select>
					</div>
					<div class="col-sm-4">
						<label class="fa fa-md">Series: </label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="series_name" name="series_name" list="list_vir_add_m_series_name">
						<datalist id="list_vir_add_m_series_name"></datalist>
					</div>
					<div class="col-sm-4">
						<label class="fa fa-md">PO Number: </label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="po_number" name="po_number" list="list_vir_add_m_po_no" required>
						<datalist id="list_vir_add_m_po_no"></datalist>
					</div>
					<div class="col-sm-4">
						<label class="fa fa-md">Tracecode: </label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="tracecode" name="tracecode">
					</div>
				</div>
			  </div>
			</div>
			<div class="panel panel-info">
			  <div class="panel-heading"> Monitoring Time: <input type="text" style="font-weight:bold;width:150px;background: transparent;border: none;" name="current_monitoring_time" id="current_monitoring_time" readonly></div>
			  <div class="panel-body">
				<div class="row">
					<div class="col-sm-2 col-sm-offset-6">
						<label class="fa fa-md">SS: </label>
					</div>
					<div class="col-sm-4">
						<input type="number" class="form-control" id="ss" name="ss" required>
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Accept: </label>
					</div>
					<div class="col-sm-4">
						<input type="number" step="1" class="form-control" id="accept" name="accept" min="0" required>
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Reject: </label>
					</div>
					<div class="col-sm-4">
						<input type="number" class="form-control" id="reject" name="reject" min="0" readonly>
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Judgement: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="judgement" name="judgement" readonly>
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">QC Name: </label>
					</div>
					<div class="col-sm-4">
						<select class="form-control" id="qc_name" name="qc_name" required>
						</select>
					</div>
					<div class="col-sm-12">
						<label class="fa fa-md">Reference Conformance: </label>
					</div>
					<div class="col-sm-12">
						<textarea class="form-control" id="reference_conformance" name="reference_conformance"></textarea>
					</div>
					<div class="col-sm-12">
						<label class="fa fa-md">Remarks / Mode of Defects: </label>
					</div>
					<div class="col-sm-12">
						<textarea class="form-control" id="remarks" name="remarks"></textarea>
					</div>
				</div>
			  </div>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary fa fa-save"> Add</button>
        <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"> Close</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="modal_vir_readd_monitoring">
  <div class="modal-dialog" role="document" style="width:70%;">
    <div class="modal-content">
	<form id="frm_vir_readd_monitoring" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="fa fa-plus"></span> Add Monitoring</h4>
      </div>
      <div class="modal-body">
		<div class="alert alert-success" role="alert" style="display:none;" id="div_vir_monitoring_message"></div>
		<div class="panel panel-default">
		  <div class="panel-heading"> Main Info: </div>
		  <div class="panel-body">
			<div class="row">
				<input type="hidden" class="form-control" id="pkid_visual_inspection_details" name="pkid_visual_inspection_details">
				<div class="col-sm-4">
					<label class="fa fa-md">Date: </label>
				</div>
				<div class="col-sm-8">
					<input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="date_inspected" name="date_inspected" readonly>
				</div>
				<div class="col-sm-4">
					<label class="fa fa-md">Operator Name: </label>
				</div>
				<div class="col-sm-8">
					<select class="chosen-select" id="operator_name" name="operator_name" required>
					</select>
				</div>
				<div class="col-sm-4">
					<label class="fa fa-md">Series: </label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="series_name" name="series_name" list="list_vir_readd_m_series_name">
					<datalist id="list_vir_readd_m_series_name"></datalist>
				</div>
				<div class="col-sm-4">
					<label class="fa fa-md">PO Number: </label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="po_number" name="po_number" list="list_vir_readd_m_po_no" required>
					<datalist id="list_vir_readd_m_po_no"></datalist>
				</div>
				<div class="col-sm-4">
					<label class="fa fa-md">Tracecode: </label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="tracecode" name="tracecode">
				</div>
			</div>
		  </div>
		</div>
		<div class="panel panel-info">
		  <div class="panel-heading"> Monitoring Time: <input type="text" style="font-weight:bold;width:150px;background: transparent;border: none;" name="current_monitoring_time" id="current_monitoring_time" readonly></div>
		  <div class="panel-body">
			<div class="row">
				<div class="col-sm-2 col-sm-offset-6">
					<label class="fa fa-md">SS: </label>
				</div>
				<div class="col-sm-4">
					<input type="number" class="form-control" id="ss" name="ss" required>
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Accept: </label>
				</div>
				<div class="col-sm-4">
					<input type="number" step="1" class="form-control" id="accept" name="accept" min="0" required>
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Reject: </label>
				</div>
				<div class="col-sm-4">
					<input type="number" class="form-control" id="reject" name="reject" min="0" readonly>
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Judgement: </label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="judgement" name="judgement" readonly>
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">QC Name: </label>
				</div>
				<div class="col-sm-4">
					<select class="form-control" id="qc_name" name="qc_name" required>
					</select>
				</div>
				<div class="col-sm-12">
					<label class="fa fa-md">Reference Conformance: </label>
				</div>
				<div class="col-sm-12">
					<textarea class="form-control" id="reference_conformance" name="reference_conformance"></textarea>
				</div>
				<div class="col-sm-12">
					<label class="fa fa-md">Remarks / Mode of Defects:</label>
				</div>
				<div class="col-sm-12">
					<textarea class="form-control" id="remarks" name="remarks"></textarea>
				</div>
			</div>
		  </div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary fa fa-save"> Add</button>
        <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"> Close</button>
      </div>
    </form><!-- /.modal-content -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="modal_vir_edit_monitoring">
   <div class="modal-dialog" role="document" style="width:70%;">
      <div class="modal-content">
         <form id="frm_vir_edit_monitoring" method="post">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title"><span class="fa fa-plus"></span> Update Monitoring</h4>
            </div>
            <div class="modal-body">
               <div class="panel panel-default" id="">
                  <div class="panel-heading"> Main Info: </div>
                  <div class="panel-body">
                     <div class="row">
                        <input type="hidden" class="form-control" id="pkid_visual_inspection_details" name="pkid_visual_inspection_details">
                        <div class="col-sm-2">
                           <label class="fa fa-md">Date: </label>
                        </div>
                        <div class="col-sm-4">
                           <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="date_inspected" name="date_inspected" readonly>
                        </div>
                        <div class="col-sm-2">
                           <label class="fa fa-md">Operator Name: </label>
                        </div>
                        <div class="col-sm-4">
                           <select class="chosen-select" id="operator_name" name="operator_name" required>
                           </select>
                        </div>
                        <div class="col-sm-2">
                           <label class="fa fa-md">Series: </label>
                        </div>
                        <div class="col-sm-4">
                           <input type="text" class="form-control" id="series_name" name="series_name" list="list_vir_edit_m_series_name">
                           <datalist id="list_vir_edit_m_series_name"></datalist>
                        </div>
                        <div class="col-sm-2">
                           <label class="fa fa-md">PO Number: </label>
                        </div>
                        <div class="col-sm-4">
                           <input type="text" class="form-control" id="po_number" name="po_number" list="list_vir_edit_m_po_no" required>
                           <datalist id="list_vir_edit_m_po_no"></datalist>
                        </div>
                        <div class="col-sm-2">
                           <label class="fa fa-md">Tracecode: </label>
                        </div>
                        <div class="col-sm-4">
                           <input type="text" class="form-control" id="tracecode" name="tracecode">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-4">
                     <label class="fa fa-md">Select Monitoring Time: </label>
                  </div>
                  <div class="col-sm-8">
                     <select class="form-control" id="monitoring_time" name="monitoring_time" required>
                     </select>
                  </div>
               </div>
               <div class="panel panel-info" id="container_vir_edit_monitoring_time">
                  <div class="panel-heading"> Monitoring Time: <input type="text" style="font-weight:bold;width:150px;background: transparent;border: none;" name="current_monitoring_time" id="current_monitoring_time" readonly></div>
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-sm-2 col-sm-offset-6">
                           <label class="fa fa-md">SS: </label>
                        </div>
                        <div class="col-sm-4">
                           <input type="number" class="form-control" id="ss" name="ss" required>
                        </div>
                        <div class="col-sm-2">
                           <label class="fa fa-md">Accept: </label>
                        </div>
                        <div class="col-sm-4">
                           <input type="number" step="1" class="form-control" id="accept" name="accept" min="0" required>
                        </div>
                        <div class="col-sm-2">
                           <label class="fa fa-md">Reject: </label>
                        </div>
                        <div class="col-sm-4">
                           <input type="number" class="form-control" id="reject" name="reject" min="0" readonly>
                        </div>
                        <div class="col-sm-2">
                           <label class="fa fa-md">Judgement: </label>
                        </div>
                        <div class="col-sm-4">
                           <input type="text" class="form-control" id="judgement" name="judgement" readonly>
                        </div>
                        <div class="col-sm-2">
                           <label class="fa fa-md">QC Name: </label>
                        </div>
                        <div class="col-sm-4">
                           <select class="form-control" id="qc_name" name="qc_name" required>
                           </select>
                        </div>
                        <div class="col-sm-12">
                           <label class="fa fa-md">Reference Conformance: </label>
                        </div>
                        <div class="col-sm-12">
                           <textarea class="form-control" id="reference_conformance" name="reference_conformance"></textarea>
                        </div>
                        <div class="col-sm-12">
                           <label class="fa fa-md">Remarks / Mode of Defects: </label>
                        </div>
                        <div class="col-sm-12">
                           <textarea class="form-control" id="remarks" name="remarks"></textarea>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary fa fa-save" id="btn_vir_edit_monitoring"> Update</button>
               <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"> Close</button>
            </div>
         </form>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="modal_vir_confirmation_message">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fa fa-envelope"> System Message</h4>
      </div>
	  <form id="frm_confirmation_message">
      <div class="modal-body">
        <input type="hidden" id="vir_cm_action">
        <input type="hidden" id="status" name="status">
        <input type="hidden" id="status_num" name="status_num">
        <div class="alert alert-success" role="alert" id="div_vir_confirmation_message"></div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success fa fa-thumbs-up-o"> Send</button>
        <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"> No</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="modal_vir_message">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fa fa-envelope"> System Message</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-success" role="alert" id="div_vir_message"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"> Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->