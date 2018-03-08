<div class="col-sm-12">
	<div class="panel panel-info">
		<div class="panel-heading"><i class="fa fa-file fa-lg"> Special Acceptance</i></div>
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-9">
					<button class="btn btn-default fa fa-search" id="btn_sa_advanced_search"> Search</button>
				</div>
				<div class="col-sm-3">
					<button class="btn btn-primary fa fa-plus pull-right" id="btn_sa"> New Special Acceptance</button>
				</div>	
			</div><br />
			<div class="row">
				<div class="col-sm-12">
					<table class="table table-condensed table-bordered" id="tbl_special_acceptance">
						<thead>
							<tr>
								<th>Status</th>
								<th>Control Number</th>
								<th>Parts and Product Details</th>
								<th>Judgement Application</th>
								<th>Judged By</th>
								<th>Notation / Remarks</th>
								<th><span class="fa fa-attachment"></span> File Attachment</th>
								<th><span class="fa fa-cogs"></span></th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_sa">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-plus"></i> New Special Acceptance</h4>
      </div>
	  <form id="frm_sa" method="post" enctype="multipart/form-data">
		  <div class="modal-body">
			<div class="row">
				<div class="col-sm-12">
					<div class="alert alert-danger" style="display:none;" role="alert" id="container_upload_sa_message">					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 col-sm-offset-6">
					<label class="fa fa-md">Control No: </label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="txt_control_number" name="control_number"  readonly>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<label class="fa fa-md">Category: </label>
				</div>
				<div class="col-sm-4">
					<select class="form-control" id="txt_category" name="category" required>
						<option value=""></option>
						<option value="Parts">Parts</option>
						<option value="Device">Device</option>
					</select>
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Choose Image: </label>
				</div>
				<div class="col-sm-4">
					<input type="file" class="form-control" id="" name="file_sa" accept="image/jpeg, image/png" required>
				</div>
			</div>
			<div class="row">
				<div id="container_parts">
					<div class="col-sm-2">
						<label class="fa fa-md">Part Code: </label>
					</div>
					<div class="col-sm-4">
						<datalist id="list_sa_part_code"></datalist>
						<input list="list_sa_part_code" type="text" class="form-control" id="" name="part_code">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Parts Affected: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="parts_affected_parts">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Problem: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="problem_parts">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Supplier: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="supplier" list="">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Lot Number: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="lot_number" list="">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Quantity: </label>
					</div>
					<div class="col-sm-4">
						<input type="number" class="form-control" id="" name="quantity">
					</div>
				</div>
				<div id="container_device">
					<div class="col-sm-2">
						<label class="fa fa-md">PO #: </label>
					</div>
					<div class="col-sm-4">
						<datalist id="list_sa_po"></datalist>
						<input list="list_sa_po" type="text" class="form-control" id="" name="po_number">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">PO Qty: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="po_qty" readonly>
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Device Name: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="device_name" readonly>
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Problem: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="problem_device">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Parts Affected: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="parts_affected_device">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Affected Qty: </label>
					</div>
					<div class="col-sm-4">
						<input type="number" class="form-control" id="" name="affected_quantity">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Customer Name: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="customer_name">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Shipment Date: </label>
					</div>
					<div class="col-sm-4">
						<input type="date" class="form-control" id="" name="shipment_date">
					</div>
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Drawing Number: </label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="" name="drawing_number">
				</div>
              </div>
				<div class="row">
					<div class="col-sm-2">
						<label class="fa fa-md">Other Details: </label>
					</div>
					<div class="col-sm-10">
						<textarea class="form-control" name="other_details"></textarea>
					</div>
					<div class="col-sm-2">
							<label class="fa fa-md">Judged By: </label>
					</div>
					<div class="col-sm-4">
						<select class="form-control" name="judged_by" required>
							<option value=""></option>
							<option value="YEC QC">YEC QC</option>
							<option value="PMI Technical Adviser">PMI Technical Adviser</option>
							<option value="Others">Others, please specify</option>
						</select>
					</div>
					<div id="container_approver_name">
						<div class="col-sm-2">
								<label class="fa fa-md">Select Approver: </label>
						</div>
						<div class="col-sm-4">
						</div>
					</div>
				</div>
				<div class="row" id="container_disposition">
					<div class="col-sm-2">
						<label class="fa fa-md">Judgement Application: </label>
					</div>
					<div class="col-sm-4">
						<select class="form-control" name="judgement_application" required>
							<option value=""></option>
							<option value="All incoming Parts">All incoming Parts</option>
							<option value="All incoming P.O.">All incoming P.O.</option>
							<option value="Specific Parts Lot no.">Specific Parts Lot no.</option>
							<option value="Specific Product P.O. no.">Specific Product P.O. no.</option>
							<option value="Others">Others, please specify</option>
						</select>
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Remarks: </label>
					</div>
					<div class="col-sm-10">
						<textarea class="form-control" id="" name="notations_remarks"></textarea>
					</div>
				</div>
				<div class="row">
				
				</div>
		   </div>
		  <div class="modal-footer">
			<!--<button type="button" id="btn_report_ordinates" class="btn btn-primary fa fa-"> Ordinates</button>-->
			<button type="submit" class="btn btn-primary fa fa-save"> Save</button>
			<button type="button" class="btn btn-default fa" data-dismiss="modal"> Close</button>
		  </div>
		</form><!-- /#frm_upload_measdata -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="modal_sa_edit">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Special Acceptance</h4>
      </div>
	  <form id="frm_sa_edit" method="post" enctype="multipart/form-data">
		  <div class="modal-body">
			<div class="row">
				<div class="col-sm-12">
					<div class="alert alert-danger" style="display:none;" role="alert" id="container_upload_sa_message">					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<label class="fa fa-md">Status: </label>
				</div>
				<div class="col-sm-4">
					<span class="badge" id="badge_status"> Open</span>
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Control #: </label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="" name="control_number" readonly>
				</div>
			</div><br />
			<div class="row">
				<div class="col-sm-2">
					<label class="fa fa-md">Category: </label>
				</div>
				<div class="col-sm-4">
					<select class="form-control" id="txt_category" name="category" required>
						<option value=""></option>
						<option value="Parts">Parts</option>
						<option value="Device">Device</option>
					</select>
				</div>
				<div id="container_uploaded_image">
					<div class="col-sm-2">
						<label class="fa fa-md">Uploaded Image: </label>
					</div>
					<div class="col-sm-4">
						<a href="#" id="uploaded_image" target="_blank"></a>
						<button type="button" class="btn btn-default fa fa-image pull-right" id="replace_image"> Replace</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="container_parts">
					<div class="col-sm-2">
						<label class="fa fa-md">Part Code: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="part_code">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Parts Affected: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="parts_affected_parts">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Problem: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="problem_parts">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Supplier: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="supplier" list="">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Lot Number: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="lot_number" list="">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Quantity: </label>
					</div>
					<div class="col-sm-4">
						<input type="number" class="form-control" id="" name="quantity">
					</div>
				</div>
				<div id="container_device">
					<div class="col-sm-2">
						<label class="fa fa-md">PO #: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="po_number">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">PO Qty: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="po_qty" readonly>
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Device Name: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="device_name" readonly>
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Problem: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="problem_device">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Parts Affected: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="parts_affected_device">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Affected Qty: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="affected_quantity">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Customer Name: </label>
					</div>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="" name="customer_name">
					</div>
					<div class="col-sm-2">
						<label class="fa fa-md">Shipment Date: </label>
					</div>
					<div class="col-sm-4">
						<input type="date" class="form-control" id="" name="shipment_date">
					</div>
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Drawing Number: </label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="" name="drawing_number">
				</div>
			  </div>
			  <div class="row">
				<div class="col-sm-2">
					<label class="fa fa-md">Other Details: </label>
				</div>
				<div class="col-sm-10">
					<textarea class="form-control" name="other_details"></textarea>
				</div>
				<div class="col-sm-2">
					<label class="fa fa-md">Judged By: </label>
				</div>
				<div class="col-sm-4">
					<select class="form-control" name="judged_by" required>
						<option value=""></option>
						<option value="YEC QC">YEC QC</option>
						<option value="PMI Technical Adviser">PMI Technical Adviser</option>
						<option value="Others">Others, please specify</option>
					</select>
				</div>
				<div id="container_approver_name">
					<div class="col-sm-2">
							<label class="fa fa-md">Select Approver: </label>
					</div>
					<div class="col-sm-4">
					</div>
				</div>
			  </div>
			  <div class="row" id="container_yec_disposition">
					<div class="col-sm-2">
						<label class="fa fa-md">YEC QC Upload: </label>
					</div>
					<div class="col-sm-4">
						<input type="file" class="form-control" name="file_yec_disposition">
					</div>
			  </div>
			  <div class="row" id="container_disposition">
				<div class="col-sm-2">
					<label class="fa fa-md">Judgement Application: </label>
				</div>
				<div class="col-sm-4">
					<select class="form-control" name="judgement_application">
						<option value=""></option>
						<option value="All incoming Parts">All incoming Parts</option>
						<option value="All incoming P.O.">All incoming P.O.</option>
						<option value="Specific Parts Lot no.">Specific Parts Lot no.</option>
						<option value="Specific Product P.O. no.">Specific Product P.O. no.</option>
						<option value="Others">Others, please specify</option>
					</select>
				</div>
			  </div>
			  <div class="row" id="container_remarks">
				<div class="col-sm-2">
					<label class="fa fa-md">Notation / Remarks: </label>
				</div>
				<div class="col-sm-10">
					<textarea class="form-control" id="" name="notation_remarks"></textarea>
				</div>
			  </div>
			</div>
			
			
		  <div class="modal-footer">
			<!--<button type="button" id="btn_report_ordinates" class="btn btn-primary fa fa-"> Ordinates</button>-->
			<button type="submit" class="btn btn-primary fa fa-save"> Save</button>
			<button type="button" class="btn btn-default fa" data-dismiss="modal"> Close</button>
		  </div>
		</form><!-- /#frm_upload_measdata -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="modal_sa_cancel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="fa fa-remove"></span> Cancel Report</h4>
      </div>
      <div class="modal-body">
        <form id="frm_sa_cancel">
			<div class="row">
				<div class="col-sm-12">
					<label class="control-label">Are you sure you want to cancel </label>
					<label id="label_info"></label>
				</div>
				<div class="col-sm-12">
					<label class="control-label">Please state your reason for cancellation: </label>
				</div>
				<div class="col-sm-12">
					<textarea type="text" class="form-control condensed" name="cancel_remarks" required></textarea>
				</div>
			</div>
      </div>
      <div class="modal-footer">
			<button type="submit" class="btn btn-danger"> Cancel Request</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="modal_sa_replace_image">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="fa fa-image"></span> Replace Image</h4>
      </div>
      <div class="modal-body">
        <form id="frm_sa_replace_image">
			<div class="row">
				<div class="col-sm-4">
					Choose Image 
				</div>
				<div class="col-sm-8">
					<input type="file" class="form-control" id="" name="file_sa" accept="image/jpeg, image/png" required>
				</div>
			</div>
      </div>
      <div class="modal-footer">
			<button type="submit" class="btn btn-primary"> Replace</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal" tabindex="-1" role="dialog" id="modal_sa_advance_search">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fa fa-search"> Advance Search</h4>
      </div>
	  <form id="frm_sa_advance_search">
      <div class="modal-body">
		<button type="button" class="btn btn-default fa pull-left fa fa-eraser" id="btn_sa_as_reset"> Reset Search Value</button>
		<button type="button" class="btn btn-primary fa pull-right fa fa-plus" id="btn_sa_as_add"> Add</button><br /><br />
		<table class="table" id="tbl_sa_advance_search">
			<tbody>
			</tbody>
		</table>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary fa fa-search"> Search</button>
        <button type="button" class="btn btn-default fa fa-close" data-dismiss="modal"> Close</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal" tabindex="-1" role="dialog" id="modal_sa_system_message">
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