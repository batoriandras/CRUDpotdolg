@extends("layouts.main")
@section("title",$title)
@section("content")
<div class="row">
    <div class="col-12">
        <h1>{{$title}}</h1>
        <form action="{{route('characters.store')}}" method="post">
            <div class="my-2">
                <label for="name">Név</label>
                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
            </div>
            <div class="my-2">
                <label for="gender">Nem</label>
                <input type="text" name="gender" id="gender" class="form-control" value="{{old('gender')}}">
            </div>
            <div class="my-2">
                <label for="job">Munka</label>
                <input type="text" name="job" id="job" class="form-control" value="{{old('job')}}">
            </div>
            <div class="my-2">
                <label for="wand">Varázspálca</label>
                <input type="text" name="wand" id="wand" class="form-control" value="{{old('wand')}}">
            </div>
            <div class="my-2">
                <label for="patronus">Patronus</label>
                <input type="text" name="patronus" id="patronus" class="form-control" value="{{old('patrnous')}}">
            </div>
            <div class="my-2">
                <label for="species">Faj</label>
                <input type="text" name="species" id="species" class="form-control" value="{{old('species')}}">
            </div>
            <div class="my-2">
                <label for="birth">Született</label>
                <input type="date" name="birth" id="birth" class="form-control" value="{{old('birth')}}">
            </div>
            <div class="my-2">
                <label for="death">Meghalt</label>
                <input type="date" name="death" id="death" class="form-control" value="{{old('death')}}">
            </div>
            <div class="my-2">
                <label for="house">Ház</label>
                <select name="house" id="house" class="form-control">
                    @foreach($datas as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-2">
                <input type="submit" value="Mentés!" class="btn btn-success">
            </div>
        </form>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
</div>
@endsection