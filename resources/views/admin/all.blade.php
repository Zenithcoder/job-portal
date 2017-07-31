@extends('admin.layout')

@section('title')
Role Addition
@endsection

@section('content')

<div class="row">
  
<div class="table-responsive">
                                    <table >
                                        <thead>
                                            <tr>
                                               
                                                <th class="col-md-2"></th>
                                                <th class="col-md-2">RoleId</th>
                                                <th class="col-md-2">Roles</th>
                                                <!--<th class="col-md-2">Company</th>-->
                                                <th class="col-md-2"></th>
                                                <th class="col-md-2"></th>
                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @forelse($roles as $role)
                                            <tr style="padding-left: 40px">
                                           
                                                <td ><span class="text-muted"> </span></td>
                                                <td ><span class="text-muted">{{$role->id}}</span></td>
                                                <td><span class="text-muted">{{$role->role}}</span></td>
                                               <td><a class="btn btn-primary" href="{{route('admin.edit',$role->id)}}">EDIT</a></td>
                                                
                        <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i><form action="{{route('delete.jd', $role->id)}}"  method="POST">
                        {{csrf_field()}}
                        <input class="btn btn-sm btn-danger" type="submit" value="DELETE">
                     </form></span></td>
                                                                                                 
                                            </tr>
                                              @empty

                                                <h3>&nbsp;&nbsp;&nbsp;No Roles</h3>

                                            @endforelse
                                                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
    
    </div>
@endsection