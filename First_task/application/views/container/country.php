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
            #dataTable_wrapper {
                margin-top: 25px;
                width: 78%;
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

            });


        </script>
        <style>
            td{
                text-align: center;
            }
        </style>


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
                            <i class="glyphicon glyphicon-user"></i>
                            Country
                        </span>
                        <span class="breadcrumb-arrow"> 
                            <span></span>
                        </span>
                    </div> 
                </div>  

                <div class="table_div">  
                    <table cellpadding="0" cellspacing="0" border="0" class="table dataTable display" id="tab_id"> 

                        <thead>      
                            <tr>  
                                <th>S_No</th>
                                <th>Country Name</th>
                                <th>Action</th> 


                            </tr> </thead>
                        <tbody>  <tr> 

                                <td>
<!--                                    <span class="input-group">-->

                                    1</td>
                                <td>India</td>

                                <td>
                                    <!--                    <button class="btn btn-default"><a class="anchor" href="">Edit</a></button>-->
                                    <a class="btn btn-default anchor edit_1 edit_btn" >  Edit </a>



                                    <!-- Modal -->
                                    <a  class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td>  

                            </tr>      


                            <tr><td>2</td>
                                <td>Australia</td>   

                                <td><a  class="btn btn-default edit_1 edit_btn anchor" > Edit</a>  


                                    <a class="btn btn-default anchor"  href="#responsive1" data-toggle="modal">Delete</a></td>

                            </tr>
                            <tr><td>3</td> 
                                <td>China</td>


                                <td><a class="btn btn-default anchor edit_1 edit_btn">Edit</a>
                                    <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td>

                            </tr>  
                            <tr><td>4</td>  
                                <td>Thailand</td>

                                <td><a  class="btn btn-default edit_1 edit_btn anchor">Edit</a>
                                    <a class="btn btn-default anchor" href="#responsive1" data-toggle="modal">Delete</a></td>
                            </tr> 
                            <tr><td>5</td>
                                <td>America</td>

                                <td>

                                    <a class="btn btn-default" href="#responsive2" data-toggle="modal">Edit</a>    

                                    <div id="responsive2" class="modal hide fade" tabindex="-1" data-width="500">
                                        <div class="modal-header mod_head" >
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <center> <h4>Edit Country</h4></center>
                                        </div>  
                                        <center>  <div class="modal-body modal_1"> 
                                                <div class="row-fluid">
                                                    <div class="span6"> 
                                                        <label class="label label-info col-sm-2">S_No</label>
                                                        <input type="text" placeholder="S_No" class="form-control input_width">
                                                        <br/>  
                                                        <label class="label label-info col-sm-2">Country Name</label>
                                                        <input type="text" placeholder="Country Name"  class="form-control input_width">  
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
            </div>  
            <a class="btn btn-info" href="#responsive" data-toggle="modal">ADD</a>  

            <div id="responsive" class="modal hide fade" tabindex="-1" data-width="500">
                <div class="modal-header mod_head" >
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <center> <h4>Add Country Name</h4></center> 
                </div>  
                <center>  <div class="modal-body">
                        <div class="row-fluid">
                            <div class="span6"> 
                                <label class="label label-info col-sm-2">S_No</label> 

                                <input type="text" placeholder="S_No" class="form-control input_width">
                                <br/>  
                                <label class="label label-info  col-sm-2">Country Name</label>
                                <input type="text" placeholder="Country Name" class="form-control input_width">
                                <br/>

                            </div>  

                        </div>
                    </div></center>  
                <div class="modal-footer">
                    <center>
                        <button type="button" class="btn btn-info">Add Country</button>   

                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button></center>  
                </div>
            </div>
    </body>
</html>

