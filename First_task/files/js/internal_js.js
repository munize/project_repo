            function user()
            {
                $.ajax({
                    type: "POST",
                    url: "page_loader/user_management",
                    dataType: "html",
                    success: function(res) {

                        //                document.getElementById("my_sidebar").style.display="none";
                        $('#my_sidebar').html("");
                        $('#my_sidebar').html(res);


                    },
                    error: function(res)
                    {
                        alert("error");
                    }
                });

            }
            function country()
            {
                $.ajax({
                    type: "POST",
                    url: "page_loader/country",
                    dataType: "html",
                    success: function(res) {

                        //                document.getElementById("my_sidebar").style.display="none";
                        $('#my_sidebar').html("");
                        $('#my_sidebar').html(res);


                    },
                    error: function(res)
                    {
                        alert("error");
                    }
                });

            }
            function state()
            {
                $.ajax({
                    type: "POST",
                    url: "page_loader/state",
                    dataType: "html",
                    success: function(res) {

                        //                document.getElementById("my_sidebar").style.display="none";
                        $('#my_sidebar').html("");
                        $('#my_sidebar').html(res);


                    },
                    error: function(res)
                    {
                        alert("error");
                    }
                });

            }
            function city()
            {
                $.ajax({
                    type: "POST",
                    url: "page_loader/city",
                    dataType: "html",
                    success: function(res) {

                        //                document.getElementById("my_sidebar").style.display="none";
                        $('#my_sidebar').html("");
                        $('#my_sidebar').html(res);


                    },
                    error: function(res)
                    {
                        alert("error");
                    }
                });

            }

            function hotel()
            {
                $.ajax({
                    type: "POST",
                    url: "page_loader/hotel",
                    dataType: "html",
                    success: function(res) {

                        //                document.getElementById("my_sidebar").style.display="none";
                        $('#my_sidebar').html("");
                        $('#my_sidebar').html(res);


                    },
                    error: function(res)
                    {
                        alert("error");
                    }
                });

            }
            function airline()
            {
                $.ajax({
                    type: "POST",
                    url: "page_loader/airline",
                    dataType: "html",
                    success: function(res) {

                        //                document.getElementById("my_sidebar").style.display="none";
                        //    $('#my_sidebar').hide();
                        $('#my_sidebar').html("");
                        $('#my_sidebar').html(res);

                    },
                    error: function(res)
                    {
                        alert("error");
                    }
                });

            }
            function forms()
            {
                $.ajax({
                    type: "POST",
                    url: "page_loader/forms",
                    dataType: "html",
                    success: function(res) {

                        //                document.getElementById("my_sidebar").style.display="none";
                        //    $('#my_sidebar').hide();
                        $('#my_sidebar').html("");
                        $('#my_sidebar').html(res);


                    },
                    error: function(res)
                    {
                        alert("error");
                    }
                });

            }
            function travel()
            {
                $.ajax({
                    type: "POST",
                    url: "page_loader/travel_management",
                    dataType: "html",
                    success: function(res) {

                        //                document.getElementById("my_sidebar").style.display="none";
                        //    $('#my_sidebar').hide();
                        $('#my_sidebar').html("");
                        $('#my_sidebar').html(res);


                    },
                    error: function(res)
                    {
                        alert("error");
                    }
                });

            }
            function car()
            {
                $.ajax({
                    type: "POST",
                    url: "page_loader/car",
                    dataType: "html",
                    success: function(res) {

                        //                document.getElementById("my_sidebar").style.display="none";
                        //    $('#my_sidebar').hide();
                        $('#my_sidebar').html("");
                        $('#my_sidebar').html(res);


                    },
                    error: function(res)
                    {
                        alert("error");
                    }
                });

            }