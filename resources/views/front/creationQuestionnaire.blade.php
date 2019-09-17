@extends('layouts.index')
@section('content')
<article class="container">
  <section class="row">
    <form method="POST" action="{{ route('front.store')}}" style="margin-left: 230px;">
      @csrf
      <header>
        <a href="#"><img style="width: 300px; margin-left: -20px;" src="/img/bigscreen_logo.png"></a>
        <p>
          <strong>Merci de répondre à toutes les questions et de valider le formulaire en bas de la page.</strong>
        </p>
      </header>
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif
      <section class="dashed" style="margin-bottom: 15px;">
        @foreach($questions as $question)
        <article class="form-group bg-form-color">
          
          <p id="title">Question {{$question->id}}/{{$questions->count()}}</p>
          <label class="corps">{{$question->corps}}</label><br>
          
          @switch ($question->type)
          @case('B')
          <div class="dashed">
            @if($question->is_email)
            
            <input type="email" class="doshed form-control" id="email" value="{{old('$reponses->reponse')}}" name="email[{{$question->id}}]" placeholder="{{$question->corps}}" value="{{old('$reponses->reponse')}}"/>
            @if(count($errors)>0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
              {{$error}}
            </div>
            @endforeach
            @endif
            @if(session('error'))
            <div class="alert alert-danger">
              {{session('error')}}
            </div>
            @elseif(Session::has('success'))
            <div class="alert alert-success">
              {!! session()->get('success')  !!}
            </div>
            @endif
            
            @elseif ($question->type == "B")
            <input type="text" class="form-control bg-form-color" name="reponse{{$question->type}}[{{$question->id}}]" aria-describedby="emailHelp"  value="{{old('$reponses->reponse')}}"  placeholder="{{$question->corps}}"><br>
            @endif
          </div>
        </article>
        
        @break
        <article class="form-group bg-form-color">
          @case('A')
          <div class="dashed">
            <select name="reponse{{$question->type}}[{{$question->id}}]"  class="form-control" value="{{old('$reponses->reponse')}}">
              @forelse(json_decode($question->choix) as $reponse)
              <option value="{{$reponse}}">{{$reponse}} </option>
              @empty
              @endforelse
              
            </select><br>
          </div>
        </article>
        @break
        
        <article class="form-group bg-form-color">
          @default
          <div class="dashed">
            <select name="reponse{{$question->type}}[{{$question->id}}]"  class="form-control"  value="{{old('$reponses->reponse')}}">
              
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              
            </select><br>
          </div>
        </article>
        @break
        @endswitch
        
        @endforeach
      </section>
      <button type="submit" class="btn btn-primary btn-validation offset-10">Finaliser</button>
      
    </form>
    
  </section>
</article>
@endsection