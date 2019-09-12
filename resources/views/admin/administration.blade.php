@extends('layouts.index')
@section('content')
<div class="wrapper">
  <!--Navbar-->
  <nav id="sidebar" class="navbar navbar-dark  indigo darken-2">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="/administration"><p style="font-size: 30px;">BIGSCREEN</p></a><br>
    <!-- Collapse button -->
    <button class="navbar-toggler third-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent22"
    aria-controls="navbarSupportedContent22" aria-expanded="false" aria-label="Toggle navigation">
    <div class="animated-icon3"><span></span><span></span><span></span></div>
    </button>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent22">
      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" style="color: #003366;" href="/administration">Accueil <span class="sr-only">(current)</span></a>
        </li><hr>
        <li class="nav-item">
          <a class="nav-link" style="color: #003366;" href="/questions">Questions</a>
        </li><hr>
        <li class="nav-item">
          <a class="nav-link" style="color: #003366;" href="/reponses">Réponses</a>
        </li><hr>
        <li class="nav-item"> <a class="nav-link" style="color: #003366;" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Se déconnecter') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li><hr>
    </ul>
    <!-- Links -->
  </div>
  <!-- Collapsible content -->
</nav>
<!--/.Navbar-->
</div>
<div class="container">

<div class="panel panel-primary">
  
  <div class="panel-body">
    <div class="row question6">
      <div class="col-lg-6">
        {!! $equipement_q6->html() !!}
      </div>
      <div class="col-lg-6">
        {!! $equipement_q7->html() !!}
      </div>
    </div>
    <div class="row ">
      <div class="col-lg-6">
        {!! $equipement_q10->html() !!}
      </div>
      
      <div class="col-lg-6">
        <canvas id="myChart" width="400" height="390">
        <p>Radar</p>
        </canvas>
        <script>
        
        var data = {
        labels: ["Qualité image", "Qualité Confort interface bigscreen", "Qualité connection réseau", "Qualité graphisme 3D","Qualité audio"],
        datasets: [
        {
        label: "Qualité chez Bigscreen", backgroundColor: "rgba(168,181,238,0.5)",
        borderColor: "rgba(68,181,238,1)",pointBackgroundColor: "rgba(179,181,198,1)",
        pointBorderColor: "#fff",pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "rgba(179,181,198,1)",
        data: ["{{$question11}}","{{$question12}}","{{$question13}}","{{$question14}}","{{$question15}}"]
        }
        ]
        };
        window.onload = function() {
        var ctx = document.getElementById("myChart").getContext("2d");
        
        var myRadarChart = new Chart(ctx, {
        type: 'radar',
        data: data,
        options:{
        scale:{
        ticks:{
        beginAtZero: true
        }
        }
        }
        });
        };
        </script>
      </div>
    </div>
  </div>
</div>
</div>
{!! Charts::scripts() !!}
{!! $equipement_q6->script() !!}
{!! $equipement_q7->script() !!}
{!! $equipement_q10->script() !!}
@endsection