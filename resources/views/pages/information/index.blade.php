@extends('layouts.app')

@section('content')
     
    <div class="panel panel-default">     
        <div class="panel-heading">
            <h1>Informations</h1>
        </div> 
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr> 
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Birth Day</th>
                      <th>Gender</th>
                      <th>Course</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($infos) > 0)
                        @foreach ($infos as $info) 
                            <tr> 
                                <td>{{ $info->firstname }}</td>
                                <td>{{ $info->lastname }}</td>
                                <td>{{ $info->bday }}</td>
                                <td>{{ $info->gender }}</td>
                                <td>{{ $info->course }}</td>
                                <td>{{ $info->email }}</td> 
                                <td><a href="/information/{{$info->id}}/edit" class="btn btn-info btn-sm deco-none">Update </a>
                                | <a href="" class="btn btn-danger btn-sm deco-none"> Delete</a>
                            </td> 
                            </tr>
                        @endforeach 
                    @else
                        <h4>No data Found.</h4>
                    @endif 
                  </tbody> 
            </table> 
        </div>  
    </div> 
    {{ $infos->links() }}
@endsection