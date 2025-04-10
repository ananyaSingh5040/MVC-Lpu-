<style>
    a{
        text-decoration: none;
        color: black;
    }
</style>

@if(session('user'))
<p>Welcome,{{session('user')}}</p><button><a href="/login">Logout</a></button>
@else
<p>No user found!</p> <button><a href="/login">Login</a></button>
@endif
