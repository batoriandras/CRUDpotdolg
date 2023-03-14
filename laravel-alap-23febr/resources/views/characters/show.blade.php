@extends("layouts.main")
@section("title",$title)
@section("content")
<h1>{{$title}}</h1>
<ul>
    <li><b>Név: </b>{{$data->name}}</li>
    <li><b>Név: </b>{{$data->gender}}</li>
    <li><b>Név: </b>{{$data->job}}</li>
    <li><b>Név: </b>{{$data->wand}}</li>
    <li><b>Név: </b>{{$data->patrnous}}</li>
    <li><b>Név: </b>{{$data->species}}</li>
    <li><b>Név: </b>{{$data->birth}} - {{$data->death}}</li>
    <li><b>Név: </b>{{$data->house->name}}</li>
</ul>
<form action="{{route('characters.destroy',['id'=>$data->id])}}" method="post">
@method("delete")
@csrf
<input type="submit" value="Töröl!" class="btn btn-danger">
</form>
@endsection