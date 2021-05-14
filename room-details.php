<?php
// require_once('./room_controller.php');
$page_title = "Room details";
$room_id = isset($_GET['id']) ? $_GET['id'] : null;

// $room = get_room_by_id($room_id);

require('./head.php');
?>

</head>
<body>

<h1>Room ID: <?php echo $room_id; ?></h1>

<?php
require('./footer.php');
