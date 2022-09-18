<!DOCTYPE html>
<html>
 <head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />

<<<<<<< HEAD
=======
  <!-- full calendar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

>>>>>>> 3584a3f4efb2983fa41534de8e159b7be01fe8fb
  <!-- boxicon cdn -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">

<<<<<<< HEAD
=======

  <script>
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: 'load.php',
    selectable:true,
    selectHelper:true,
    select: function(start, end, allDay)
    {
    $('#createEvent').modal('show');
     // var title = prompt("Enter Event Title");
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      $.ajax({
       url:"insert.php",
       type:"POST",
       data:{title:title, start:start, end:end},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Added Successfully");
       }
      })
     }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Event Update');
      }
     })
    },

    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Event Updated");
      }
     });
    },

    eventClick:function(eventsent)
    {
      $('#titleEvent').val(event.title);
      $('#date').val(event.start);
      // $('#desc').val(info.event.extendedProps.description);
     $('#createEvent').modal('show');
    },

   });
  });
   
  </script>
>>>>>>> 3584a3f4efb2983fa41534de8e159b7be01fe8fb
  
  
 </head>
 <body>
  <?php include_once("includes/topnav.php") ?>
  <?php include_once("includes/sidenav.php") ?>

  <div class="container">
  <div class="body-content">
  <div class="row">
    <div class="col">
      <div class="card card-banner">
        <div class="card-body">
          <h5 class="banner-title d-flex justify-content-center">Saint Peter & Paul Parish</h5>
        </div>
      </div>
    </div>
  </div>
  <h2 align="center" class="mt-3 mb-5" style="font-size: 30px; font-weight: bold; color: #6d5b4b;">Record Keeping System</h2>

<<<<<<< HEAD
  <?php include_once("../../assets/temp/calendar.php") ?>
=======
  <div id="calendar"></div>
>>>>>>> 3584a3f4efb2983fa41534de8e159b7be01fe8fb

  <div class="row mt-3 mb-5">
    <div class="col">
      <button class="btn btn-announcement btn-block" data-toggle="modal" data-target="#createAnnouncement">Create New Announcement</button>
    </div>
    <div class="col">
      <button class="btn btn-announcement btn-block" data-toggle="modal" data-target="#createEvent">Create New Events</button>
    </div>
  </div>

  <div class="row mb-5">
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          No. of Request
        </div>
        <div class="card-body">
          <h5 class="card-content">15<i class='bx bx-check-double'></i></h5>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          No. of Activities
        </div>
        <div class="card-body">
          <h5 class="card-content">15<i class='bx bx-run' ></i></h5>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          No. of Members
        </div>
        <div class="card-body">
          <h5 class="card-content">15<i class='bx bx-group' ></i></h5>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
  <?php include_once("includes/modal.php") ?>

  <script src="js/sidebar.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>

 </body>
</html>