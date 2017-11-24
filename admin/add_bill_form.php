		<div class="">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" name="basic-layout-colored-form-control">Join group travel</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					<div class="heading-elements">

						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
							<li><a data-action="reload"><i class="icon-reload"></i></a></li>
							<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
							<li><a data-action="close"><i class="icon-cross2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">

						<div class="card-text">
							<p>Enter the details of your travel and we will get you the best partners to travel with</p>
						</div>

						<form class="form" action="../includes/bill.inc.php" method="post">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-eye6"></i>How would you like to travel?</h4>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="billno">Preferences and hobbies<code>*</code></label>
											<input name="billno"  class="form-control border-primary" placeholder="Tell me what you like">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="skr">Select a group</label>
											<input name="skr" class="form-control border-primary" placeholder="preferred">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="origin">Home Location</label>
											<input name="origin" class="form-control border-primary" placeholder="Origin" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="destination">Destination</label>
											<input name="destination" class="form-control border-primary" placeholder="Destination">
										</div>
									</div>
								</div>
								<div  hidden class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="weight">Weight</label>
											<input name="weight" class="form-control border-primary" placeholder="Total Weight" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="rar">RAR</label>
											<input name="rar" class="form-control border-primary" placeholder="Risk Assessment Report">
										</div>
									</div>
								</div>
								<div class="row">
									<div  hidden class="col-md-6">
										<div class="form-group">
											<label for="duty">Duty</label>
											<input name="duty" class="form-control border-primary" placeholder="Duty" >
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="edd">Travel Date</label>
											<input type="date" name="edd" class="form-control border-primary" placeholder="Estimated Delivery Date">
										</div>
									</div>
								</div>

								<h4 class="form-section"><i class="icon-mail6"></i> Contact Info</h4>

								<div class="form-group">
									<label for="consignee">Group Name<code>*</code></label>
									<input class="form-control border-primary" placeholder="Group name" name="consignee">
								</div>

								<div class="form-group">
									<label for="consignor">Last Name</label>
									<input class="form-control border-primary" name="consignor" placeholder="Last Name">
								</div>

								<div class="form-group">
									<label for="details">More Details </label>
									<textarea name="details" rows="5" class="form-control border-primary" placeholder="More Details"></textarea>
								</div>

							</div>

							<div class="form-actions right">
								<button type="button" class="btn btn-warning mr-1">
									<i class="icon-cross2"></i> Cancel
								</button>
								<button class="btn btn-primary">
									<i class="icon-check2"></i> Save
								</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>