@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
<h1>Welcome to Rental Book System</h1>
<h2>Dashboard {{Auth::user()->username}}</h2>



   <div class="row mt-4">
    <div class="col-lg-4 ">
        <div class="card-data book">
            <div class="row">
                <div class="col-6"><i class="bi bi-journal-bookmark"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Book</div>
                    <div class="card-count">{{$book_count}}</div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ">
        <div class="card-data category">
            <div class="row">
                <div class="col-6"><i class="bi bi-list-task"></i></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Category</div>
                    <div class="card-count">{{$category_count}}</div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ">
        <div class="card-data user">
            <div class="row">
                <div class="col-6"><i class="bi bi-people"></i></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">User</div>
                    <div class="card-count">{{$user_count}}</div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>


   
    <div class="mt-5">
      <x-rent-log-table :rentlog='$rentlogs' />
    </div>



    <div class="mt-2">
      <h2>Statistics Graph</h2>
      <div class="chart-container col-lg-5 col-md-12 col-sm-12">
        <canvas id="barChart"></canvas>
      </div>
    </div>
    <script>
    var ctxB = document.getElementById("barChart").getContext('2d');
    var myBarChart = new Chart(ctxB, {
      type: 'bar',
      data: {
        labels: ['Book', 'Category', 'User'],
        datasets: [{
          label: 'Counts',
          data: [
            {{$book_count}},
            {{$category_count}},
            {{$user_count}}
          ],
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
            'rgba(0, 137, 132, .2)',
            'rgba(0, 0, 255, .2)'
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
            'rgba(0, 10, 130, 1)',
            'rgba(0, 99, 132, .7)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          x: {
            beginAtZero: true
          },
          y: {
            beginAtZero: true
          }
        },
        plugins: {
          title: {
            display: true,
            text: 'Statistics Chart',
            font: {
              size: 16,
              weight: 'bold'
            }
          },
          legend: {
            display: false
          }
        }
      }
    });
    </script>
    
     <div class="mt-2">
      <h2>Total rent for each book in a month</h2>
      <div class="chart-container col-lg-5 col-md-12 col-sm-12">
        <canvas id="barChart"></canvas>
      </div>
    </div>
    <script>
    var ctxB = document.getElementById("barChart").getContext('2d');
    new Chart(ctxB, {
      type: 'bar',
      data: {
        labels: [
          @foreach ($rentlogs as $item)
            '{{$item->book->title}}',
          @endforeach
        ],
        datasets: [{
          label: 'Counts',
          data: [
            @foreach ($rentlogs as $item)
              {{$item->total_rent}},
            @endforeach
          ],
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
            'rgba(0, 137, 132, .2)',
            'rgba(0, 0, 255, .2)'
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
            'rgba(0, 10, 130, 1)',
            'rgba(0, 99, 132, .7)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          x: {
            beginAtZero: true
          },
          y: {
            beginAtZero: true
          }
        },
        plugins: {
          title: {
            display: true,
            text: 'Statistics Chart',
            font: {
              size: 16,
              weight: 'bold'
            }
          },
          legend: {
            display: false
          }
        }
      }
    });


    
    </script>


 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   


@endsection