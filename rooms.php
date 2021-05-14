<?php

$result = get_rooms();

// var_dump($result);
if( $result && $result->num_rows > 0 ) {
  ?>
    <ul class="room-list">
      <?php

        while( $row = $result->fetch_assoc() ) {
          // var_dump($row);
          // echo "<li>". $row['room_number'] ."</li>";
      ?>

      <li>
        <h2>Room number: </h2>
        &#160;
        &#160;
        <a href="./room-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['room_number']; ?></a>
      </li>
      <?php

      }

      ?>
    </ul>
<?php

} else {
  echo "<p>No result.</p>";
}

?>

<p>
<a href="add-room.php">Add room</a></p>
