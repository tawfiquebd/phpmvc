<?php

echo "<h4> User Information: </h4>";

foreach ($data['users']  as $user) {
    echo "username: ". $user->user_name . " => " . "email: ". $user->user_email . "<br />";
}
