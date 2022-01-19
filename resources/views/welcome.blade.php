<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Employee </title>
  </head>
  <body>
   
       <div class="row">
       @if(session('success'))
                            <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                             <strong>{{session('success')}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
        <div class="col-4 mt-5 ">
                            
               
               <div class="card">
                   <div class="card-header bg-light"><h3 class="text-primary">Enter detail here</h3>
                   </div>
                   <div class="card-body">


                   <form action="{{route('insert')}}" method="POST">
                      @csrf
                        <div class="mb-3">
                            <label for="employee_id" class="form-label">Employee ID</label>
                            <input type="text" class="form-control" name="employee_id"id="employee_id">
                            @error('employee_id')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="employee_name" class="form-label">Employee Name</label>
                            <input type="text" class="form-control" name="employee_name"id="employee_name">
                            @error('employee_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="employee_department" class="form-label">Employee department</label>
                            <input type="text" class="form-control" name="employee_department"id="employee_department">
                            @error('employee_department')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
    
                       
                   
                    
                   </div>
               </div>
           </div>
           <div class="col-8 mt-5">
               <div class="card">
                   <div class="card-header"><h3 class="text-primary">Employees:-</h3></div>
                   <div class="card-body">


                   <table class="table">
  <thead>
    <tr>
    <th scope="col-sm">SL NO</th>
      <th scope="col-sm">Employee Id</th>
      <th scope="col-sm">Employee Name</th>
      <th scope="col-sm">Employee Department</th>
      <th scope="col-sm">Employee Joined</th>
     
      <th scope="col-sm">Action</th>
    </tr>
  </thead>
  <tbody>
      <!-- @php($i=1) -->
         @foreach($employee as $emp)
    <tr>
      <!-- <th scope="row">{{$i++}}</th> -->
      <th scope="row">{{$employee->firstItem()+$loop->index}}</th>
      <td>{{$emp->employee_id}}</td>
      <td>{{$emp->employee_name}}</td>
      <td>{{$emp->employee_dept}}</td>

       <td>{{$emp->created_at->diffForHumans()}}</td>
      
       <td>
           <a href="{{url('update/'.$emp->id)}}" class="btn btn-sm btn-primary">UPDATE</a>
           <a href="{{url('delete/'.$emp->id)}}" class="btn btn-sm btn-danger">DELETE</a>
    
       </td>
       
    </tr>
   
    @endforeach
  </tbody>
</table>
{{$employee->links()}}


                   </div>
               </div>
           </div>
       </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>