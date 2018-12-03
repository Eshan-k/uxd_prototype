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
                        <h3 class="text-black">Professor Greer</h3>
                        <h2>CS - 634, Data Mining&nbsp;
                            <span><a target="_blank" href="#">LinkedIn</a></span></h2>
                        <span class="header-dropdown m-r--5">
							<h3>Overall Rating: <span class="label bg-amber">3.0</span></h3>
						</span>
                    </div>

                    <div class="body">
                        <h2 class="card-inside-title">
                            <img src="../../public/images/greer.jpg" style="width: 250px" height="250px" class="img-responsive">
                        </h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <h3>
                                        Master's in Computer science - Boston University<br><br>
                                    </h3>
                                    <h4>
                                        Office Hours: Thursday, 1pm - 4pm<br><br>
                                        Email: greer@faculty.com<br><br>
                                        Course Pre-requisite : Knowledge of C, C++ or approval from advisor.
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="body col-sm-offset-5">
                            <input type="button" class="btn bg-purple waves-effect" data-toggle="modal" data-target="#smallModal" value="Rate & Review">
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
                            <h3 class="">Area of Research</h3>
                        </label>
                        <ul class="ml-menu" style="display: none;">
                            <h4>
                                Doing research on <i>Data Mining</i> in Medical field.
                                <br>
                            </h4>
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
                                                <td>7/26/2017</td>
                                                <td>Student 1a</td>
                                                <td>Takes classes on Saturday</td>
                                                <td>2.5</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>2/11/2017</td>
                                                <td>Student 2b</td>
                                                <td>Lots of Assignment; did'nt take exams</td>
                                                <td>3</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>12/22/2016</td>
                                                <td>Student 3c</td>
                                                <td>Tough Exams</td>
                                                <td>2.5</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>11/2/2016</td>
                                                <td>Student 4d</td>
                                                <td>Lots of Assignment</td>
                                                <td>3</td>
                                            </tr>
                                            <tr id="xyz" role="row" class="even">
                                                <td id="s_date"></td>
                                                <td id="s_name"></td>
                                                <td id="s_review"></td>
                                                <td id="s_rate"></td>
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
        <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" style="display: none;">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="smallModalLabel">Rate & Review</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row clearfix">
                            <div class="col-md-12">

                                <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                    <b>Bradley Greer</b>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <b>Rate</b>
                                <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">star</i>
                                </span>
                                    <div class="form-line">
                                        <input type="text" id="rate" name="rate" class="form-control" placeholder="Ex: 2.5, 4">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <b>Review</b>
                                <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons"></i>
                                            </span>
                                    <div class="form-line">
                                        <input type="text" id="review" name="review" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="body col-sm-offset-5">
                                <input type="button" class="btn bg-purple waves-effect" data-toggle="modal" data-target="#smallModal" value="Submit" onclick="set_value()">
                            </div>

                            <!-- Small Size -->
                        </div>
                    </div>
                    <div class="modal-footer">
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

<script>
    function set_value() {
        var rating = document.getElementById("rate").value;
        var review = document.getElementById("review").value;
        

        document.getElementById("s_date").innerHTML = '<?php echo date('m/d/Y')?>';

        document.getElementById("s_name").innerHTML = 'Sean';
        document.getElementById("s_rate").innerHTML = rating;
        document.getElementById("s_review").innerHTML = review;


        //document.getElementById("xyz").style.display = 'block';
    }
</script>
