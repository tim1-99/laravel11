@extends('base')
@section('content')
<p>047895622</p>
<p>Lorem ipsum d</p>
<ul>
... @foreach ($contacts as $contact)
<li>
{{$contact-> id}}
</li>
</ul>
    
@endforeach
@endsection 

