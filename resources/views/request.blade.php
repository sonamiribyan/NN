<form method="POST" action="{{route('request')}}">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <button>request</button>
</form>