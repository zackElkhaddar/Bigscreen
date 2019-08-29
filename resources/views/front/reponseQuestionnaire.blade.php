@extends('layouts.index')

@section('content')
<h1 class="sous_titre">
Vous trouvez ci-dessous les réponses que vous avez apportées à notre sondage du
01-01_2019 à 00:00:00
</h1>

@forelse($questions as $question)



<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="container_haut">

	<strong> Question (s) {{$question->id}}/{{$questions->count()}}</strong><br>
	<label class="sous_titre_formulaire">{{$question->corps}}</label>


@forelse($reponses as $key => $value)
@if($question->id == $key)
<table class="table table-hover">
  
  <tbody>
    <tr class="table-active">
      <td>{{$value}}</td>
    </tr>
  </tbody>
</table>
	@endif
	@empty
	@endforelse
</div>
	@empty
	@endforelse

@endsection