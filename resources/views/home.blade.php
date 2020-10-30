@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as User!
                </div>

                
            </div>
            
        </div>
    </div>

    <br/>   <br/>   <br/>

   <h2> List of Available Events </h2>
    <table class="table table-bordered">
            <tr>
                <!--<th width="10">(*Image will be Shown below)</th> --> 
                <th width="35">Event Name</th>
                <th width="35">Date</th>
                <th width="35">Time</th>
                <th width="35"></th>
             
            </tr>
            @foreach($alljoinevents as $row)
                <tr>
                    <!--<td><img src="{{ URL::to('/')}}images/{{ $row->images}}" class="img-thumbnail" width="75" /></td>-->
                    <td>{{ $row->eventname}}</td>
                    <td>{{ $row->date}}</td>
                    <td>{{ $row->time}}</td>
                    <td>
                    
                    {!! Form::open(['method' => 'post','route' => ['home.join', $row->id],'style'=>'display:inline']) !!}
                    
                    <button type="submit" style="display: inline;" class="btn btn-danger btn-sm" onclick='return confirm("Are you sure you want to join?")' ;><i>Click to Join</i></button>
                
                    {!! Form::close() !!}
                  </td>
                </tr>

            @endforeach
    </table>

    <br/>   <br/>   <br/>

<h2> List of Joined Events </h2>
 <table class="table table-bordered">
         <tr>
             <!--<th width="10">(*Image will be Shown below)</th> --> 
             <th width="35">Event Name</th>
             <th width="35">Date</th>
             <th width="35">Time</th>
             <th width="35"></th>
          
         </tr>
         @foreach($data as $row)
             <tr>
                 <!--<td><img src="{{ URL::to('/')}}images/{{ $row->images}}" class="img-thumbnail" width="75" /></td>-->
                 <td>{{ $row->eventname}}</td>
                 <td>{{ $row->date}}</td>
                 <td>{{ $row->time}}</td>
                 <td>
                
                
                 <a href="{{route('feedback.add', $row->id)}}" class="btn btn-info btn-xs">Add Feedback</a> 
             
               </td>
             </tr>

         @endforeach
 </table>
</div>
@endsection
