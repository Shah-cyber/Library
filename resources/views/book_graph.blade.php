@extends('layouts.mainlayout')

@section('title', 'Book Graph')

@section('content')
    <h1>Book Graph</h1>

    <div id="bookGraph"></div>

    <script>
        // JavaScript code for generating the book graph
        var ctx = document.getElementById('bookGraph').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Books'],
            datasets: [{
                label: 'Book Count',
                data: [{{$book_count}}],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
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
    
@endsection
