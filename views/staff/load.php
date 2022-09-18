  <?php

  $data = array();

   $data[] = array(
    'id'   => "test-Id1",
    'title'   => "Baptismal",
    'description' => "test descrtion",
    'start'   => "2022-09-13T09:00:00",
    'end'   => "2022-09-13T10:00:00"
   );


  $data[] = array(
    'id'   => "test-Id2",
    'title'   => "marriage",
    'start'   => "2022-09-13T09:00:00",
    'description' => "test descrtion12314312",
    'end'   => "2022-09-13T10:00:00",
    'color' => "yellow"
   );

  echo json_encode($data);
  ?>