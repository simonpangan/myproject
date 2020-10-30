@extends('layouts.app')

@section('content')
<div class="container">
    
                <div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2>{{$post->eventname}}</h2>
        </div>
    </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th with="80">Feedback ID</th>
            <th>Feedback</th>
        </tr>
 
        @foreach($feedbacks as $row)
                <tr>
                    <!--<td><img src="{{ URL::to('/')}}images/{{ $row->images}}" class="img-thumbnail" width="75" /></td>-->
                    <td>{{ $row->feedbackid }}</td>
                    <td>{{ $row->feedback}}</td>
                
                </tr>

            @endforeach
</div>  
@endsection
