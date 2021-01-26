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

        var time = <?php echo $TIME_; ?>;
        var x_title = <?php echo ('"' . $XTitle . '"'); ?>;
        var series = <?php echo $series; ?>;

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
            series: series
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
