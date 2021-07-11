<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Management System</title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

  </head>
  <body>
    <div class="container">
      <br>
      <a class="btn btn-primary float-end" href="#">Login</a>
       <br>
      <h1 class="text-center">Welcome to Students Management System</h1>
    </div>
    <br>
   <div class="row">
     <div class="col-sm-4 offset-sm-4">
       
    <form action="" method="POST">
      <table class = "table table-bordered">
        <tr>
          <td colspan="2" class="text-center"><label>Student Information</label></td>
        </tr>
        <tr>
          <td><label for="choose" class="form-control">Choose Batch</label></td>
          <td>
            <select id="choose" name="choose">
              <option value="">Select anyone</option>
              <option value="38">38</option>
              <option value="39">39</option>
              <option value="40">40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <option value="43">43</option>
              <option value="44">44</option>
              <option value="45">45</option>
              <option value="46">46</option>
              <option value="47">47</option>
            </select>
          </td>
        </tr>

        <tr>
          <td><label>Student Id</label></td>
          <td><input type="text" class="form-control" name="sId" pattern="[0-9]{10}"></td>
        </tr>
        <tr>
          <td colspan="2" class="text-end"><input type="submit" value="Show info" name = "showInfo"></input></td>
        </tr>
      </table>
      
    </form>
     </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

  </body>
</html>
