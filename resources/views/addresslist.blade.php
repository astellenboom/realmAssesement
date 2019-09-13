<!DOCTYPE html>
<html>
<head>
	<title>Address List</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">   -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

	
</head>
<body>
<div class="container">
<div class="row">
	<h1>Address List</h1>
</div>	
<div class="row">
		<div class="col-4"></div>
		<div class="col-4"></div>
		 <div class="col-4 text-right">
        <button id="new_contact" type="button" class="btn btn-success" data-toggle="modal" data-target="#main" onclick="loadNewContact()">Add Contact</button>
    </div>
  

</div>
<br>	
<div class="row">
	

<div class="col-12">
	<table id="display-data" class="table table-striped table-bordered" >
      <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th></th>
                <th></th>
			</tr>
      </thead>
	  <tbody>
        	@foreach($list as $l)    

            <tr id="{{$l['id']}}" >
                <td id="first_name_{{$l['id']}}">{{$l['first_name']}}</td>
                <td id="last_name_{{$l['id']}}">{{$l['last_name']}}</td>
                <td id="mobile_{{$l['id']}}">{{$l['mobile']}}</td>
                <td id="email_{{$l['id']}}">{{$l['email']}}</td>
                <td>
                <a class="btn btn-primary editContact" id="{{$l['id']}}" data-toggle="modal" data-target="#editModal" >Edit</a>
                </td>
                <td>
                <a class="btn btn-danger deleteContact" id="{{$l['id']}}" data-toggle="modal" data-target="#deleteModal">Delete</a>
                </td>
				@include('modal.include.editcontact')	
				@include('modal.include.deletecontact')		
			</tr>
			
			@endforeach
	</tbody>
	</table>

</div>


</div>
@include('modal.main')

</div>	
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
<script src="{{asset('script.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$("#display-data").DataTable()
		
	})

	$(document).on('click','.editContact',function(){
        
        var id= $(this).attr('id');
        var first_name = $('#first_name_'+id).text();
        var last_name = $('#last_name_'+id).text() 
        var email = $('#email_'+id).text()
        var mobile = $('#mobile_'+id).text()
        $("#edit_first_name").val(first_name)
        $("#edit_last_name").val(last_name)
        $("#edit_email").val(email)
        $("#edit_mobile").val(mobile)
        $("edit_id").val(id)
        $("#editForm").attr('action', '/editcontact/'+id)
    });

	$(document).on('click','.deleteContact',function(){
        
        var id= $(this).attr('id');
        
        $("#deleteForm").attr('action', '/deletecontact/'+id)
    });

	
	
</script>

</html>