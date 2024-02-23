@extends('template.app')
@push('core-style')
<link rel="stylesheet" href="{{ asset('css/core.css') }}" />
<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
<style>
    /*untuk media query wrapper*/
    @media (min-width: 992px) {
        .wrapper {
            padding-left: 50px;
        }
    }
</style>
@endpush

@section('content')

@include('core.layouts.navbar')

<div class="wrapper" style="height: 100vh;;">
    @include('core.layouts.sidebar')
    <div class="container content p-3">
    @include('core.layouts.header')
    @yield('core-content')
    </div>
</div>
@endsection

@push('core-script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // var lineChartData = {
    //     labels: [
    //     "January",
    //     "February",
    //     "March",
    //     "April",
    //     "May",
    //     "June",
    //     "July",
    //     ],
    //     datasets: [
    //     {
    //         label: "Monthly Sales",
    //         borderColor: "black",
    //         data: [65, 59, 80, 81, 56, 55, 40],
    //         fill: false,
    //     },
    //     ],
    // };
    
    // var lineChartOptions = {
    //     scales: {
    //         x: [
    //         {
    //             ticks: {
    //                 maxRotation: 0,
    //                 minRotation: 0,
    //             },
    //         },
    //         ],
    // //     },
    // // };
    
    // var lineChart = new Chart(
    // document.getElementById("lineChart").getContext("2d"),
    // {
    //     type: "line",
    //     data: lineChartData,
    //     options: lineChartOptions,
    // }
    // );
    
    // konfigurasi bar chart
    var barChartData = {
        labels: [
        "Acara",
        "Humas",
        "Konsumsi",
        "Perlengkapan",
        "PDD",
        "USDA",
        "Pendaftaran",
        "Sponsorship",
        ],
        datasets: [
        {
            label: "Sales",
            backgroundColor: "rgba(0, 0, 0, 0.5)",
            borderColor: "black",
            borderWidth: 1,
            data: [50, 70, 40, 60, 80],
        },
        ],
    };
    
    var barChartOptions = {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    };
    
    var barChart = new Chart(
    document.getElementById("barChart").getContext("2d"),
    {
        type: "bar",
        data: barChartData,
        options: barChartOptions,
    }
    );
</script>
<script src="{{ asset('js/core.js') }}"></script>

@endpush