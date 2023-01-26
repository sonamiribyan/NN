<button>
    @php
    use App\Models\request1;
$token=request()->get('token');
$user=request1::where('token','=',$token)->first();
$user->statuscode=true;
$user->save();
    @endphp
    yes
</button>
<button>no</button>