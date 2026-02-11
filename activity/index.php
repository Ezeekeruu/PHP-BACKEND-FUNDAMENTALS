<?php 
echo "Activity 1 <br><br>";
$name = "Ezequel Gilay";
echo "Name: $name <br>";

echo "Today date is: " .date('F j, Y');
echo "<br>---------------------- <br>";

echo "Activity 2 <br> <br>";
$username = "admin";
$role = "administrator";

$loginattempt = 4;
$maxlogin = 2;
$canlogin = $loginattempt < $maxlogin;
echo " username: $username <br>";
echo "Role: $role <br>";
echo "Login Attempts: $loginattempt";

echo "<br> Access Allowed: " .($canlogin ? "YES" : "NO");

echo "<br>----------------------  <br>";

echo "Activity 3 ";
echo "<br>";
for ($i = 1; $i <4; $i++){
    echo "<br> Login Attempt: $i <br>";
}

echo "----------------------  <br>";
echo " Activity 4 <br> <br> ";
$list =["username" => "Admin", "role" => "administrator", "status" => "active"];
echo "user info: <br>";

echo "username : " . $list["username"];
echo "<br>";
echo "role : " . $list["role"];
echo "<br>";
echo "status : " . $list["status"];
echo "<br>";
echo "----------------------  <br>";

echo "Activity 5 <br><br>";

$user = ["username" => "Ezequel", "status" => "active"];

if ($user["status"] === "active") {
    echo "User can login";
} else {
    echo "User is blocked";
}

echo "<br>----------------------  <br>";

echo "Activity 6 <br><br>";

$users = [
    ["username" => "admin", "role" => "admin"],
    ["username" => "ana", "role" => "user"],
    ["username" => "ben", "role" => "user"]
];

foreach ($users as $u) {
    if ($u["role"] === "admin") {
        echo "User: " . $u["username"] . " (ADMIN ACCESS)<br>";
    } else {
        echo "User: " . $u["username"] . " (USER)<br>";
    }
}

echo "<br>----------------------  <br>";



?>
