@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Organizer Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Organizer!

                </div>
            </div>
        </div>
    </div>
    <center><a class="btn btn-info btn-sm" href="{{route('posts.create')}}">
                    <i>ADD EVENT</i>
                </a></center>

                <div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2>Current Events</h2>
        </div>
    </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th with="80">No</th>
            <th>Event Name</th>
            <th>Date</th>
            <th>Time</th>
            <th with="140px" class="text-center">
                <a href="{{route('posts.create')}}">
                    <i>ADD EVENTS</i>
                </a>
            </th>
        </tr>
        <?php $no=1; ?>
        @foreach ($data as $key => $value)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$value->eventname}}</td>
                <td>{{$value->date}}</td>
                <td>{{$value->time}}</td>
                <td>
                      {!! Form::open(['method' => 'post','route' => ['feedback', $value->id],'style'=>'display:inline']) !!}
                
                      <button type="submit" style="display: inline;" class="btn btn-success btn-sm"><i>View Feedbacks</i></button>
                
                    {!! Form::close() !!}
                    
                    <a class="btn btn-primary btn-sm" href="{{route('posts.edit', $value->id)}}">
                        <i>Edit</i>
                    </a>
                    {!! Form::open(['method' => 'Delete','route' => ['posts.destroy', $value->id],'style'=>'display:inline']) !!}
                        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm" onclick='return confirm("Delete a record?")' ;><i>Delete</i></button>
                    {!! Form::close() !!}
                    
                </td>
            </tr>

        @endforeach
               
</div>
@endsection
