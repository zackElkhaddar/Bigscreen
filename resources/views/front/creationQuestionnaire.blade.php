@extends('layouts.index')

@section('content')
<form method="POST" action="{{ route('front.store')}}" style="margin-left: 150px;">
  @csrf
  <h1 class="big-title">bigscreen</h1>
  <p class="txt"><strong>Veuillez trouver ci-dessous le questionnaire auquel vous devriez répondre. A noter que ce sondage est anonyme. Merci d'avance.</strong></p>
  @if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
  @endif
  <section>
  @foreach($questions as $question)
  <div class="form-group">
    
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


@if(Session::has('success'))

<div class="alert alert-success">
  {!! session()->get('success')  !!}
</div>

@endif


@if(session('error'))

<div class="alert alert-danger">
     {{session('error')}}
</div>

@endif
     
      @elseif ($question->type == "B")
      <input type="text" class="form-control" name="reponse{{$question->type}}[{{$question->id}}]" aria-describedby="emailHelp"  value="{{old('$reponses->reponse')}}"  placeholder="{{$question->corps}}"><br>
      @endif
    </div>
  </div>
  
  @break
  <div class="form-group">
    @case('A')
    <div class="dashed">
      <select name="reponse{{$question->type}}[{{$question->id}}]"  class="form-control" value="{{old('$reponses->reponse')}}">
        @forelse(json_decode($question->choix) as $reponse)
        <option value="{{$reponse}}">{{$reponse}} </option>
        @empty
        @endforelse
        
      </select><br>
    </div>
  </div>
  @break
  
  <div class="form-group">
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
  </div>
  @break
  @endswitch
  
  @endforeach
  </section>
  <button type="submit" class="btn btn-primary btn-validation">Soumettre</button>
  
</div>
</form>
</div>

@endsection