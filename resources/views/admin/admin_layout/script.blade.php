<!-- Required common Js -->
<script src="{{ asset('adminAsset/js/jquery-2.2.3.min.js') }}"></script>
<!-- //Required common Js -->
    
<!-- loading-gif Js -->
<script src="{{ asset('adminAsset/js/modernizr.js') }}"></script>
<script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
<!--// loading-gif Js -->

<!-- Sidebar-nav Js -->
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<!--// Sidebar-nav Js -->

<!-- Graph -->
<script src="{{ asset('adminAsset/js/SimpleChart.js') }}"></script>
<script>
    var graphdata4 = {
        linecolor: "Random",
        title: "Thursday",
        values: [{
                X: "6",
                Y: 300.00
            },
            {
                X: "7",
                Y: 101.98
            },
            {
                X: "8",
                Y: 140.00
            },
            {
                X: "9",
                Y: 340.00
            },
            {
                X: "10",
                Y: 470.25
            },
            {
                X: "11",
                Y: 180.56
            },
            {
                X: "12",
                Y: 680.57
            },
            {
                X: "13",
                Y: 740.00
            },
            {
                X: "14",
                Y: 800.89
            },
            {
                X: "15",
                Y: 420.57
            },
            {
                X: "16",
                Y: 980.24
            },
            {
                X: "17",
                Y: 1080.00
            },
            {
                X: "18",
                Y: 140.24
            },
            {
                X: "19",
                Y: 140.58
            },
            {
                X: "20",
                Y: 110.54
            },
            {
                X: "21",
                Y: 480.00
            },
            {
                X: "22",
                Y: 580.00
            },
            {
                X: "23",
                Y: 340.89
            },
            {
                X: "0",
                Y: 100.26
            },
            {
                X: "1",
                Y: 1480.89
            },
            {
                X: "2",
                Y: 1380.87
            },
            {
                X: "3",
                Y: 1640.00
            },
            {
                X: "4",
                Y: 1700.00
            }
        ]
    };
    $(function () {
        $("#Hybridgraph").SimpleChart({
            ChartType: "Hybrid",
            toolwidth: "50",
            toolheight: "25",
            axiscolor: "#E6E6E6",
            textcolor: "#6E6E6E",
            showlegends: false,
            data: [graphdata4],
            legendsize: "140",
            legendposition: 'bottom',
            xaxislabel: 'Hours',
            title: 'Weekly Profit',
            yaxislabel: 'Profit in $'
        });
    });
</script>
<!--// Graph -->
<!-- Bar-chart -->
<script src="{{ asset('adminAsset/js/rumcaJS.js') }}"></script>
<script src="{{ asset('adminAsset/js/example.js') }}"></script>
<!--// Bar-chart -->
<!-- Calender -->
<script src="{{ asset('adminAsset/js/moment.min.js') }}"></script>
<script src="{{ asset('adminAsset/js/pignose.calender.js') }}"></script>
<script>
    //<![CDATA[
    $(function () {
        $('.calender').pignoseCalender({
            select: function (date, obj) {
                obj.calender.parent().next().show().text('You selected ' +
                    (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                    '.');
            }
        });

        $('.multi-select-calender').pignoseCalender({
            multiple: true,
            select: function (date, obj) {
                obj.calender.parent().next().show().text('You selected ' +
                    (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                    '~' +
                    (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                    '.');
            }
        });
    });
    //]]>
</script>
<!--// Calender -->

<!-- profile-widget-dropdown js-->
<script src="{{ asset('adminAsset/js/script.js') }}"></script>
<!--// profile-widget-dropdown js-->



<!-- dropdown nav -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->

<!-- Js for bootstrap working-->
<script src="{{ asset('adminAsset/js/bootstrap.min.js') }}"></script>
<!-- //Js for bootstrap working -->
