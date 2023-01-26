@foreach($request as $req)
@if($req->statuscode==false)
<h1>{{$req->name}}</h1>
<a href="{{route('verifyUser',['id'=>$req->id])}}">approve</a>
<a style="color:red">cancel</a>
@endif
@if($req->statuscode)
<h1>{{$req->name}}</h1>
<p style="color:green">approved</p>
@endif
@endforeach