@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2>Crud Resource2</h2>
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
        @foreach ($post as $key => $value)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$value->eventname}}</td>
                <td>{{$value->date}}</td>
                <td>{{$value->time}}</td>
                <td>
                    
                    <a class="btn btn-primary btn-sm" href="{{route('posts.edit', $value->id)}}">
                        <i>Edit</i>
                    </a>
                      <button type="submit" style="display: inline;" class="btn btn-danger btn-sm" onclick='return confirm("Delete a record?")' ;><i>Delete</i></button>
                 
                    
                </td>
            </tr>

        @endforeach

@endsection