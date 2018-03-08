<article class="wrapper">
	
	<aside class="sidebar">
		<ul class="sidebar-nav">
			<li>
				<a href="#" class="sidebar-toggle" id="toggle-menu">
					<i class="fa fa-bars"></i>
				</a>
			</li>
			<li class="active"><a href="#dashboard" data-toggle="tab"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<li><a href="#configuration" data-toggle="tab"><i class="fa fa-cogs"></i> <span>Configuration</span></a></li>
			<li><a href="#users" data-toggle="tab"><i class="fa fa-users"></i> <span>Users</span></a></li>
			<li><a href="#mail" data-toggle="tab"><i class="fa fa-envelope"></i> <span>Mail</span></a></li>
		</ul>
	</aside>
	
	<section class="main">
		
		<section class="tab-content">
			
		   <section class="tab-pane active fade in content" id="dashboard">
			   
				<div class="row">
				   
					<div class="col-xs-6 col-sm-3">
						<div class="panel panel-primary">
							<div class="panel-body">
								<br/><br/><br/><br/>
							</div>
						</div>
					</div>
					
					<div class="col-xs-6 col-sm-3">
						<div class="panel panel-success">
							<div class="panel-body">
								<br/><br/><br/><br/>
							</div>
						</div>
					</div>
					
					<div class="col-xs-6 col-sm-3">
						<div class="panel panel-danger">
							<div class="panel-body">
								<br/><br/><br/><br/>
							</div>
						</div>
					</div>
					
					<div class="col-xs-6 col-sm-3">
						<div class="panel panel-warning">
							<div class="panel-body">
								<br/><br/><br/><br/>
							</div>
						</div>
					</div>
				   
				   <div class="col-xs-12 col-sm-9">
					   <div class="panel panel-default">
						   <div class="panel-heading">
							   Something
						   </div>
						   <div class="panel-body">
							   This layout uses tabs to demonstrate what you could do with it. It probably makes more sense to use individual pages/templates in a production app.
							   <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
						   </div>
					   </div>
				   </div>
				   
				   <div class="col-xs-12 col-sm-3">
					   <div class="panel panel-default">
						   <div class="panel-heading">
							   Something
						   </div>
						   <div class="panel-body">
							   The sidebar is naturally responsive according to screen width. You can toggle it using the menu button in the topbar. Test it out by increasing/decreasing your screen width and watch it respond.
						   </div>
					   </div>
					   
					   <div class="panel panel-default">
						   <div class="panel-heading">
							   Kaitani Labs
						   </div>
						   <div class="panel-body">
							   Designed by <a href="http://www.kaitanilabs.com" target="_blank">Kaitani Labs</a></a>
						   </div>
					   </div>
				   </div>
				   
			   </div>
			   
		   </section>
		   
		   <section class="tab-pane fade" id="configuration">
			   <nav class="subbar">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-code"></i> <span>System</span></a></li>
						<li><a href="#roles" data-toggle="tab"><i class="fa fa-user"></i> <span>Roles</span></a></li>
					</ul>
				</nav>
				
				<section class="tab-content content">
					
					<section class="tab-pane active fade in" id="access">
						
						<div class="row">
							<div class="col-xs-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										Something
									</div>
									<div class="panel-body">
										<br/><br/><br/><br/>
									</div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-4">
								<div class="panel panel-default">
									<div class="panel-heading">
										Something
									</div>
									<div class="panel-body">
										<br/><br/><br/><br/>
									</div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-4">
								<div class="panel panel-default">
									<div class="panel-heading">
										Something
									</div>
									<div class="panel-body">
										<br/><br/><br/><br/>
									</div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-4">
								<div class="panel panel-default">
									<div class="panel-heading">
										Something
									</div>
									<div class="panel-body">
										<br/><br/><br/><br/>
									</div>
								</div>
							</div>
						</div>
						
					</section>
					
					<section class="tab-pane fade" id="roles">
						
						<div class="row">
							<div class="col-xs-12 col-sm-8 col-md-9">
								<div class="panel panel-default">
									<div class="panel-heading">
										Something
									</div>
									<div class="panel-body">
										<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
									</div>
								</div>
							</div>
							
							<div class="hidden-xs col-sm-4 col-md-3">
								<div class="panel panel-default">
									<div class="panel-heading">
										Something
									</div>
									<div class="panel-body">
										<br/><br/><br/>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										Something
									</div>
									<div class="panel-body">
										<br/><br/><br/>
									</div>
								</div>
							</div>
					   </div>
					</section>
					
				</section>
				
		   </section>
		   
		   <section class="tab-pane fade" id="users">
			  <section class="content">
				  <div class="row">
					<div class="col-sm-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								testing
							</div>
							<div class="panel-body">
								
							</div>
						</div>
					</div>
				  </div>
			  </section>
		   </section>
		   
		   <section class="tab-pane fade" id="mail">
			  
		   </section>
		   
		</section>
		
	</section>
</article>
	
<script>
	$(document).on("click",".sidebar-toggle",function(){
		$(".wrapper").toggleClass("toggled");
	});
</script>