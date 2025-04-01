@foreach($user as $id=>$data)
<h1>{{$data['name']}} | {{$data['phone']}} </h1>

@endforeach