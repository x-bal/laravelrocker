@extends('layouts.master', ["title" => $title ?? "Dashboard"])

@push('style')

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h6>Record POR / Batch</h6>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th rowspan="2" style="vertical-align: middle;">No POR</th>
                            <th>Loading</th>
                            <th>Cooking</th>
                            <th>Taping</th>
                            <th rowspan="2" style="vertical-align: middle;">Status</th>
                        </tr>
                        <tr class="align-items-center">
                            <td>
                                <div class="icon-badge mx-auto rounded-circle bg-gradient-burning text-white"></div>
                            </td>
                            <td>
                                <div class="icon-badge mx-auto rounded-circle bg-warning text-white"></div>
                            </td>
                            <td>
                                <div class="icon-badge mx-auto rounded-circle bg-success text-white"></div>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td style="vertical-align: middle;">POR12345678</td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="icon-badge mx-auto rounded-circle bg-success text-white"></div>
                            </td>
                            <td>FINISHED</td>
                        </tr>

                        <tr class="text-center">
                            <td style="vertical-align: middle;">POR23456789</td>
                            <td></td>
                            <td>
                                <div class="icon-badge mx-auto rounded-circle bg-warning text-white"></div>
                            </td>
                            <td></td>
                            <td>COOKING</td>
                        </tr>

                        <tr class="text-center">
                            <td style="vertical-align: middle;">POR34567890</td>
                            <td>
                                <div class="icon-badge mx-auto rounded-circle bg-gradient-burning text-white"></div>
                            </td>
                            <td></td>
                            <td></td>
                            <td>LOADING</td>
                        </tr>

                        <tr class="text-center">
                            <td style="vertical-align: middle;">POR12345789</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>SCHEDULED</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div id="chart-line"></div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div id="chart-line-cool"></div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div id="chart-line-por"></div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h6>Total Waktu Proses</h6>

                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th rowspan="2"></th>
                            <th>Batch 1</th>
                            <th>Batch 2</th>
                            <th>Batch 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Start</td>
                            <td>06:00-06:15</td>
                            <td>08:00-08:15</td>
                            <td>10:00-10:15</td>
                        </tr>
                        <tr>
                            <td>Cooking</td>
                            <td>06:15-06:55</td>
                            <td>08:15-08:55</td>
                            <td>10:15-10:55</td>
                        </tr>
                        <tr>
                            <td>Cooling</td>
                            <td>07:10-07:30</td>
                            <td>09:10-09:30</td>
                            <td>11:10-11:30</td>
                        </tr>
                        <tr>
                            <td>Filling</td>
                            <td>07:30-08:00</td>
                            <td>09:30-10:00</td>
                            <td>11:30-12:00</td>
                        </tr>
                        <tr>
                            <td>Stop</td>
                            <td>8:00</td>
                            <td>10:00</td>
                            <td>12:00</td>
                        </tr>
                        <tr>
                            <td>Total (Menit)</td>
                            <td>120</td>
                            <td>120</td>
                            <td>120</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@push('script')
<script src="{{ asset('/') }}plugins/apexcharts-bundle/js/apexcharts.min.js"></script>

