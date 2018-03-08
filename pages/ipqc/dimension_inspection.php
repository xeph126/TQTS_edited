<?php
/* get user role */
$ipqc_di_access 	    = array("create" => false, 
									"read" => false,
									"update" => false,
									"delete" => false
									);
$subsystem_code 			= "IPQC";
$module 					= "Dimension Inspection Result";
foreach($user_role['subsystem_code'] as $key => $subsystem_code_value ){
	if($subsystem_code == $subsystem_code_value && $user_role['module'][$key] == $module){ 
		if ($user_role['create'][$key] == 1){
			$ipqc_di_access['create'] = true;
		}
		if ($user_role['read'][$key] == 1){
			$ipqc_di_access['read'] = true;
		}
		if ($user_role['update'][$key] == 1){
			$ipqc_di_access['update'] = true;
		}
		if ($user_role['delete'][$key] == 1){
			$ipqc_di_access['delete'] = true;
		}
	}
}

?>

<div class="col-sm-12">
	<div class="panel panel-info">
		<div class="panel-heading"><i class="fa fa-puzzle-piece fa-lg"> Dimension Inspection Result</i></div>
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-8">
					<button type="button" class="btn btn-default fa" id="btn_dir_search_main"><i class="fa fa-search"></i> Search</button>
				</div>
				<div class="col-sm-4">									
					<?php
						if($ipqc_di_access['create']){
							echo '<button type="button" class="btn btn-primary fa fa-plus pull-right" id="btn_dir_new_main" style="margin-right:3px;"> New Dimension</button>';
						}
					?>	
				</div><br><br>
				<div class="col-sm-12">
					<table class="table table-striped table-bordered table-condensed" id="tbl_dimension_inspection">
						<thead>
							<th>IC</th>
							<th>Date</th>
							<th>PO Number</th>
							<th>Category</th>
							<th>Attachment</th>
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

<div class="modal fade" tabindex="-1" role="dialog" id="modal_dir_new_inspection">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fa fa-edit"> New Dimension Inspection</h4>
      </div>
	  
      <div class="modal-body">		
		<div class="row">
			<div class="col-sm-12">
				<div class="alert alert-danger" style="display:none" role="alert">			
                </div>		
			</div>
		</div>	
		<form id="frm_dir_save_new_inspection">
		<div class="row">			
			<div class="col-sm-2 col-sm-offset-6">
				<label class="fa fa-md">Inspection File: </label>
			</div>
			<div class="col-sm-4">
				<input type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="form-control" id="inspection_file" name="inspection_file" required>
			</div>
			<div class="col-sm-2">
				<label class="fa fa-md">IC: </label>
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="ic" name="ic" required>
			</div>
			<div class="col-sm-2">
				<label class="fa fa-md">Inspection Date: </label>
			</div>
			<div class="col-sm-4">
				<input type="date" class="form-control" id="inspection_date" name="inspection_date" max="<?php echo date('Y-m-d'); ?>" required>
			</div>
			<div class="col-sm-2">
				<label class="fa fa-md">PO Number: </label>
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="po_number" name="po_number" list="list_po_number" required>
				<datalist id="list_po_number"></datalist>
			</div>
			<div class="col-sm-2">
				<label class="fa fa-md">Category: </label>
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="category" name="category" required>
			</div>
		</div>
		<div class="row">	
			<div class="col-sm-12">
				<label class="fa fa-md">Remarks: </label>
			</div>
			<div class="col-sm-12">
				<textarea class="form-control" id="remarks" name="remarks"></textarea>
			</div>		
		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary fa fa-save"> Save</button>
        <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"> Close</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="modal_dir_edit_inspection">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fa fa-edit" id="lbl_header"> Edit Dimension Inspection</h4>
      </div>
	  
      <div class="modal-body">		
		<div class="row">
			<div class="col-sm-12">
				<div class="alert alert-danger" style="display:none" role="alert">			
                </div>		
			</div>
		</div>	
		<form id="frm_dir_update_inspection">
		<div class="row">	
			<div class="col-sm-2" id="div_view_label">
				<label class="fa fa-md">Inspection File: </label>
			</div>
			<div class="col-sm-4" id="div_view_file">
				<a id="btn_dl_inspection_file" target="_blank"></a>
			</div>		
			<div class="col-sm-2" id="div_edit_label">
				<label class="fa fa-md"><input type="checkbox" id="chk_reselect_file"> Re-select File: </label>
			</div>
			<div class="col-sm-4" id="div_edit_file">
				<input type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="form-control" id="inspection_file" name="inspection_file" readOnly>
			</div>		
		</div>
		<div class="row">	
			<div class="col-sm-2">
				<label class="fa fa-md">IC: </label>
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="ic" name="ic" required>
			</div>
			<div class="col-sm-2">
				<label class="fa fa-md">Inspection Date: </label>
			</div>
			<div class="col-sm-4">
				<input type="date" class="form-control" id="inspection_date" name="inspection_date" max="<?php echo date('Y-m-d'); ?>" required>
			</div>
			<div class="col-sm-2">
				<label class="fa fa-md">PO Number: </label>
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="po_number" name="po_number" list="list_po_number2" required>
				<datalist id="list_po_number2"></datalist>
			</div>
			<div class="col-sm-2">
				<label class="fa fa-md">Category: </label>
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="category" name="category" required>
			</div>
		</div>
		<div class="row">	
			<div class="col-sm-12">
				<label class="fa fa-md">Remarks: </label>
			</div>
			<div class="col-sm-12">
				<textarea class="form-control" id="remarks" name="remarks"></textarea>
			</div>		
		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary fa fa-save"> Save</button>
        <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"> Close</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="modal_dir_advance_search">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fa fa-search"> Advance Search</h4>
      </div>
	  <form id="frm_dir_advance_search">
      <div class="modal-body">
		<button type="button" class="btn btn-default fa pull-left fa fa-eraser" id="btn_dir_as_reset"> Reset Search Value</button>
		<button type="button" class="btn btn-primary fa pull-right fa fa-plus" id="btn_dir_as_add"> Add</button>
		<table class="table" id="tbl_dir_advance_search">
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