
<!-- CREATE NEW ANNOUNCEMENT MODAL -->

<div class="modal fade" id="createAnnouncement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Announcement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>

            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title of Event" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Date</label>
              <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-baptismal">Create Now</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- CREATE NEW EVENTS MODAL -->

<div class="modal fade" id="createEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>

            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title of Announcement" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Date</label>
              <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-baptismal">Create Now</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- ADD NEW STAFF ACCOUNT MODAL -->

<div class="modal fade" id="addStaff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Accont</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter full name" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Address</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Contact No.</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="-09" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Email</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="@email.com" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Password</label>
              <input type="" class="form-control mb-2" id="exampleInputPassword1" placeholder="" required>
            </div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-baptismal">Add New Account</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- UPDATE STAFF ACCOUNT MODAL -->

<div class="modal fade" id="updateStaffacc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form>
      <div class="modal-body">
        
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter full name" readonly>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Address</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="" readonly>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Contact No.</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="-09" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Email</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="@email.com" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Password</label>
              <input type="" class="form-control mb-2" id="exampleInputPassword1" placeholder="" required>
            </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-baptismal">Update</button>
      </form>
      </div>
    </div>
  </div>
</div>


<!-- CREATE CONFIRMATION MODAL -->

<div class="modal fade" id="createConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>

            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter full name" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Fathers Name</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Mothers Name</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Birthdate</label>
              <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Year of Baptism</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Sponsors Name</label>
              <input type="" class="form-control mb-2" id="exampleInputPassword1" placeholder="Sponsor 1" required>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="Sponsor 2" required>
            </div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-baptismal">Create Now</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- UPDATE CONFIRMATION MODAL -->

<div class="modal fade" id="updateConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>

            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter full name" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Fathers Name</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Mothers Name</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Birthdate</label>
              <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Year of Baptism</label>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Sponsors Name</label>
              <input type="" class="form-control mb-2" id="exampleInputPassword1" placeholder="Sponsor 1" required>
              <input type="" class="form-control" id="exampleInputPassword1" placeholder="Sponsor 2" required>
            </div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-baptismal">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>