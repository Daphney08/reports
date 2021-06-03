<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Reporting</h3>
                <hr>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $total_number_of_customers }}</h5>
                        <small class="card-text">
                            Customers
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $total_number_of_customers_using_mobile }}</h5>
                        <small class="card-text">
                            Total customer using app
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $total_number_of_customers_using_browser }}</h5>
                        <small class="card-text">
                            Total customer using browser
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $female_customers }}</h5>
                        <small class="card-text">
                            Female Customers
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $male_customers }}</h5>
                        <small class="card-text">
                            Male Customers
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['child'] }}</h5>
                        <small class="card-text">
                            child Customers
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['adolescence'] }}</h5>
                        <small class="card-text">
                            child Customers
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['adult'] }}</h5>
                        <small class="card-text">
                            Adult Customers
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['senioradult'] }}</h5>
                        <small class="card-text">
                            Senior Adult Customers
                        </small>
                    </div>
                </div>
            </div>
           
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['ASIA'] }}</h5>
                        <small class="card-text">
                            ASIA
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['EUROPE'] }}</h5>
                        <small class="card-text">
                            EUROPE
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['USA'] }}</h5>
                        <small class="card-text">
                            USA
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['AFRICA'] }}</h5>
                        <small class="card-text">
                            AFRICA
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['AUSTRALIA'] }}</h5>
                        <small class="card-text">
                            AUSTRALIA
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-6"></div>
            <div class="col-3">
                <canvas id="bydevice" width="100px" height="100px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="bygender" width="100px" height="100px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="byage" width="100px" height="100px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="bycountry" width="100px" height="100px"></canvas>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script>
    var myChart = new Chart(document.getElementById('bydevice').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Mobile',
                'Browser'
            ],
            datasets: [{
                data: [ 
                    {{ $total_number_of_customers_using_mobile }},
                    {{ $total_number_of_customers_using_browser }}
                
            ],
                backgroundColor: [
                    'red',
                    'yellow'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Customers by Device'
                }
            }
        }
    });
        
   
    var myChart = new Chart(document.getElementById('bygender').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                
                'Female',
                'Male'
            ],
            datasets: [{
                data: [ 
                    {{ $female_customers }},
                    {{ $male_customers }}
                    
                
            ],
                backgroundColor: [
                    'black',
                    'pink'
                   
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Customers by Gender'
                }
            }
        }
    });
    var myChart = new Chart(document.getElementById('byage').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'child',
                'adolescence',
                'adult',
                'senioradult'
            ],
            datasets: [{
                data: [ 
                    {{ $age['child'] }},
                    {{ $age['adolescence'] }},
                    {{ $age['adult'] }},
                    {{ $age['senioradult'] }}
                
            ],
                backgroundColor: [
                    'pink',
                    'green',
                    'brown',
                    'blue'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Customers by Age'
                }
            }
        }
    });
    
    var myChart = new Chart(document.getElementById('bycountry').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'ASIA',
                'EUROPE',
                'USA',
                'AFRICA',
                'AUSTRALIA'
            ],
            datasets: [{
                data: [ 
                    {{ $country['ASIA'] }},
                    {{ $country['EUROPE'] }},
                    {{ $country['USA'] }},
                    {{ $country['AFRICA'] }},
                    {{ $country['AUSTRALIA'] }}
                
            ],
                backgroundColor: [
                    'red',
                    'yellow',
                    'blue',
                    'pink',
                    'gray'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Customers by Country'
                }
            }
        }
    });
    </script>
    
</body>

</html>