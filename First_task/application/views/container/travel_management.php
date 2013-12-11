<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>

        <style>
            body
            {
                background-color: #F6F6F6;
            }
            body.modal-open, 
            .modal-open .navbar-fixed-top, 
            .modal-open .navbar-fixed-bottom {
                margin-right: 0;
            }

            .modal {
                left: 50%;
                bottom: auto;
                right: auto;
                padding: 0;
                width: 500px;
                margin-left: -250px;
                background-color: #ffffff;
                border: 1px solid #999999;
                border: 1px solid rgba(0, 0, 0, 0.2);
                border-radius: 6px;
                -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
                box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
                background-clip: padding-box;
            }

            .modal.container {
                max-width: none;
            }
            .hide {
                display: block !important;
            }

            .modal-backdrop {
                background-color: #000000!important;
            }
            td{
                text-align: center;
                
            }    
            
            .label.label-info.col-sm-2 {
                float: left;
                margin: 7px 8px 0 108px;
                /*    margin-left: 20px;
                    vertical-align: middle !important;*/
                width:110px;  
            }
            .span6
            {
                text-align: center;
            }
            .input_width 
            {
                width: 140px;
            }
            a center
            {
                display: none;
            }
            #dataTable_wrapper {
                margin-top: 25px;
                width: 78%;
                 
            }  
