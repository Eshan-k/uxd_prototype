<?php include('includes/main.php') ?>

<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2></h2>
		</div>

        <!-- Faculty info Start-->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h3 class="text-black">Professor Ashton</h3>
                        <h2>CS - 645, Internet and Higher Level Protocol
                            <span><a href="#">LinkedIn</a></span></h2>
                        <span class="header-dropdown m-r--5">
							<h3>Overall Rating: <span class="label bg-red">2.5</span></h3>
						</span>
                    </div>

                    <div class="body">
                        <h2 class="card-inside-title">
                            <img src="../../public/images/ash.jpeg" style="width: 250px" height="250px" class="img-responsive">
                        </h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <h3>
                                        My name is Ashton,
                                        I teaching this subject from the past 5 years.
                                        <br><br>
                                    </h3>
                                    <h4>
                                        Office Hours: Tuesday, 1pm - 4pm<br><br>
                                        Email: ashton@faculty.com
                                    </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Faculty info end-->

        <!-- Area of Research Start-->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <label class="menu-toggle waves-effect waves-block">
                            <span class="header-dropdown m-r--5"><i class="material-icons">add</i></span>
                            <h3 class="text-black">Area of Research</h3>
                        </label>
                        <ul class="ml-menu" style="display: none;">
                            <h4></h4>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Area of Research End-->

        <!-- Ratings and Reviews Start-->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h3 class="text-black">Ratings & Reviews</h3>
                    </div>

                    <div class="body">
                        <div class="table-responsive">
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
                                                <td>1/1/2016</td>
                                                <td>Student 1q</td>
                                                <td>Tough Grader.</td>
                                                <td>2</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>2/2/2016</td>
                                                <td>Anonymous</td>
                                                <td>Lot of assignment, & does'nt teach anything, Will not take his class again</td>
                                                <td>2</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>3/3/2017</td>
                                                <td>Student 3c</td>
                                                <td>Learned nothing.</td>
                                                <td>1.5</td>
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
        <!-- Ratings and Reviews End-->
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
