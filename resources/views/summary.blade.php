
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary</title>
    
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Summary</h3>
                <hr>
            </div>
            <div class=""></div>
        
            <div class="col-3">
                <canvas id="total_order" width="100%" height="40px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="delivered_order" width="100%" height="40px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="canceled_order" width="100%" height="40px"></canvas>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script>
            
        var myChart = new Chart(document.getElementById('total_order').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [
                     '2010',
                     '2011', 
                     '2012', 
                     '2013', 
                     '2014', 
                     '2015',
                     '2016',
                     '2017', 
                     '2018', 
                     '2019', 
                     '2020', 
                     '2021'
                    ],
                datasets: [{
                    label: 'Total order',
                    data: [  
                        {{ $data['total_order']['10'] }},
                        {{ $data['total_order']['9'] }},
                        {{ $data['total_order']['8'] }},
                        {{ $data['total_order']['7'] }},
                        {{ $data['total_order']['6'] }},
                        {{ $data['total_order']['5'] }},
                        {{ $data['total_order']['4'] }},
                        {{ $data['total_order']['3'] }},
                        {{ $data['total_order']['2'] }},
                        {{ $data['total_order']['1'] }},
                        {{ $data['total_order']['0'] }}
                        ],
                    backgroundColor: [
                     'green',
                     'violet', 
                     'red', 
                     'orange', 
                     'purple', 
                     'dandelion',
                     'black',
                     'pink', 
                     'yellow', 
                     'blue', 
                     'brown', 
                     'maroon'
                    ],
                    borderColor: [
                        'green',
                     'violet', 
                     'red', 
                     'orange', 
                     'purple', 
                     'dandelion',
                     'black',
                     'pink', 
                     'yellow', 
                     'blue', 
                     'brown', 
                     'maroon'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        var myChart = new Chart(document.getElementById('delivered_order').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [
                     '2010',
                     '2011', 
                     '2012', 
                     '2013', 
                     '2014', 
                     '2015',
                     '2016',
                     '2017', 
                     '2018', 
                     '2019', 
                     '2020', 
                     '2021'
                    ],
                datasets: [{
                    label: 'Delivered Order',
                    data: [  
                        {{ $data['delivered_order']['10'] }},
                        {{ $data['delivered_order']['9'] }},
                        {{ $data['delivered_order']['8'] }},
                        {{ $data['delivered_order']['7'] }},
                        {{ $data['delivered_order']['6'] }},
                        {{ $data['delivered_order']['5'] }},
                        {{ $data['delivered_order']['4'] }},
                        {{ $data['delivered_order']['3'] }},
                        {{ $data['delivered_order']['2'] }},
                        {{ $data['delivered_order']['1'] }},
                        {{ $data['delivered_order']['0'] }}
                        ],
                    backgroundColor: [
                     'green',
                     'violet', 
                     'red', 
                     'orange', 
                     'purple', 
                     'dandelion',
                     'black',
                     'pink', 
                     'yellow', 
                     'blue', 
                     'brown', 
                     'maroon'
                    ],
                    borderColor: [
                        'green',
                     'violet', 
                     'red', 
                     'orange', 
                     'purple', 
                     'dandelion',
                     'black',
                     'pink', 
                     'yellow', 
                     'blue', 
                     'brown', 
                     'maroon'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        var myChart = new Chart(document.getElementById('canceled_order').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [
                     '2010',
                     '2011', 
                     '2012', 
                     '2013', 
                     '2014', 
                     '2015',
                     '2016',
                     '2017', 
                     '2018', 
                     '2019', 
                     '2020', 
                     '2021'
                    ],
                datasets: [{
                    label: 'Cancel Order',
                    data: [  
                        {{ $data['canceled_order']['10'] }},
                        {{ $data['canceled_order']['9'] }},
                        {{ $data['canceled_order']['8'] }},
                        {{ $data['canceled_order']['7'] }},
                        {{ $data['canceled_order']['6'] }},
                        {{ $data['canceled_order']['5'] }},
                        {{ $data['canceled_order']['4'] }},
                        {{ $data['canceled_order']['3'] }},
                        {{ $data['canceled_order']['2'] }},
                        {{ $data['canceled_order']['1'] }},
                        {{ $data['canceled_order']['0'] }}
                        ],
                    backgroundColor: [
                     'green',
                     'violet', 
                     'red', 
                     'orange', 
                     'purple', 
                     'dandelion',
                     'black',
                     'pink', 
                     'yellow', 
                     'blue', 
                     'brown', 
                     'maroon'
                    ],
                    borderColor: [
                        'green',
                     'violet', 
                     'red', 
                     'orange', 
                     'purple', 
                     'dandelion',
                     'black',
                     'pink', 
                     'yellow', 
                     'blue', 
                     'brown', 
                     'maroon'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

                    
    </script>

</body>

</html>