/*            #tab_id{
                 background-color: #7ab5d3 ;
            }*/

        </style>

        <link href="../../dist/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="../../dist/demo_table.css">
        <link rel="stylesheet" href="../../dist/page.css">
        <link rel="stylesheet" href="../../dist/table_css.css">

        <link href="../../dist/css/bootstrap-modal-bs3patch.css" rel="stylesheet">
        <link href="../../dist/css/bootstrap-modal.css" rel="stylesheet">

        <link href="../../dist/css/datepicker.css" rel="stylesheet">
        <link href="../../dist/css/bootstrap-switch.css" rel="stylesheet">
        <link href="../../dist/css/bootstrap-theme.css" rel="stylesheet">


        <script src="../../bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="../../dist/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../dist/js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="../../dist/js/bootstrap-modalmanager.js" type="text/javascript"></script>

        <script src="../../dist/js/bootstrap-datepicker.js" type="text/javascript"></script>

        <script>

            var first_val = "";

            $(document).ready(function() {
                $(".edit_1").click(
                        function()
                        {
                            //   alert("dsdsd");
                            $("#responsive2").modal();
                        }
                );
                // alert('jadgf');

                $('#tab_id').dataTable({
                    "sPaginationType": "full_numbers"
                });
                $("#tab_id_info").css("width", "30%");
                $("#tab_id_info").css("margin-top", "3%");

                // $("#tab_id_info").css("background-color", "black");

                $("#tab_id_info").attr("class", "btn btn-default");

                $("#tab_id_info").css("float", "left");
                $("#tab_id_length").css("width", "20%");
                $("#tab_id_length").css("margin-left", "12%");
                $("#tab_id_length").css("margin-top", "3.5%");

                $("#tab_id_paginate").css("margin-top", "-3%");
                $("#tab_id_paginate").attr("class", "dataTables_paginate paging_full_numbers");

                $("#tab_id_filter").css("color", "black");
                $("#tab_id_filter").attr("class", "dataTables_filter");

                $("#tab_id_first").attr("class", "btn btn-default");

                $("#tab_id_previous").attr("class", "btn btn-default");

                $("#tab_id_next").attr("class", "btn btn-default");

                $("#tab_id_last").attr("class", "btn btn-default");

                $(".paginate_active").attr("class", "btn btn-default");
                $(".paginate_active").css("color", "#428BCA");

                $("#tab_id_filter").css("margin-top", "2%");
                $("#datepicker").datepicker('show');
                jQuery("#tab_id_paginate").css('width', "40%");
                $('.dataTables_length').insertAfter($("#tab_id_info"));
                $('#tab_id_length').show();
                $('#tab_id_filter').css("margin-right", '1%');
                $("#tab_id_filter input").css("border-radius", "6px");
                $("#tab_id_filter input").css("border", "none");

                $('.edit_btn').click(function() {
                    //alert("nnnnn");  
                    var index_no = 0;

                    // alert($(this).parent().parent().cells[0].textContent);

                    $('td', $(this).parent().parent()).each(function() {
                        //  alert("test-"+index_no +" "+$(this).text());

                        $(".modal_1 input").eq(index_no).val($(this).text().trim());


                        index_no += 1;
                    });

                });

                $('.save').click(function() {
                    alert("dff");




                });
                $('.del').click(function() {
                    alert("fdf");
                    $('tr', $(this).parent().parent()).remove();
                });

                $('.modal-backdrop').mousedown(function() {
                    alert('ada');
                    $('#myModal').modal('hide');
                });
                //  $(function() {
                //         $( "#calendar" ).datepicker();   
                //    }); 
            });



        </script>  
        <script>
            $(function() {
                $('#myTab a:first').tab('show');
            });


            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

            //  alert("tab--"+$(this).attr("href"));
            var tabid = "tab_id";
                    var archor = $(this).attr("href");
                    switch (archor)
                    {
                            case "#view": tabid = "tab_id"; break;
                            case "#expense": tabid = "tab_id2"; break;
                            case "#messages": tabid = "tab_id3"; break;
                    }
            });
            $('#' + tabid).dataTable().fnDestroy();
                    $('#' + tabid).dataTable({
            "sPaginationType": "full_numbers"
            });        </script>
        <script>
                    $(document).ready(function() {
            $('.datepicker').datepicker();
          });        </script>   
    </head>
    <body>  


        <div class="container padded my_container">   
            <div class="row">  
                <div id="breadcrumbs">
                    <div class="breadcrumb-button blue">
                        <span class="breadcrumb-label">
                            <i class="icon-home"></i>
                            Home
                        </span>
                        <span class="breadcrumb-arrow">
                            <span></span>
                        </span> 
                    </div>  
                    <div class="breadcrumb-button">
                        <span class="breadcrumb-label">
                            <i class="glyphicon glyphicon-transfer"></i>  
                            Travel_Management
                        </span>
                        <span class="breadcrumb-arrow">
                            <span></span>
                        </span> 
                    </div> 
                </div>  

                <div class="table_div" >  
                    <table cellpadding="0" cellspacing="0" border="0" class=" table dataTable display" id="tab_id" > 
                        <thead>      
                            <tr>   
                                <th>User_Id</th>
                                <th>Destination</th>
                                <th>Start_Date</th>
                                <th>End_Date</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr> </thead>
                        <tbody>  <tr> 
                                <td>1</td>


                                <td>India</td>
                                <td>26-11-2013</td>
                                <td>30-11-2013</td>
                                <td style="width: 180px;">
                                    <div id="myswitch" class="make-switch has-switch">
                                        <div class="switch-animate switch-on">
                                            <input type="checkbox" checked="">
                                            <span class="switch-left switch-small switch-info">ON</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">
                                                OFF</span></div>  
                                    </div>  
                                </td>  


                                <td style="width: 180px;position: relative;z-index:9;">

                                    <a class="btn btn-default anchor" href="#responsive3" data-toggle="modal" >View</a>  
                                    <a class="btn btn-default anchor edit_1 edit_btn" href="#responsive2" data-toggle="modal" >Edit</a>
                                    <a  class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a> 
                                </td>
                            </tr>        


                            <tr><td>2</td>
                                <td>U.P.</td> 
                                <td>27-11-2013</td> 
                                <td>28-11-2013</td>
                                <td>
                                    <div id="myswitch" class="make-switch has-switch"  data-on="info" data-off="success">   
                                        <div class="switch-animate switch-on">
                                            <input type="checkbox" checked="">
                                            <span class="switch-left switch-small switch-info">ON</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">
                                                OFF</span></div>  
                                    </div>    
                                </td>  

                                <td>
                                    <a class="btn btn-default anchor" href="#responsive3" data-toggle="modal" >View</a>  

                                    <a class="btn btn-default edit_1 edit_btn anchor" href="#responsive2" data-toggle="modal" >Edit</a>  


                                    <a class="btn btn-default anchor"  href="#responsive1" data-toggle="modal">Delete</a></td>

                            </tr>  
                            <tr><td>3</td>
                                <td>Delhi</td>
                                <td>30-11-2013</td>
                                <td>1-12-2013</td>
                                <td>
                                    <div id="myswitch" class="make-switch has-switch">
                                        <div class="switch-animate switch-on">
                                            <input type="checkbox" checked="">
                                            <span class="switch-left switch-small switch-info">ON</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">
                                                OFF</span></div>  
                                    </div>  
                                </td>           

                                <td>

                                    <a class="btn btn-default anchor" href="#responsive3" data-toggle="modal" >View</a>
                                    <a class="btn btn-default anchor" href="#responsive2" data-toggle="modal" >Edit</a>
                                    <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal" >Delete</a>
                                </td>  
                            </tr>  
                            <tr><td>4</td>  
                                <td>Indore</td>
                                <td>1-12-2013</td>
                                <td>3-12-2013</td>
                                <td> 
                                    <div id="myswitch" class="make-switch has-switch">
                                        <div class="switch-animate switch-on">
                                            <input type="checkbox" checked="">
                                            <span class="switch-left switch-small switch-info">ON</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">
                                                OFF</span></div>  
                                    </div>  
                                </td>  

                                <td> 
                                    <a class="btn btn-default anchor" href="#responsive3" data-toggle="modal">View</a>

                                    <a  class="btn btn-default edit_1 edit_btn anchor" href="#responsive2" data-toggle="modal">Edit</a>
                                    <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td>
                            </tr>   
                            <tr><td>5</td>
                                <td>Mumbai</td>
                                <td>5-12-2013</td>
                                <td>7-12-2013</td>
                                <td>
                                    <div id="myswitch" class="make-switch has-switch">
                                        <div class="switch-animate switch-on">
                                            <input type="checkbox" checked="">
                                            <span class="switch-left switch-small switch-info">ON</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">
                                                OFF</span></div>  
                                    </div>  
                                </td>  

                                <td>         


                                    <a class="btn btn-default anchor" href="#responsive3"  data-toggle="modal">View</a> 
                                    <a class="btn btn-default" href="#responsive2" data-toggle="modal">Edit</a>  
                                    <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a>    

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home"> 
                                            <div id="responsive3" class="modal hide fade" tabindex="-1" data-width="761">
                                                <div class="modal-header mod_head1">  
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <center> <h4>View</h4></center>  
                                                </div>
                                                <div class="centr">  <div class="modal-body"> 
                                                        <div class="row-fluid">
                                                            <div class="span6"> 
                                                                <div>
                                                                    <ul class="nav nav-tabs" id="myTab">
                                                                        <li class="active"><a href="#view" data-toggle="tab">View</a></li> 
                                                                        <li><a href="#expense" data-toggle="tab">Expense_Details</a></li> 
                                                                        <li><a href="#trip" data-toggle="tab">Trip_Details</a></li>
                                                                        <li><a href="#work" data-toggle="tab">Work_Details</a></li>  
                                                                        <li><a href="#conveyance" data-toggle="tab">Conveyance_Details</a></li>
                                                                        <li><a href="#accomodation" data-toggle="tab">Accomodation_Details</a></li>
                                                                    </ul>   

                                                                    <div>
                                                                        <label class="label label-info col-sm-2" style="">User_Name</label>    
                                                                        <input type="text" value="Test1" class="form-control input_width" readonly="" style="margin-top: 20px;"> 
                                                                        <br/>
                                                                        <label class="label label-info col-sm-2 ">Start Date</label> 


                                                                        <input type="text"  class="form-control input_width datepicker" />
                                                                        <span class="add-on">    
                                                                            <i class="icon-calendar"></i>  
                                                                        </span>

                                                                        <br/>    
                                                                        <label class="label label-info  col-sm-2 ">End Date</label>

                                                                        <input type="text"  class="form-control input_width datepicker" />
                                                                        <span class="add-on">    
                                                                            <i class="icon-calendar"></i>       
                                                                        </span>

                                                                        <br/>  
                                                                        <label class="label label-info col-sm-2">Travel Days</label>
                                                                        <input type="text" placeholder="Travel Days" class="form-control input_width">
                                                                        <br/>
                                                                        <label class="label label-info col-sm-2">Working Days</label>
                                                                        <input type="text" placeholder="Working Days" class="form-control input_width">
                                                                        <br/>
                                                                        <label class="label label-info col-sm-2 ">Destination Country</label> 
                                                                        <select class="form-control input_width" style="width: 140px;">    

                                                                            <option value="India">India</option>  
                                                                            <option value="India">America</option>  
                                                                            <option value="India">Australia</option>    
                                                                            <option value="India">Thailand</option>  
                                                                            <option value="India">China</option>   


                                                                        </select>    
                                                                        <br/>
                                                                        <label class="label label-info col-sm-2 ">Destination State</label> 
                                                                        <select class="form-control input_width" style="width: 140px;">    

                                                                            <option value="India">M.P.</option>  
                                                                            <option value="India">U.P.</option>  
                                                                            <option value="India">A.P.</option>  
                                                                            <option value="India">Maharashtra</option>  
                                                                            <option value="India">Rajasthan</option> 


                                                                        </select>  
                                                                        <br/>
                                                                        <label class="label label-info col-sm-2 ">Destination City</label> 
                                                                        <select class="form-control input_width" style="width: 140px;">    

                                                                            <option value="India">Indore</option>  
                                                                            <option value="India">Mumbai</option>  
                                                                            <option value="India">Jaipur</option>      
                                                                            <option value="India">Ratlam</option>  
                                                                            <option value="India">Pune</option>     


                                                                        </select>  
                                                                        <br/>
                                                                        <label class="label label-info col-sm-2">Client</label>
                                                                        <input type="text" class="form-control input_width">
                                                                        <br/>
                                                                        <label class="label label-info col-sm-2">Description</label>
                                                                        <textarea class="form-control input_width"></textarea>
                                                                        <br/>
                                                                        <label class="label label-info col-sm-2">Travel Amount</label>
                                                                        <input type="text" class="form-control input_width">
                                                                        <br/>
                                                                        <label class="label label-info col-sm-2 ">Status</label> 
                                                                        <select class="form-control input_width" style="width: 140px;">    

                                                                            <option value="India">Pending</option>  
                                                                            <option value="India">Accepted</option>  
                                                                            <option value="India">Rejected</option>      
                                                                        </select>        



                                                                    </div>

                                                                </div>  
                                                            </div>
                                                            <div class="modal-footer">
                                                                <center>

                                                                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button></center>
                                                            </div></div>  

                                                    </div>    

                                                </div>  
                                            </div>  

                                        </div>
                                        <!-- Expense start-->

                                        <div class="tab-content">
                                            <div class="tab-pane active" id="expense"> 
                                                <div id="responsive3" class="modal hide fade" tabindex="-1" data-width="761">  
                                                    <div class="modal-header mod_head1">  
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                                    </div>
                                                    <div class="centr">  <div class="modal-body"> 
                                                            <div class="row-fluid">
                                                                <div class="span6"> 
                                                                    <div>
                                                                        <ul class="nav nav-tabs" id="myTab">
                                                                            <li class="active"><a href="#view" data-toggle="tab">View</a></li> 
                                                                            <li><a href="#expense" data-toggle="tab">Expense_Details</a></li> 
                                                                            <li><a href="#trip" data-toggle="tab">Trip_Details</a></li>
                                                                            <li><a href="#work" data-toggle="tab">Work_Details</a></li>  
                                                                            <li><a href="#conveyance" data-toggle="tab">Conveyance_Details</a></li>
                                                                            <li><a href="#accomodation" data-toggle="tab">Accomodation_Details</a></li>
                                                                        </ul>   

                                                                        <div>
                                                                            <label class="label label-info col-sm-2" style="">User_Name</label>    
                                                                            <input type="text" value="Test1" class="form-control input_width" readonly="" style="margin-top: 20px;"> 
                                                                            <br/>
                                                                            <label class="label label-info col-sm-2 ">Start Date</label> 


                                                                            <input type="text"  class="form-control input_width datepicker" />
                                                                            <span class="add-on">    
                                                                                <i class="icon-calendar"></i>  
                                                                            </span>

                                                                            <br/>    
                                                                            <label class="label label-info  col-sm-2 ">End Date</label>

                                                                            <input type="text"  class="form-control input_width datepicker" />
                                                                            <span class="add-on">    
                                                                                <i class="icon-calendar"></i>       
                                                                            </span>

                                                                            <br/>  
                                                                            <label class="label label-info col-sm-2">Travel Days</label>
                                                                            <input type="text" placeholder="Travel Days" class="form-control input_width">
                                                                            <br/>
                                                                            <label class="label label-info col-sm-2">Working Days</label>
                                                                            <input type="text" placeholder="Working Days" class="form-control input_width">
                                                                            <br/>
                                                                            <label class="label label-info col-sm-2 ">Destination Country</label> 
                                                                            <select class="form-control input_width" style="width: 140px;">    

                                                                                <option value="India">India</option>  
                                                                                <option value="India">America</option>  
                                                                                <option value="India">Australia</option>    
                                                                                <option value="India">Thailand</option>  
                                                                                <option value="India">China</option>   


                                                                            </select>    
                                                                            <br/>
                                                                            <label class="label label-info col-sm-2 ">Destination State</label> 
                                                                            <select class="form-control input_width" style="width: 140px;">    

                                                                                <option value="India">M.P.</option>  
                                                                                <option value="India">U.P.</option>  
                                                                                <option value="India">A.P.</option>  
                                                                                <option value="India">Maharashtra</option>  
                                                                                <option value="India">Rajasthan</option> 


                                                                            </select>  
                                                                            <br/>
                                                                            <label class="label label-info col-sm-2 ">Destination City</label> 
                                                                            <select class="form-control input_width" style="width: 140px;">    

                                                                                <option value="India">Indore</option>  
                                                                                <option value="India">Mumbai</option>  
                                                                                <option value="India">Jaipur</option>      
                                                                                <option value="India">Ratlam</option>  
                                                                                <option value="India">Pune</option>     


                                                                            </select>  
                                                                            <br/>
                                                                            <label class="label label-info col-sm-2">Client</label>
                                                                            <input type="text" class="form-control input_width">
                                                                            <br/>
                                                                            <label class="label label-info col-sm-2">Description</label>
                                                                            <textarea class="form-control input_width"></textarea>
                                                                            <br/>
                                                                            <label class="label label-info col-sm-2">Travel Amount</label>
                                                                            <input type="text" class="form-control input_width">
                                                                            <br/>
                                                                            <label class="label label-info col-sm-2 ">Status</label> 
                                                                            <select class="form-control input_width" style="width: 140px;">    

                                                                                <option value="India">Pending</option>  
                                                                                <option value="India">Accepted</option>  
                                                                                <option value="India">Rejected</option>      
                                                                            </select>        



                                                                        </div>

                                                                    </div>  
                                                                </div></div>  

                                                        </div>    

                                                    </div>  
                                                </div>    
                                            </div>
                                            <!-- Expense Finish-->    
                                            <div id="responsive2" class="modal hide fade" tabindex="-1" data-width="500">
                                                <div class="modal-header mod_head1" >  
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <center> <h4>Edit</h4></center> 
                                                </div>   
                                                <div class="centr">  <div class="modal-body"> 
                                                        <div class="row-fluid">
                                                            <div class="span6"> 

                                                                <label class="label label-info col-sm-2 ">User_Name</label> 
                                                                <input type="text" placeholder="Last Name" class="form-control input_width">
                                                                <br/>  
                                                                <label class="label label-info col-sm-2 ">Start Date</label> 


                                                                <input type="text"  class="form-control input_width datepicker" />
                                                                <span class="add-on">    
                                                                    <i class="icon-calendar"></i>  
                                                                </span>

                                                                <br/>  
                                                                <label class="label label-info  col-sm-2 ">End Date</label>

                                                                <input type="text"  class="form-control input_width datepicker" />
                                                                <span class="add-on">    
                                                                    <i class="icon-calendar"></i>  
                                                                </span>

                                                                <br/>  
                                                                <label class="label label-info col-sm-2">Travel Days</label>
                                                                <input type="text" placeholder="Travel Days" class="form-control input_width">
                                                                <br/>
                                                                <label class="label label-info col-sm-2">Working Days</label>
                                                                <input type="text" placeholder="Working Days" class="form-control input_width">
                                                                <br/>
                                                                <label class="label label-info col-sm-2 ">Destination Country</label> 
                                                                <select class="form-control input_width" style="width: 140px;">    

                                                                    <option value="India">India</option>  
                                                                    <option value="India">America</option>  
                                                                    <option value="India">Australia</option>    
                                                                    <option value="India">Thailand</option>  
                                                                    <option value="India">China</option>   


                                                                </select>    
                                                                <br/>
                                                                <label class="label label-info col-sm-2 ">Destination State</label> 
                                                                <select class="form-control input_width" style="width: 140px;">    

                                                                    <option value="India">M.P.</option>  
                                                                    <option value="India">U.P.</option>  
                                                                    <option value="India">A.P.</option>  
                                                                    <option value="India">Maharashtra</option>  
                                                                    <option value="India">Rajasthan</option> 


                                                                </select>  
                                                                <br/>
                                                                <label class="label label-info col-sm-2 ">Destination City</label> 
                                                                <select class="form-control input_width" style="width: 140px;">    

                                                                    <option value="India">Indore</option>  
                                                                    <option value="India">Mumbai</option>  
                                                                    <option value="India">Jaipur</option>      
                                                                    <option value="India">Ratlam</option>  
                                                                    <option value="India">Pune</option>   


                                                                </select>  
                                                                <br/>
                                                                <label class="label label-info col-sm-2">Client</label>
                                                                <input type="text" class="form-control input_width">
                                                                <br/>
                                                                <label class="label label-info col-sm-2">Description</label>
                                                                <textarea class="form-control input_width"></textarea>
                                                                <br/>
                                                                <label class="label label-info col-sm-2">Travel Amount</label>
                                                                <input type="text" class="form-control input_width">
                                                                <br/>
                                                                <label class="label label-info col-sm-2 ">Status</label> 
                                                                <select class="form-control input_width" style="width: 140px;">    

                                                                    <option value="India">Pending</option>  
                                                                    <option value="India">Accepted</option>  
                                                                    <option value="India">Rejected</option>      
                                                                </select>        



                                                            </div>  

                                                        </div>
                                                    </div></div>  
                                                <div class="modal-footer">
                                                    <center>
                                                        <button type="button" class="btn btn-info">Save changes</button>  

                                                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button></center>
                                                </div>
                                            </div>

                                            <div id="responsive1" class="modal hide fade" tabindex="-1" data-width="500">
                                                <!--<div class="modal-header mod_head" >
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>  -->
                                                <center>  <div class="modal-body"> 
                                                        <h4>Are You Sure You Want To Delete</h4>
                                                        <div class="row-fluid">
                                                            <div class="span6"> 

                                                            </div>  

                                                        </div>
                                                    </div></center>  
                                                <div class="modal-footer">
                                                    <center>
                                                        <button type="button" class="btn btn-info">Delete</button>  

                                                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button></center>
                                                </div>
                                            </div>
                                            </tr>   



                                            </tbody>

                                            </table>
                                        </div> 
                                    </div> 
                                    <a class="btn btn-info" href="#responsive" data-toggle="modal">ADD</a>  

                                    <div id="responsive" class="modal hide fade" tabindex="-1" data-width="500">
                                        <div class="modal-header mod_head1" >  
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <center> <h4>Add</h4></center>
                                        </div>  
                                        <center>  <div class="modal-body">
                                                <div class="row-fluid">
                                                    <div class="span6"> 

                                                        <label class="label label-info col-sm-2 ">User_Name</label> 
                                                        <select class="form-control input_width" style="width: 140px;">   

                                                            <option value="India">Test1</option>  
                                                            <option value="India">Test2</option>  
                                                            <option value="India">Test3</option>  
                                                            <option value="India">Test4</option>  
                                                            <option value="India">Test5</option>   


                                                        </select>    <br/>  
                                                        <label class="label label-info col-sm-2 ">Start Date</label> 


                                                        <input type="text"  class="form-control input_width datepicker" />
                                                        <span class="add-on">    
                                                            <i class="icon-calendar"></i>  
                                                        </span>

                                                        <br/>  
                                                        <label class="label label-info  col-sm-2 ">End Date</label>

                                                        <input type="text"  class="form-control input_width datepicker" />
                                                        <span class="add-on">    
                                                            <i class="icon-calendar"></i>  
                                                        </span>

                                                        <br/>
                                                        <label class="label label-info col-sm-2">Travel Days</label> 
                                                        <input type="text" placeholder="Travel Days" class="form-control input_width">
                                                        <br/>  
                                                        <label class="label label-info col-sm-2">Working Days</label>  
                                                        <input type="text" placeholder="Working Days" class="form-control input_width">
                                                        <br/>
                                                        <label class="label label-info col-sm-2 ">Destination Country</label> 
                                                        <select class="form-control input_width" style="width:140px;">     

                                                            <option value="India">India</option>  
                                                            <option value="India">America</option>  
                                                            <option value="India">Australia</option>  
                                                            <option value="India">Thailand</option>  
                                                            <option value="India">China</option>   


                                                        </select>  
                                                        <br/>
                                                        <label class="label label-info col-sm-2 ">Destination State</label> 
                                                        <select class="form-control input_width" style="width: 140px;">    

                                                            <option value="India">M.P.</option>  
                                                            <option value="India">U.P.</option>  
                                                            <option value="India">A.P.</option>  
                                                            <option value="India">Maharashtra</option>  
                                                            <option value="India">Rajasthan</option>   


                                                        </select>   
                                                        <br/>
                                                        <label class="label label-info col-sm-2 ">Destination City</label> 
                                                        <select class="form-control input_width" style="width: 140px;">    

                                                            <option value="India">Indore</option>  
                                                            <option value="India">Mumbai</option>  
                                                            <option value="India">Jaipur</option>      
                                                            <option value="India">Ratlam</option>  
                                                            <option value="India">Pune</option>   


                                                        </select>  
                                                        <br/>
                                                        <label class="label label-info col-sm-2">Client</label>      
                                                        <input type="text" class="form-control input_width">
                                                        <br/>
                                                        <label class="label label-info col-sm-2">Description</label>
                                                        <textarea class="form-control input_width"></textarea>
                                                        <br/>
                                                        <label class="label label-info col-sm-2">Travel Amount</label>
                                                        <input type="text" class="form-control input_width">
                                                        <br/>
                                                        <label class="label label-info col-sm-2">Status</label>     
                                                        <div id="myswitch" class="make-switch has-switch" style="width: 140px;margin-left: -90px;">
                                                            <div class="switch-animate switch-on">    
                                                                <input type="checkbox" checked="">
                                                                <span class="switch-left switch-small switch-info">ON</span><label class="switch-small">&nbsp;</label><span class="switch-right switch-small">
                                                                    OFF</span></div>  
                                                        </div>  



                                                    </div>  

                                                </div>
                                            </div></center>  
                                        <div class="modal-footer">
                                            <center>
                                                <button type="button" class="btn btn-info">Add</button>  

                                                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button></center>
                                        </div>
                                    </div>
                                    </div>    

                                    <script>

                                       $(document).ready(function() {
                                                    window.prettyPrint && prettyPrint();
                                                            $('#mySwitch').on('switch-change', function (e, data) {
                                                    var $el = $(data.el)
                                                            , value = data.value;
                                                            console.log(e, $el, value);
                                                    });
                                                            // ANIMATION
                                                            $('#btn-animate-switch').on('click', function() {
                                                    $('#animated-switch').bootstrapSwitch('setAnimated', true);
                                                    });
                                                            $('#btn-dont-animate-switch').on('click', function() {
                                                    $('#animated-switch').bootstrapSwitch('setAnimated', false);
                                                    });
                                        });
                                    </script>
                                    </body>
                                    </html>

