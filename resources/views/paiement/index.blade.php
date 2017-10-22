@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Paiement</div>
                    <div class="panel-body">
                        <a href="{{ url('/paiement/create') }}" class="btn btn-success btn-sm" title="Add New paiement">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter paiement
                        </a>

                        <div class="row">
                            <form method="GET" action="{{ url('/paiement') }}" accept-charset="UTF-8" class="col-lg-offset-8 col-sm-4" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Recherche...">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                                </div>
                            </form>
                        </div>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Adherant</th><th>Paiement</th><th>Methode</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($paiement as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>



                                        </td>


                                        <td>{{ $item->paiement }}</td><td>{{ $item->methode }}</td>
                                        <td>
                                            <a href="{{ url('/paiement/' . $item->id) }}" title="View paiement"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/paiement/' . $item->id . '/edit') }}" title="Edit paiement"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/paiement' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete paiement" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $paiement->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
