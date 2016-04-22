<html>
    <head>
        <?php
        require('commonView.html');
        ?>

         <style>
  footer {
            width: 100%;
            bottom: 0;
            height: 20px;
            text-align:center;
            color: white;
            position: fixed;
        }
  </style>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>DASHBOARD1 GRAPHS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
$(function (){
            //var pieChart;
            $(document).ready(function() {
    var options = {
        chart: {
renderTo: 'pie',
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 55,
                beta: 0
            }
        },
        title: {
            text: 'CLASSIFICATION OF CITIES BASED ON PACKAGE LOSS DUE TO ROTTEN FOOD'
        },
        tooltip: {
            formatter: function() {
                        return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                    }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    formatter: function() {
                                return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                            }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: []
                
            
        }]
}
$.getJSON("rottenData.php", function(json) {
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
    });
});
});
</script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/highcharts-3d.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>                 
<!--Charts end here-->
    </head>
    <body>
        <?php
      require("navbar.html");
     ?>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <div id="pie" style="min-width: 700px; height: 700px; margin: 0 auto"></div>
    </body>
</html>
