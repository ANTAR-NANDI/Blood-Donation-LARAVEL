@extends('Admin.layouts.defaults')
@section('abc')

  <link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

   <div class="container">
	<h3 style="color: blue">List of Donors</h3>
<table class="table" id="myTable">
  <thead>
    <tr style="background-color: #98a098">
      <!-- <th scope="col">ID</th> -->
    
      <th scope="col" >NAME</th>
      <th scope="col" >EMAIL</th>
      <th scope="col">Blood Group</th>
      <th scope="col" >City</th>
       <th scope="col" >Role</th>
        <th scope="col">DELETE</th>
    </tr>
  </thead>
    <tbody style="background-color: #98a098">
    	@foreach($donors as $d)
            <td>{{ $d->fullname }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->blood }}</td>
            <td>{{ $d->city }}</td>
           <td>{{ $d->role }}</td>
            
            	<td> <a href="{{ URL::to('delete/'.$d->id)}}" class="btn btn-info btn-xm">Delete</a> </td>
            	 <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#{{ $d->id }}">Delete</button> -->

					<div id="{{ $d->id }}" class="modal fade" role="dialog">
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
					      	 <a href="{{ URL::to('delete/'.$d->id)}}" class="btn btn-danger">Delete</a>
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
   {{$donors->links()}}
</div>
 
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>




   @stop