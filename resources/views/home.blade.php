@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inbox</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

      @foreach($messages as $m)
      @if (Auth::user()->email == decrypt($m->receiver))
<strong>Sender: </strong>{{decrypt($m->sender)}} <br>
<p>{{decrypt($m->body)}}</p>
<hr>


        @endif
    @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
