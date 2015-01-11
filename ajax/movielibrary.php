<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';
$movie = $_GET['movie'];
$movieArray = array('The Hobbit','22 Jump Street','300','A Christmas Story','Bill and Teds Excellent Adventure',
    'Dawn of the Planet of the Apes','Dracula Untold','Drive','Iron Man 3','Lucy','Need for Speed','Ride Along',
    'Sleeping Beauty','That Awkward Moment','The Hangover 3','War of the Words','X-Men','xmen','XMen','Godzilla',
    'Drive','Transcendence','Tombstone', 'RoboCop', 'The Purge', 'The Purge Anarchy', 'Street Fighter');
if(in_array($movie,$movieArray))
    echo 'Great choice! '.$movie.' is available in the "Videos" folder!';
elseif ($movie=='')
    echo 'Please enter a movie to search for.';
else
    echo 'Try another title; '.$movie.' is not currently available.';
echo '</response>';
?>