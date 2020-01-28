<br><br><br>
<div class="main-panel">
    <div class="page-inner">
        <div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="d-flex align-items-center">
							<h4 class="card-title">Customer</h4>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addPlan">
								<i class="fa fa-plus"></i>
								Add Customer 
							</button>
						</div>
					</div>
					<div class="card-body">
						<!-- Modal -->
									<div class="modal fade" id="addPlan" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Add Customer</span> 
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form method="post" action="">
																<div class="form-group">
																	<label>Name Activity</label>
																	<input name="name_activity" id="name_activity" type="text" class="form-control" placeholder="Fill Name Activity">
																</div>

																<div class="form-group ui-front">
																	<label>Type</label>
																	<input id="type" name="type" type="text" class="form-control" placeholder="Fill Type">
																
																<!-- Autocomplete type -->
																<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
																<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
																<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
																<script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>
																<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
																
																<script type="text/javascript">
															
																	$(document).ready(function(){

																	$('#type').autocomplete({
																			source: "<?php echo base_url('activity_am/autocomplete_type');?>",
																			
																		});
																	
																});
																</script>
																<!--  END Autocomplete type -->
																</div>

																<div class="form-group ui-front">
																	<label>Customer</label>
																	<input id="customer" name="customer" type="text" class="form-control" placeholder="Fill Customer">
																
																<!-- Autocomplete customer -->
																<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
																<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
																<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
																<script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>
																<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
																
																<script type="text/javascript">
										
																	$(document).ready(function(){

																	$('#customer').autocomplete({
																			source: "<?php echo base_url('activity_am/get_autocomplete');?>",
																		});
																});
																</script>
																<!--  END Autocomplete customer -->
																<button class="btn btn-warning">Add Customer</button>
																</div>

																<div class="form-group ui-front">
																	<label>Stage</label>
																	<input id="stage" name="stage" type="text" class="form-control" placeholder="Fill Stage">
																
																<!-- Autocomplete stage -->
																<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
																<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
																<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
																<script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>
																<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
																
																<script type="text/javascript">
										
																	$(document).ready(function(){

																	$('#stage').autocomplete({
																			source: "<?php echo base_url('activity_am/autocomplete_stage');?>",
																		});
																});
																</script>
																<!--  END Autocomplete stage -->
																</div>

																<div class="form-group">
																	<label>Noted</label>
																	<textarea name="note" id="note" class="form-control"></textarea>
																</div>
															
														
													</form>
												</div>
												<div class="modal-footer no-bd">
													<input type="submit" id="addPlan" name="addPlan" class="btn btn-primary" value="Add">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

									
					</div>
				</div>
            </div>
        </div>
	</div>
</div>
