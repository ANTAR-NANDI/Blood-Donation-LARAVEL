@extends('User.layouts.defaults')
@section('abc')
<div class="container">
	<h3>List of Employee</h3>
<table class="table table-striped table-dark" id="myTable">
  <thead>
    <tr>
      <!-- <th scope="col">ID</th> -->
       <th scope="col" style="background-color: gray">PDF</th>
      <th scope="col" style="background-color: gray">NAME</th>
      <th scope="col" style="background-color: #ec5e5e">EMAIL</th>
      <th scope="col" style="background-color: #ea59d3">DATE OF BIRTH</th>
      <th scope="col" style="background-color: #5bc0de">SALARY</th>
      <th scope="col" style="background-color: #62c462">EDIT</th>
        <th scope="col" style="background-color: #fbb450">DELETE</th>
    </tr>
  </thead>
    <tbody>
    	@foreach($donor as $d)
    	<tr>
    	d
            <td>{{ $d->name }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->birth_date }}</td>
            <td>{{ $d->salary }}</td>
            
            <td>
            	<!-- <td> <a href="{{ URL::to('delete/'.$a->id)}}" class="btn btn-info btn-xm">Delete</a> </td> -->
            	 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#{{ $d->id }}">Delete</button>

					<div id="{{ $a->id }}" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Delete Confirmation</h4>
					      </div>
					      <div class="modal-body">
					        <p>Do You Want to Delete??</p>
					      </div>
					      <div class="modal-footer">
					      	 <a href="{{ URL::to('delete/'.$a->id)}}" class="btn btn-danger">Delete</a>
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>

					  </div>
                    </div>
                </td>
        </tr>
        @endforeach

    </tbody>


   </table>
</div>
@stop