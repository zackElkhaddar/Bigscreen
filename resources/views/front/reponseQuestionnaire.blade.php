@extends('layouts.index')

@section('content')
<h1 class="sous_titre">
Vous trouvez ci-dessous les réponses que vous avez apportées à notre sondage le
{!! $date_sondage->format('Y-m-d') !!} à {!!  $heure_sondage->format('H:i:s') !!} 
 
</h1>

@forelse($questions as $question)

<div class="col-lg-12">

	<strong> Question {{$question->id}}/{{$questions->count()}}</strong><br>
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