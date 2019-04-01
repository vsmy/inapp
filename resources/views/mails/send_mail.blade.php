<img src="https://intobi.app/images/icons/logo.png" alt="">

<p>Name:{{$req->name}}</p>
<p>Company: {!! $req->company !!}</p>
<p>Massage:</p>

<div>
    {!!  $req->message !!}
</div>

<p>Reply-To: {!! $req->email !!}</p>
