@extends('layouts.index')

@section('content')

<form method="POST" action="{{ route('front.store')}}">
  @csrf
	<h1 class="big-title">bigscreen</h1>
    <p class="txt">Veuillez trouver ci-dessous le questionnaire auquel vous devriez répondre. A noter que ce sondage est anonyme. Merci d'avance.</p>

        <div class="col-md-12 center">



         
    @foreach($questions as $question)
        <div class="form-group">
          
     <p id="title">Question {{$question->id}}/{{$questions->count()}}</p>
     <label class="corps">{{$question->corps}}</label><br>
      
      @switch ($question->type)
      @case('B')
      <div class="dashed">
      @if($question->corps === "Votre email")
    
      <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="reponse{{$question->type}}[{{$question->id}}]" id="email" placeholder="Votre email" value="{{ old('reponse') }}"/>

       @elseif ($question->type == "B")
      <input type="text" class="form-control" name="reponse{{$question->type}}[{{$question->id}}]" aria-describedby="emailHelp"  value="{{old('reponse_type')}}"  placeholder="{{$question->corps}}"><br>
      @endif
</div>
</div>
        @break

<div class="form-group">
      @case('A')
      <div class="dashed">
      <select name="reponse{{$question->type}}[{{$question->id}}]"  class="form-control" value="{{old('reponse')}}">

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
      <select name="reponse{{$question->type}}[{{$question->id}}]"  class="form-control"  value="{{old('reponse')}}">
        
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
  
    </div>
    <button type="submit" class="btn btn-primary btn-validation">Soumettre</button>
  
  </div>
</form>
</div>


   
@endsection