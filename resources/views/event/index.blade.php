@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Events</div>

                <div class="panel-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Created By</th>
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>Invited Users</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td>{{$event->name}}</td>
                                <td>@if($event->image)<img src="{{asset($event->image)}}">@endif</td>
                                <td>{{$event->creator->name}}</td>
                                <td>{{$event->description}}</td>
                                <td>{{$event->startdate}}</td>
                                <td>{{$event->invited_users}}</td>
                                <td><a href="{{ route('events.edit',$event->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('events.destroy', $event->id)}}" method="post">
                                        {{ csrf_field() }}
                                         <input name="_method" type="hidden" value="DELETE">
                                      <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
