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
@foreach($reponses as $reponse => $reponseDetail)
<div class="table-responsive-md">

  <table class="table table-striped table-bordered">
    <thead>
      <th scope="col">N°</th>
      <th scope="col">Contenu de la question</th>
      <th scope="col">Réponse de la question</th>
    </thead>
    @foreach($reponseDetail as $detail)
    <tbody>
      <tr>
        <div class="container">
          <th scope="col">{{$detail->question_id}}</th>
          <th scope="col">{{$detail->question->corps}}</th>
          <th scope="col">{{$detail->reponse}}</th>
        </div>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
@endforeach
@endsection