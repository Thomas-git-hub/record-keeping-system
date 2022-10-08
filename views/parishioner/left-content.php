      
        
        <!-- FOR ALERT BOX -->

        <div class="alert alert-success" role="alert">
          Request Sent! <i class='bx bx-check-double'></i>
        </div>
        <!-- <div class="alert alert-danger" role="alert">
          Failed <i class='bx bx-message-square-error'></i>
        </div> -->

      <!-- START OF CONTENT -->

      <h5 class="mt-2">Request Baptismal Certificate</h5>    

      <small id="emailHelp" class="form-text text-muted mt-2" style="font-size: 12px;">Please enter the Name <small>(Child Name)</small> of the person who is going to receive the certificate</small>

      <form action="../../includes/process/request.php" method="POST">
        <div class="mt-3">
          <div class="form-group">
            <label for="exampleInputEmail1">Name of Child</label>
            <input type="" class="form-control" id="" name="child" aria-describedby="" placeholder="Full Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Fathers Name</label>
            <input type="" class="form-control" id="" name="father" placeholder="Full Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mothers Name</label>
            <input type="" class="form-control" id="" name="mother" placeholder="Full Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Date of Baptism</label>
            <input type="date" class="form-control" id="" name="date" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Purpose</label>
            <textarea type="" class="form-control" id="" name="purpose" placeholder="" rows="1"></textarea>
          </div>
          <button type="submit" name="requestBtn" class="btn btn-secondary btn-block">Submit</button>
        </div>
      </form>