<script>
    $(function() {
        "use strict";
        // chart 1
        var options = {
            series: [{
                name: 'Likes',
                data: [85, 90, 88, 85, 93, 94, 95, 90, 92, 89]
            }],
            chart: {
                foreColor: '#9ba7b2',
                height: 360,
                type: 'line',
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: true
                },
                dropShadow: {
                    enabled: true,
                    top: 3,
                    left: 14,
                    blur: 4,
                    opacity: 0.10,
                },
            },
            stroke: {
                width: 5,
                curve: 'smooth'
            },
            xaxis: {
                type: 'string',
                categories: ["POR 1", "POR 2", "POR 3", "POR 4", "POR 5", "POR 6", "POR 7", "POR 8", "POR 9", "POR 10"],
            },
            title: {
                text: 'Pemanasan Actual',
                align: 'left',
                style: {
                    fontSize: "16px",
                    color: '#666'
                },
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    gradientToColors: ['#f41127'],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100, 100, 100]
                },
            },
            markers: {
                size: 4,
                colors: ["#f41127"],
                strokeColors: "#fff",
                strokeWidth: 2,
                hover: {
                    size: 7,
                },
            },
            colors: ["#f41127"],
            yaxis: {
                title: {
                    text: 'Suhu',
                },
                // Define custom lines for limit values
                lines: [{
                        value: 85,
                        borderColor: '#FF5722',
                        label: {
                            borderColor: '#FF5722',
                            style: {
                                color: '#fff',
                                background: '#FF5722',
                            },
                            text: 'Limit: 85',
                        },
                    },
                    {
                        value: 90,
                        borderColor: '#FFC107',
                        label: {
                            borderColor: '#FFC107',
                            style: {
                                color: '#fff',
                                background: '#FFC107',
                            },
                            text: 'Limit: 90',
                        },
                    },
                    {
                        value: 95,
                        borderColor: '#4CAF50',
                        label: {
                            borderColor: '#4CAF50',
                            style: {
                                color: '#fff',
                                background: '#4CAF50',
                            },
                            text: 'Limit: 95',
                        },
                    },
                ],
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart-line"), options);
        chart.render();

        // chart 2
        var optionsCool = {
            series: [{
                name: 'Likes',
                data: [85, 90, 88, 85, 93, 94, 95, 90, 92, 89]
            }],
            chart: {
                foreColor: '#9ba7b2',
                height: 360,
                type: 'line',
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: true
                },
                dropShadow: {
                    enabled: true,
                    top: 3,
                    left: 14,
                    blur: 4,
                    opacity: 0.10,
                },
            },
            stroke: {
                width: 5,
                curve: 'smooth'
            },
            xaxis: {
                type: 'string',
                categories: ["POR 1", "POR 2", "POR 3", "POR 4", "POR 5", "POR 6", "POR 7", "POR 8", "POR 9", "POR 10"],
            },
            title: {
                text: 'Pendinginan Actual',
                align: 'left',
                style: {
                    fontSize: "16px",
                    color: '#666'
                },
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    gradientToColors: ['#0000ff'],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100, 100, 100]
                },
            },
            markers: {
                size: 4,
                colors: ["#0000ff"],
                strokeColors: "#fff",
                strokeWidth: 2,
                hover: {
                    size: 7,
                },
            },
            colors: ["#0000ff"],
            yaxis: {
                title: {
                    text: 'Suhu',
                },
                // Define custom lines for limit values
                lines: [{
                        value: 85,
                        borderColor: '#FF5722',
                        label: {
                            borderColor: '#FF5722',
                            style: {
                                color: '#fff',
                                background: '#FF5722',
                            },
                            text: 'Limit: 85',
                        },
                    },
                    {
                        value: 90,
                        borderColor: '#FFC107',
                        label: {
                            borderColor: '#FFC107',
                            style: {
                                color: '#fff',
                                background: '#FFC107',
                            },
                            text: 'Limit: 90',
                        },
                    },
                    {
                        value: 95,
                        borderColor: '#4CAF50',
                        label: {
                            borderColor: '#4CAF50',
                            style: {
                                color: '#fff',
                                background: '#4CAF50',
                            },
                            text: 'Limit: 95',
                        },
                    },
                ],
            },
        };

        var chartCool = new ApexCharts(document.querySelector("#chart-line-cool"), optionsCool);
        chartCool.render();

        var optionsPor = {
            series: [{
                name: 'Likes',
                data: [85, 90, 88, 85, 93, 94, 95, 90, 92, 89]
            }],
            chart: {
                foreColor: '#9ba7b2',
                height: 360,
                type: 'line',
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: true
                },
                dropShadow: {
                    enabled: true,
                    top: 3,
                    left: 14,
                    blur: 4,
                    opacity: 0.10,
                },
            },
            stroke: {
                width: 5,
                curve: 'smooth'
            },
            xaxis: {
                type: 'string',
                categories: ["POR 1", "POR 2", "POR 3", "POR 4", "POR 5", "POR 6", "POR 7", "POR 8", "POR 9", "POR 10"],
            },
            title: {
                text: 'Actual Suhu Per Batch',
                align: 'left',
                style: {
                    fontSize: "16px",
                    color: '#666'
                },
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    gradientToColors: ['#42d15c'],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100, 100, 100]
                },
            },
            markers: {
                size: 4,
                colors: ["#42d15c"],
                strokeColors: "#fff",
                strokeWidth: 2,
                hover: {
                    size: 7,
                },
            },
            colors: ["#42d15c"],
            yaxis: {
                title: {
                    text: 'Suhu',
                },
                // Define custom lines for limit values
                lines: [{
                        value: 85,
                        borderColor: '#FF5722',
                        label: {
                            borderColor: '#FF5722',
                            style: {
                                color: '#fff',
                                background: '#FF5722',
                            },
                            text: 'Limit: 85',
                        },
                    },
                    {
                        value: 90,
                        borderColor: '#FFC107',
                        label: {
                            borderColor: '#FFC107',
                            style: {
                                color: '#fff',
                                background: '#FFC107',
                            },
                            text: 'Limit: 90',
                        },
                    },
                    {
                        value: 95,
                        borderColor: '#4CAF50',
                        label: {
                            borderColor: '#4CAF50',
                            style: {
                                color: '#fff',
                                background: '#4CAF50',
                            },
                            text: 'Limit: 95',
                        },
                    },
                ],
            },
        };

        var chartPor = new ApexCharts(document.querySelector("#chart-line-por"), optionsPor);
        chartPor.render();
    })
</script>
@endpush