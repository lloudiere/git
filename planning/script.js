document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('progressChart').getContext('2d');
    const progressChart = new Chart(ctx, {
        type: 'bar',
        data: {
            //labels:  ['A faire', 'En retard', 'En cours', 'Terminée'],
            labels: Object.keys(statusCounts),
            datasets: [{
                label: 'Nombre de Tâches',
                data: Object.values(statusCounts),
                backgroundColor: ['#2196f3','#ff9800', '#4caf50','#f44336']
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 18//Object.keys(statusCounts)
                }
            },
            plugins: {
                legend: {
                    display: true
                }
            }
        }
    });


    // const ctx1 = document.getElementById('progressChart1').getContext('2d');
    // const progressChart1 = new Chart(ctx1, {
    //     type: 'pie',
    //     data: {
    //         //labels:  ['A faire', 'En retard', 'En cours', 'Terminée'],
    //         labels: Object.keys(statusCounts),
    //         datasets: [{
    //             label: 'Nombre de Tâches',
    //             data: Object.values(statusCounts),
    //             backgroundColor: ['#2196f3','#ff9800', '#4caf50','#f44336']
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true,
    //                 max: 18//Object.keys(statusCounts)
    //             }
    //         },
    //         plugins: {
    //             legend: {
    //                 display: true
    //             }
    //         }
    //     }
    // });
});
