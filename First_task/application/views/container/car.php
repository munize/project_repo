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
            .my_container
            {
                z-index: 2;
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
            .label.label-info.col-sm-2 {
                float: left;
                margin: 7px 8px 0 108px;  
                width:83px;
            }
            .span6
            {
                text-align: center;
            }
            .input_width
            {
                width: 140px;
            }  
        </style>


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
                //  $('#one').click(function() {
                //$("#tab_id2_wrapper").hide();
                //  });  
                //   $('#sec').click(function() {
                //$("#tab_id2_wrapper").show();
                //  });  


            });


        </script>
        <style>
            #tab_id3_wrapper {
                margin-top: -45px;
            }
            .anchor
            {
                color: #636363;
            }
            .form-group {
                margin-top: 5%;
            }
            .form-control {
                width: 28% !important;
            }
            .form {
                background-color:#C0C0C0;    
                margin-left: 22px; 
                margin-top: 46px;
                padding-top: 10px;
                width:80%;

            } 
            td{
                text-align: center;
            }  
            .label.label-info.col-sm-2 {
                float: left;
                margin: 7px 8px 0 108px;
                width:83px;
            } 
            .span6  
            {
                text-align: center;
            }
            .input_width
            {
                width: 140px;
            }  
            #tab_id_wrapper {
                margin-top: 25px;
                width: 78%;
            }  
            /*.dataTables_paginate.paging_full_numbers {
                margin-top: -28px; 
            }*/
            .dataTables_filter {
                margin-top: 10px;
            }
            #tab_id2_wrapper {
                margin-top: -45px;
            }
            .myc
            {
                color:#ff0000;  

            }
            .nav.nav-tabs {
                margin-top: 20px;
            }
            #tab_id_length {   
                margin-left: 410px; 
            }  
        </style>

        <script>
            $(function() {
                $('#myTab a:first').tab('show')
            })


            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

                //  alert("tab--"+$(this).attr("href"));
                var tabid = "tab_id";
                var archor = $(this).attr("href");

                switch (archor)
                {
                    case "#home":
                        tabid = "tab_id";
                        break;
                    case "#profile":
                        tabid = "tab_id2";
                        break;
                    case "#messages":
                        tabid = "tab_id3";
                        break;
                }
                $('#' + tabid).dataTable().fnDestroy();
                $('#' + tabid).dataTable({
                    "sPaginationType": "full_numbers"
                });
                //        $('#'+tabid+'_length').hide();


                //  $('#'+tabid+'_length').css("margin-left", "12%");  
                ////  e.target // activated tab
                // e.relatedTarget // previous tab
            })
            //              $("#tab_id_length").css("margin-left", "12%");


            //              jQuery("#tab_id_paginate").css('width', "40%"); 
            $('#tab_id_length').insertAfter($("#tab_id_info"));
            $('#tab_id_length').show();
            $('#tab_id_filter').css("margin-right", '1%');
            $("#tab_id_filter input").css("border-radius", "6px");
            //  $("#tab_id_filter input").attr("class", "form-control");  
            $("#tab_id_filter input").css("border", "none");
            jQuery("#tab_id2_paginate").css('width', "40%");
            $('#tab_id2_length').insertAfter($("#tab_id_info"));
            $('#tab_id2_length').show();
            $('#tab_id2_filter').css("margin-right", '1%');
            $("#tab_id2_filter input").css("border-radius", "6px");
            //  $("#tab_id_filter input").attr("class", "form-control");  
            $("#tab_id2_filter input").css("border", "none");



        </script>
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
                            <i class="glyphicon glyphicon-hdd"></i>    
                            Car
                        </span>
                        <span class="breadcrumb-arrow">
                            <span></span>
                        </span>  
                    </div>
                </div> 
            </div>  
            <div class="tabbable container">


                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#home" data-toggle="tab">Name</a></li> 
                    <li><a href="#profile" data-toggle="tab">Group</a></li>
                    <li><a href="#messages" data-toggle="tab">Services</a></li>
                    <!--  <li><a href="#settings" data-toggle="tab">Settings</a></li>-->
                </ul> 

                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <!--      <div class="myc"> tab1 </div>-->
                        <table cellpadding="0" cellspacing="0" border="0" class="table dataTable display" id="tab_id">  


                            <thead>      
                                <tr>
                                    <th>Car Name</th>  
                                    <th>Group</th>
                                    <th>Service</th>
                                    <th>Action</th>


                                </tr> </thead>
                            <tbody>  <tr> 

                                    <td></td>
    <!--                                    <span class="input-group">-->

                                    <td></td> 
                                    <td></td>

                                    <td>        
                                        <!--<button class="btn btn-default"><a class="anchor" href="">Edit</a></button>-->
                                        <a class="btn btn-default anchor edit_1 edit_btn" >Edit</a>



                                        <!-- Modal -->
                                        <a  class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td> 

                                </tr>   


                                <tr><td></td>
                                    <td></td> 

                                    <td></td> 

                                    <td><a  class="btn btn-default edit_1 edit_btn anchor" > Edit</a>  


                                        <a class="btn btn-default anchor"  href="#responsive1" data-toggle="modal">Delete</a></td> 

                                </tr>  
                                <tr><td></td>  
                                    <td></td> 

                                    <td></td>


                                    <td><a class="btn btn-default anchor edit_1 edit_btn">Edit</a>
                                        <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td>

                                </tr>  
                                <tr><td></td> 
                                    <td></td> 

                                    <td></td>

                                    <td><a  class="btn btn-default edit_1 edit_btn anchor">Edit</a>   
                                        <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td>
                                </tr> 
                                <tr>
                                    <td></td>  
                                    <td></td>  
                                    <td></td>   


                                    <td>

                                        <a class="btn btn-default" href="#responsive2" data-toggle="modal">Edit</a>        

                                        <div id="responsive2" class="modal hide fade" tabindex="-1" data-width="500">
                                            <div class="modal-header mod_head" >
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <center> <h4>Edit</h4></center>
                                            </div>    
                                            <center>  <div class="modal-body modal_1">
                                                    <div class="row-fluid">    
                                                        <div class="span6">   
                                                            <label class="label label-info  col-sm-2">Airline Name</label>       

                                                            <input type="text" class="form-control input_width">
                                                            <br/>    
                                                            <label class="label label-info  col-sm-2">Group Name</label>
                                                            <input type="text" class="form-control input_width">
                                                            <br/>  
                                                            <label class="label label-info  col-sm-2">Service Name</label>  
                                                            <input type="text" class="form-control input_width">  
                                                            <br/>
                                                        </div>    
                                                    </div>   
                                                </div></center>    
                                            <div class="modal-footer">
                                                <center>
                                                    <button type="button" class="btn btn-info">Save changes</button>  

                                                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button></center>
                                            </div>
                                        </div>
                                        <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a>  

                                        <div id="responsive1" class="modal hide fade" tabindex="-1" data-width="500">
                                            <!--    <div class="modal-header mod_head" >
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
                    <div class="tab-pane" id="profile">

                        <table cellpadding="0" cellspacing="0" border="0" class="table dataTable display" id="tab_id2">


                            <thead>      
                                <tr>
                                    <th>Group Name</th>  
                                    <th>Group</th>
                                    <th>Service</th>
                                    <th>Action</th>


                                </tr> </thead> 
                            <tbody>  <tr> 

                                    <td></td>
    <!--                                    <span class="input-group">-->

                                    <td></td> 
                                    <td></td>

                                    <td>        
                                        <!--<button class="btn btn-default"><a class="anchor" href="">Edit</a></button>-->
                                        <a class="btn btn-default anchor edit_1 edit_btn" >Edit</a>



                                        <!-- Modal -->
                                        <a  class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td> 

                                </tr>   


                                <tr><td></td>
                                    <td></td> 

                                    <td></td> 

                                    <td><a  class="btn btn-default edit_1 edit_btn anchor" > Edit</a>  


                                        <a class="btn btn-default anchor"  href="#responsive1" data-toggle="modal">Delete</a></td> 

                                </tr>  
                                <tr><td></td>  
                                    <td></td> 

                                    <td></td>


                                    <td><a class="btn btn-default anchor edit_1 edit_btn">Edit</a>
                                        <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td>

                                </tr>  
                                <tr><td></td> 
                                    <td></td> 

                                    <td></td>

                                    <td>
                                        <a class="btn btn-default edit_1 edit_btn anchor">Edit</a>   
                                        <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td>
                                </tr> 
                                <tr><td></td>
                                    <td></td>  

                                    <td></td>   

                                    <td>

                                        <a class="btn btn-default" href="#responsive2" data-toggle="modal">Edit</a>            

                                        <div id="responsive2" class="modal hide fade" tabindex="-1" data-width="500">
                                            <div class="modal-header mod_head" >
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <center> <h4>Edit</h4></center>
                                            </div>   
                                            <center>  <div class="modal-body modal_1">  
                                                    <div class="row-fluid">    
                                                        <div class="span6">     
                                                            <label class="label label-info  col-sm-2">Car Name</label>      

                                                            <input type="text" placeholder="City_Name" class="form-control input_width">
                                                            <br/>    
                                                            <label class="label label-info  col-sm-2">Group Name</label>
                                                            <input type="text" placeholder="City_Name" class="form-control input_width">
                                                            <br/>   
                                                            <label class="label label-info  col-sm-2">Service Name</label>  
                                                            <input type="text" placeholder="City_Name" class="form-control input_width"> 
                                                            <br/>
                                                        </div>  
                                                    </div> 
                                                </div></center>    
                                            <div class="modal-footer"> 
                                                <center>   
                                                    <button type="button" class="btn btn-info">Save changes</button>  

                                                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button></center>
                                            </div>
                                        </div>   
                                        <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a>  

                                        <div id="responsive1" class="modal hide fade" tabindex="-1" data-width="500">
                                            <!--    <div class="modal-header mod_head" >
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


                            <a class="btn btn-info" href="#responsive" data-toggle="modal"  
                               style="  margin-left:-552px;
                               margin-right: -60px;
                               margin-top: 42px;">ADD</a>  

                            <div id="responsive" class="modal hide fade" tabindex="-1" data-width="500">
                                <div class="modal-header mod_head" >
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <center> <h4>Add</h4></center> 
                                </div>  
                                <center>  <div class="modal-body">
                                        <div class="row-fluid">  
                                            <div class="span6"> 
                                                <label class="label label-info  col-sm-2">Airline Name</label>    

                                                <input type="text" placeholder="Airline Name" class="form-control input_width">
                                                <br/>    
                                                <label class="label label-info  col-sm-2">Group Name</label>

                                                <input type="text" placeholder="Group Name" class="form-control input_width">
                                                <br/>  

                                                <label class="label label-info  col-sm-2">Service Name</label>
                                                <input type="text" placeholder="Service Name" class="form-control input_width"> 
                                                <br/> 
                                                <br/>  

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

                    </tbody>

                    </table>

                </div>
                <div class="tab-pane" id="messages">


                    <table cellpadding="0" cellspacing="0" border="0" class="table dataTable display" id="tab_id3">


                        <thead>      
                            <tr>
                                <th>Group Name</th>  
                                <th>Group</th>
                                <th>Service</th>
                                <th>Action</th>


                            </tr> </thead> 
                        <tbody>  <tr> 

                                <td></td>
