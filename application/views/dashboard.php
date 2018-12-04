<?php include ('includes/main.php')?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Search <i>the</i> Professor</h2>
        </div>

        <!-- CPU Usage -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Search
                        </h2>
                    </div>
                    <div class="body">
                        <form action="<?php echo base_url(); ?>Professor/show_professor" class="form-horizontal" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">College</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="college" class="form-control" autocomplete="off" required placeholder="Enter your College">
                                        </div>
                                    </div>
                                </div>
                            
                           
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="password_2">Department</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="dept" class="form-control" autocomplete="off" required placeholder="Enter your Department">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row clearfix">
                                <div class="col-lg-offset-6 col-md-offset-4 col-sm-offset-4 col-xs-offset-5">
                                    <input type="submit" value="Search" class="btn bg-purple m-t-15 waves-effect">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# CPU Usage -->
    </div>
</section>