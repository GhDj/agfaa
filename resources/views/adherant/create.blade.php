@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12 col-sm-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <a href="{{ url('/adherant') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/adherant') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('adherant.form')

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
