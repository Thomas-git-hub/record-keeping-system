<style>
  a{
    text-decoration: none;
    color: #4c4e52;
  }
  a:hover{
    color: #ff8b00;
    text-decoration: none;
  }
  .btn-filter{
    color: #ffff;
    background-color: #c5ac97;
    border:none;
  }
  .btn-filter:hover{
    color: #ffff;
    background-color: #858280;
    border:none;
  }
  .btn-confirm{
  	color: #ffff;
    background-color: #c5ac97;
  }
  .btn-confirm:hover{
  	color: #ffff;
    background-color: #858280;
  }

  .btn-confirm a{
  	color: #ffff;
  }
  
  .request-onclick{
    cursor: pointer;
  }
  .table th{
    border: none;
    border-bottom: none;
    font-size: 13px;
  }
  .table td{
    border: none;
    border-bottom: none;
    font-size: 15px;
  }
  .second-nav{
    background-color: #ffff;
  }
  .nav-btn-link{
    font-weight: bold;
    font-size: 15px;
  }
  .date{
    font-size: 15px;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Request</a>
</nav>

<div class="row mt-5">
  <div class="col d-flex justify-content-end">
    <div class="dropdown">
	  <button class="btn btn-filter dropdown-toggle mr-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Filter Status
	  </button>
	  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    <a class="dropdown-item" href="#">Pending</a>
	    <a class="dropdown-item" href="#">Processing</a>
	    <a class="dropdown-item" href="#">Done</a>
	  </div>
	</div>
  </div>
</div>

<div class="container mt-4 mb-5">

<table class="table table-hover" id="filterTable">
      <thead>
        <tr>
            <th>Name</th>
            <th>Date of Request</th>
            <th>Type of Request</th>
            <th>Body of Request</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
            <tr>
                <td>John Doe</td>
                <td>08/31/2022</td>
                <td>Baptismal</td>
                <td>hello world</td>
                <td>Pending</td>
                <td>
                  <button type="button" class="btn btn-sm btn-confirm">
                    <a href="index.php?page=view-request">View Request</a>
                  </button>
                </td>
            </tr>

      </tbody>
    </table>
    
</div>