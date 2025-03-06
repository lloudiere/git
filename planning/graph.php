<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['gantt']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Task ID');
            data.addColumn('string', 'Task Name');
            data.addColumn('date', 'Start Date');
            data.addColumn('date', 'End Date');
            data.addColumn('number', 'Duration');
            data.addColumn('number', 'Percent Complete');
            data.addColumn('string', 'Dependencies');

            data.addRows([
                ['Tâche 1', 'Tâche 1', new Date(2024, 7, 1), new Date(2024, 7, 18), null, 100, null],
                ['Tâche 2', 'Tâche 2', new Date(2024, 7, 3), new Date(2024, 7, 10), null, 80, null],
                ['Tâche 3', 'Tâche 3', new Date(2024, 7, 10), new Date(2024, 7, 21), null, 100, null]
            ]);

            var options = {
                height: 200,
                gantt: {
                    trackHeight: 30
                }
            };

            var chart = new google.visualization.Gantt(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
   
        <!-- il faut rajouter la div dans le body -->
   <div class=""  disabled>
        <div id="chart_div"> </div>
    </div>