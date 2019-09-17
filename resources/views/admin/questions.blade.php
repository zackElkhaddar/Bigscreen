@extends('layouts.index')
@section('content')
<main>
  <article>
    <section class="wrapper">

      <!--Navbar-->
      <nav id="sidebar" class="navbar navbar-dark  indigo darken-2">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="/administration"><img style="width: 200px;" src="/img/bigscreen_logo.png"></a>

        <!-- Collapse button -->
        <button class="navbar-toggler icon-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent22"
        aria-controls="navbarSupportedContent22" aria-expanded="false" aria-label="Toggle navigation">
        <div class="animated-icon"><span></span><span></span><span></span></div>
        </button>

        <!-- Collapsible content -->
        <article class="collapse navbar-collapse" id="navbarSupportedContent22">

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

      </article>
      <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->

  </section>
</article>
</main>

<section class="table-responsive-md">
<table class="table table-striped table-bordered">

  <thead>
    <th scope="col">N°</th>
    <th scope="col">Contenu de la question</th>
    <th scope="col">Type de la question</th>
  </thead>
  
  <tbody>
    @foreach($questions as $question)
    <tr>
      <th scope="col">{{$question->id}}</th>
      <th scope="col">{{$question->corps}}</th>
      <th scope="col">{{$question->type}}</th>
    </tr>
    @endforeach
  </tbody>
  
</table>
</section>
@endsection