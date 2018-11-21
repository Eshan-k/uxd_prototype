<?php include('includes/main.php') ?>

<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2></h2>
		</div>
  
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="header">
						<h3 class="text-black">Professor Johnson</h3>
						<h2>CS - 634, Data Mining&nbsp;
							<span><a target="_blank" href="#">LinkedIn</a></span></h2>
						<span class="header-dropdown m-r--5">
							<h3>Overall Rating: <span class="label bg-green">4</span></h3>
						</span>
					</div>
					
					<div class="body">
						<h2 class="card-inside-title">
                            <img src="../../public/images/643.jpeg" style="width: 250px" height="250px" class="img-responsive">
                        </h2>
						<div class="row clearfix">
							<div class="col-sm-12">
								<div class="form-group">
									<h4>
										My name is Samantha Johnson, I have done my master's in computer science, from
										University of Texas - Austin.
										I teaching this subject from the past 16 years.
										<br>
									</h4>
								</div>
							</div>
						</div>
						<label class="menu-toggle waves-effect waves-block">
							<i class="material-icons">add</i> &nbsp; &nbsp;
							<span class="h4">
								Area of Research
							</span>
							
						</label>
						
						<ul class="ml-menu" style="display: none;">
							<h4>
								Interested in Deep Learning. Doing research on <i>xyz</i>.
								<br>
								In deep learning, each level learns to transform its input data into a slightly
								more abstract and composite representation. In an image recognition application,
								the raw input may be a matrix of pixels; the first representational layer may
								abstract the pixels and encode edges; the second layer may compose and encode
								arrangements of edges; the third layer may encode a nose and eyes; and the
								fourth layer may recognize that the image contains a face. Importantly, a deep
								learning process can learn which features to optimally place in which level on
								its own.
							</h4>
						</ul>
						<div><br></div>
						<div class="body">
							<div class="table-responsive">
								<h4>Reviews & Ratings</h4>
								<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
									<div class="row">
										<div class="col-lg-12">
											<table class="table table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
												<thead>
												<tr role="row">
													<th class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"  aria-sort="descending" colspan="1">Date</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Name</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Review</th>
													<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Rating</th>
												</tr>
												</thead>
												<tbody>
												<tr role="row" class="odd">
													<td>7/26/2017</td>
													<td>Student 1a</td>
													<td>Great Professor, learned a lot.</td>
													<td>4</td>
												</tr>
												<tr role="row" class="even">
													<td>2/11/2017</td>
													<td>Student 2b</td>
													<td>Lot of assignment.</td>
													<td>3.5</td>
												</tr>
												<tr role="row" class="odd">
													<td>12/22/2016</td>
													<td>Student 3c</td>
													<td>Great learning experience.</td>
													<td>4</td>
												</tr>
												<tr role="row" class="even">
													<td>11/2/2016</td>
													<td>Student 4d</td>
													<td>Nice Professor, easy grader.</td>
													<td>4</td>
												</tr>
												<tr role="row" class="odd">
													<td>10/1/2016</td>
													<td>Student 5e</td>
													<td>Professor used to work for acm corp evident from the teaching. Great Professor.</td>
													<td>4</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-7">
											<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
											
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
	</div>
</section>

<style>
	.dataTables_filter {
		float: right;
    }
	.dataTables_length {
		display: none;
	}
</style>