<!--                                    <span class="input-group">-->

                                <td></td> 
                                <td></td>

                                <td>        
                                    <!--<button class="btn btn-default"><a class="anchor" href="">Edit</a></button>-->
                                    <a class="btn btn-default anchor edit_1 edit_btn" >Edit</a>



                                    <!-- Modal -->
                                    <a  class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td> 

                            </tr>   


                            <tr><td></td>
                                <td></td> 

                                <td></td> 

                                <td><a  class="btn btn-default edit_1 edit_btn anchor" > Edit</a>  


                                    <a class="btn btn-default anchor"  href="#responsive1" data-toggle="modal">Delete</a></td> 

                            </tr>  
                            <tr><td></td>  
                                <td></td> 

                                <td></td>


                                <td><a class="btn btn-default anchor edit_1 edit_btn">Edit</a>
                                    <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td>

                            </tr>  
                            <tr><td></td> 
                                <td></td> 

                                <td></td>

                                <td>
                                    <a class="btn btn-default edit_1 edit_btn anchor">Edit</a>   
                                    <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td>
                            </tr> 
                            <tr><td></td>
                                <td></td>  

                                <td></td>   

                                <td>

                                    <a class="btn btn-default" href="#responsive2" data-toggle="modal">Edit</a>            

                                    <div id="responsive2" class="modal hide fade" tabindex="-1" data-width="500">
                                        <div class="modal-header mod_head" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <center> <h4>Edit</h4></center>
                                        </div>   
                                        <center>  <div class="modal-body modal_1">  
                                                <div class="row-fluid">    
                                                    <div class="span6">     
                                                        <label class="label label-info  col-sm-2">Airline Name</label>      

                                                        <input type="text" placeholder="City_Name" class="form-control input_width">
                                                        <br/>    
                                                        <label class="label label-info  col-sm-2">Group Name</label>
                                                        <input type="text" placeholder="City_Name" class="form-control input_width">
                                                        <br/>   
                                                        <label class="label label-info  col-sm-2">Service Name</label>  
                                                        <input type="text" placeholder="City_Name" class="form-control input_width"> 
                                                        <br/>
                                                    </div>  
                                                </div> 
                                            </div></center>    
                                        <div class="modal-footer"> 
                                            <center>   
                                                <button type="button" class="btn btn-info">Save changes</button>  

                                                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button></center>
                                        </div>
                                    </div>   
                                    <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a>  

                                    <div id="responsive1" class="modal hide fade" tabindex="-1" data-width="500">
                                        <!--    <div class="modal-header mod_head" >
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


                        <a class="btn btn-info" href="#responsive" data-toggle="modal"  
                           style="  margin-left:-552px;
                           margin-right: -60px;
                           margin-top: 42px;">ADD</a>  

                        <div id="responsive" class="modal hide fade" tabindex="-1" data-width="500">
                            <div class="modal-header mod_head" >
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <center> <h4>Add</h4></center> 
                            </div>  
                            <center>  <div class="modal-body">  
                                    <div class="row-fluid">  
                                        <div class="span6"> 
                                            <label class="label label-info  col-sm-2">Car Name</label>    

                                            <input type="text" placeholder="Car Name" class="form-control input_width">
                                            <br/>    
                                            <label class="label label-info  col-sm-2">Group Name</label>

                                            <input type="text" placeholder="Group Name" class="form-control input_width">
                                            <br/>  

                                            <label class="label label-info  col-sm-2">Service Name</label>
                                            <input type="text" placeholder="Service Name" class="form-control input_width"> 
                                            <br/> 
                                            <br/>  

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

                </tbody>

                </table>



            </div>

        </div>
        <div class="tab-content" style="overflow: inherit"> 
            <div id="pane1" class="tab-pane active">  


                <div id="pane2" class="tab-pane ">  


                    <a class="btn btn-info" href="#responsive" data-toggle="modal"
                       style="  margin-left: -552px;
                       margin-right: -60px;
                       margin-top: 26px;">ADD</a>  

                    <div id="responsive" class="modal hide fade" tabindex="-1" data-width="500">
                        <div class="modal-header mod_head" >
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <center> <h4>Add</h4></center> 
                        </div>  
                        <center>  <div class="modal-body">
                                <div class="row-fluid">  
                                    <div class="span6"> 
                                        <label class="label label-info  col-sm-2">Car Name</label>    

                                        <input type="text" placeholder="Car Name" class="form-control input_width">
                                        <br/>    
                                        <label class="label label-info  col-sm-2">Group Name</label>  

                                        <input type="text" placeholder="Group Name" class="form-control input_width">
                                        <br/>  

                                        <label class="label label-info  col-sm-2">Service Name</label>
                                        <input type="text" placeholder="Service Name" class="form-control input_width"> 
                                        <br/>  
                                        <br/>  

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



            </div>

        </div>

    </div>   





</body>  
</html>
