<!DOCTYPE html>
<html>
    <head>
        <title>Test Plotly</title>
        <meta charset="utf-8"/>
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    </head>
    <?php require 'data.php';?>
    <body>
        <h1>Line Plot</h1>
        <div id="line-plot"></div>
        
        <h1>Bar Charts</h1>
        <div id="bar-chart"></div>

        <h1>Pie Chart</h1>
        <div id="pie-chart"></div>
        
    </body>
    <script>
        const data = <?php echo json_encode(dataPhp()) . ";"; ?>

        var layout = {
            height: 400,
            width: 500
        };

        Plotly.newPlot('pie-chart', data, layout);
    </script>
</html>