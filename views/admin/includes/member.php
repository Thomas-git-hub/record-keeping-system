<style>
  a{
    text-decoration: none;
    color: #4c4e52;
  }
  a:hover{
    color: #ff8b00;
    text-decoration: none;
  }
  .btn-create-baptismal{
    color: #ffff;
    background-color: #c5ac97;
    border:none;
  }
  .btn-create-baptismal:hover{
    color: #ffff;
    background-color: #858280;
    border:none;
  }
  .dropdown-filter-year{
    color: #ffff;
    background-color: #c5ac97;
    border:none;
  }
  .dropdown-filter-year:hover{
    color: #ffff;
    background-color: #858280;
    border:none;
  }
  .btn-printer{
    background-color: #c5ac97;
  }
  .btn-printer:hover{
    background-color: #858280;
  }
  .bx-printer{
    color: #ffff;
    font-size: 25px;
  }
  .btn-update{
    background-color: #c5ac97;
  }
  .btn-update:hover{
    background-color: #858280;
  }
  .bx-task{
    color: #ffff;
    font-size: 25px;
  }
  .bxs-dislike:hover{
    font-size: 20px;
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
  <a class="navbar-brand" href="#">Manage Member/Parishioner</a>
</nav>

<div class="row mt-5">
  <div class="col d-flex justify-content-start ml-3">
    <div class="dropdown">
    <button class="btn dropdown-filter-year dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Filter Year
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">2022</a>
      <a class="dropdown-item" href="#">2021</a>
      <a class="dropdown-item" href="#">2020</a>
      <a class="dropdown-item" href="#">2019</a>
      <a class="dropdown-item" href="#">2018</a>
      <a class="dropdown-item" href="#">2017</a>
    </div>
  </div> 
  </div>

  <div class="col d-flex justify-content-end">
    <button type="button" class="btn btn-create-baptismal mr-3" data-toggle="modal" data-target="#newMember">New Member</button>
  </div>

</div>

<div class="container mt-4 mb-5">

<table class="table table-hover" id="filterTable">
      <thead>
        <tr>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Birthdate</th>
            <th>Year of Baptism</th>
            <th>Sponsors Name</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
            <tr>
                <td class="request-onclick">
                  <a href="dashboard.php?page=inbox_request">Hello World</a>
                </td>
                <td>John Doe</td>
                <td>Marites</td>
                <td>Birthdate</td>
                <td>July 5, 2017</td>
                <td>
                  <p>Maricel</p>
                  <p>Marisol</p>
                </td>
                <td>
                  <button type="button" class="btn btn-sm btn-update" data-toggle="modal" data-target="#updateBaptismal">
                    <i class='bx bx-task'></i>
                  </button>
                </td>
            </tr>

      </tbody>
    </table>
    
</div>