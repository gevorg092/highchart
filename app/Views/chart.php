<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>High Charts</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- SCRIPT -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- STYLES -->
</head>
<body>
<script type="text/javascript">

    $(function () {

        var dptdtat_3 = <?php echo $DPTDTAT_3; ?>;
        var dptusag_3 = <?php echo $DPTUSAG_3; ?>;
        var dpthwt_3 = <?php echo $DPTHWT_3; ?>;
        var dptdtat_9 = <?php echo $DPTDTAT_9; ?>;
        var dptusag_9 = <?php echo $DPTUSAG_9; ?>;
        var dpthwt_9 = <?php echo $DPTHWT_9; ?>;
        var dptdtat_10 = <?php echo $DPTDTAT_10; ?>;
        var dptusag_10 = <?php echo $DPTUSAG_10; ?>;
        var dpthwt_10 = <?php echo $DPTHWT_10; ?>;
        var time = <?php echo $TIME_; ?>;
        var x_title = <?php echo ('"' . $XTitle . '"'); ?>;

        $('#container').highcharts({
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Highchart'
            },
            xAxis: {
                categories: time,
                title: {
                    text: x_title
                }
            },
            yAxis: {
                title: {
                    text: 'Ocurrencias'
                }
            },
            plotOptions: {
                areaspline: {
                    fillOpacity: 0.1
                },
                cursor: 'pointer',
            },
            series: [
                {
                    name: 'DPTDTAT_3',
                    data: dptdtat_3
                }, {
                    name: 'DPTUSAG_3',
                    data: dptusag_3
                }, {
                    name: 'DPTHWT_3',
                    data: dpthwt_3
                },
                {
                    name: 'DPTDTAT_9',
                    data: dptdtat_9
                }, {
                    name: 'DPTUSAG_9',
                    data: dptusag_9
                }, {
                    name: 'DPTHWT_9',
                    data: dpthwt_9
                },
                {
                    name: 'DPTDTAT_10',
                    data: dptdtat_10
                }, {
                    name: 'DPTUSAG_10',
                    data: dptusag_10
                }, {
                    name: 'DPTHWT_10',
                    data: dpthwt_10
                }
            ]
        });
    });

</script>
<div class="container">
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
