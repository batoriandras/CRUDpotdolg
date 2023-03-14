@extends("layouts.main")
@section("title",$title)
@section("content")
<div class="row">
    <div class="col-12">
        <h1 class="text-center">{{$title}}</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Név</th>
                    <th class="text-center">Nem</th>
                    <th class="text-center">Munka</th>
                    <th class="text-center">Varázspálca</th>
                    <th class="text-center">Patronus</th>
                    <th class="text-center">Faj</th>
                    <th class="text-center">Dátum</th>
                    <th class="text-center">Ház</th>
                    <th class="text-center">Műveletek</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->job}}</td>
                    <td class="text-center">{{$data->wand}}</td>
                    <td class="text-center">{{$data->patrnous}}</td>
                    <td class="text-center">{{$data->species}}</td>
                    <td class="text-center">{{$data->birth}} - {{$data->death}}</td>
                    <td>{{$data->house->name}} <img src="img/{{$data->house->img}}" alt="{{$data->house->img}}" style="width: 50px;"></td>
                    <td><a href="{{route('characters.show',['id'=>$data->id])}}" class="btn btn-primary">Megtekint</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection