<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CA | Index</title>
    
    @include('auth.links')

    <style type="text/css">
        input[type=text],
        input[type=password], input[type=number], input[type=email] {
            width: 100%;
            padding: 6px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type=text]:focus {
            outline: 1px groove aqua;
        }

        input[type=password]:focus {
            outline: 1px groove aqua;
        }

        input[type=number]:focus {
            outline: 1px groove aqua;
        }

        input[type=email]:focus {
            outline: 1px groove aqua;
        }
    </style>
    @yield('customcss')
</head>
<body>
@include('auth.header')
@yield('content')
@include('auth.footer')
<a href="#" class="btn btn-lg back-to-top" style="background-image: linear-gradient(to left bottom, #c62164, #b7226b, #a72570, #962973, #842c74);  ">
    <i class="fa fa-angle-double-up" style="color:white;"></i>
</a>
@include('auth.script')
@yield('customjs')
<script>
    function checkError() {
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var confirmed_pwd = $("#confirmed_pwd").val();
        var mobile_no = $("#mobile_no").val();
        var icai = $("#icai").val();
        if (name=="") {
            $("#name_err").fadeIn().html("Required");
            setTimeout(function(){ $("#name_err").fadeOut(); }, 3000);
            $("#name").focus();
            return false;
        }
        if (email=="") {
            $("#email_err").fadeIn().html("Required");
            setTimeout(function(){ $("#email_err").fadeOut(); }, 3000);
            $("#email").focus();
            return false;
        }
        if (password=="") {
            $("#pwd_err").fadeIn().html("Required");
            setTimeout(function(){ $("#pwd_err").fadeOut(); }, 3000);
            $("#password").focus();
            return false;
        }
        if (password.length!==6) {
            $("#pwd_err").fadeIn().html("Required 6 digits password");
            setTimeout(function(){ $("#pwd_err").fadeOut(); }, 3000);
            $("#password").focus();
            return false;
        }
        if (confirmed_pwd=="") {
            $("#conf_pwd_err").fadeIn().html("Required");
            setTimeout(function(){ $("#conf_pwd_err").fadeOut(); }, 3000);
            $("#confirmed_pwd").focus();
            return false;
        }
        if (confirmed_pwd !== password) {
            $("#pwd_err").fadeIn().html("Password doesn't match");
            setTimeout(function(){ $("#pwd_err").fadeOut(); }, 3000);
            $("#password").focus();
            return false;
        }
        if (mobile_no=="") {
            $("#mobile_err").fadeIn().html("Required");
            setTimeout(function(){ $("#mobile_err").fadeOut(); }, 3000);
            $("#mobile_no").focus();
            return false;
        }
        if (mobile_no.length !== 10) {
            $("#mobile_err").fadeIn().html("Required 10 digits.");
            setTimeout(function(){ $("#mobile_err").fadeOut(); }, 3000);
            $("#mobile_no").focus();
            return false;
        }
        if (icai=="") {
            $("#icai_err").fadeIn().html("Required");
            setTimeout(function(){ $("#icai_err").fadeOut(); }, 3000);
            $("#icai").focus();
            return false;
        }
        else
        {
            $("#registerForm").submit();
        }
    }
    
    $(document).ready(function () {
        // keyup function looks at the keys typed on the search box
        $('#referral_code').on('keyup',function() {
            // the text typed in the input field is assigned to a variable 
            var query = $(this).val();
            // call to an ajax function
            $.ajax({
                // assign a controller function to perform search action - route name is search
                url:"{{ route('search-referral-code') }}",
                // since we are getting data methos is assigned as GET
                type:"GET",
                // data are sent the server
                data:{'referral_code':query},
                // if search is succcessfully done, this callback function is called
                success:function (data) {
                    // print the search results in the div called country_list(id)
                    console.log(data);
                    if(data.error) {
                        $('#referral_err').html(data.error);
                    }
                    $('#referral_err').html(data.success);
                }
            })
            // end of ajax call
        });
    })
</script>

</body>

</html>