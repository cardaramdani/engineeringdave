<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>ini logout</h1>

</body>
</html>




<button type="button" class="btn btn-outline-success col-2 offset-md-10 " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Login</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body align-middle was-validated" align="center">
       <form action="/pdam/add" method="post" class="d-inline offset-md-10" >
          @csrf

        <td scope="col" align="center" class="was-validated">
            <div class="form-group">
              <label for="Email" class="font-weight-bold">Email</label>
             <input type="text" class="form-control"  placeholder="User/Email" name="Email"  required autocomplete>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>
     <td scope="col" align="center" class="was-validated">
            <div class="form-group">
              <label for="password" class="font-weight-bold">Password</label>
             <input type="text" class="form-control"  placeholder="Password" name="password"  required autocomplete>
              </select>
              <div class="invalid-feedback">input data sesuai aktual</div>
            </div>
        </td>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn-lg btn-primary col-md-12  font-weight-bold"  type="submit">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>