<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>ADD Department</h1>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            

        <form action="{{route('deptinsert')}}" method="POST">
                      @csrf
                      
                        <div class="mb-3">
                            <label for="employee_department" class="form-label">Employee department</label>
                            <input type="text" class="form-control" name="employee_department"id="employee_department">
                         
                        </div>
                        <div class="mb-3">
                            <label for="employee_department" class="form-label">Employee Salary</label>
                            <input type="text" class="form-control" name="salary"id="employee_department">
                           
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
    
        </div>
        <div class="col-3">

        </div>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>