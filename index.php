<?php

// $page_title = "List of rooms";

// echo '<h1>Hello Danny!</h1>';
require_once('./room_controller.php');


$room_number = isset($_POST['room_number']) ? $_POST['room_number'] : null;
$floor = isset($_POST['floor']) ? $_POST['floor'] : null;
$beds = isset($_POST['beds']) ? $_POST['beds'] : null;

if($room_number && $floor && $beds) {
  // echo $room_number . ' - ' . $floor . ' - ' . $beds;
  create_room($room_number,$floor,$beds);
  // echo 'Room added successfully';
}


// create_room(402,4,5);
require('head.php');
?>

</head>
<body>

<?php

require('./rooms.php');

require('./footer.php');
