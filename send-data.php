<?php
require_once "session.php";
if (!isset($_SESSION["user"])) {
  header("Location: not-authorized.php");
}

// подключение бд файла для $conn(ection)
require_once "database.php";

// принимаем массив
$data = json_decode(file_get_contents('php://input'), true);
// выводим что получили из cart.php <script>
echo '@ cart.php sent:';
echo var_dump($data);

$cartData = json_encode($data);

// получение user id 
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("s", $_SESSION["user"]);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$userId = $user['id'];

if ($cartData == 'null') { // null NULL whatever
  echo '@ cartdata is NULL';
  $cartData = '';
} else {
  echo '@ cartdata isnt NULL'; 
}

// вот здесь полученный массив отправляется в бд
$stmt = $conn->prepare("UPDATE users SET cart = ? WHERE id = ?");
$stmt->bind_param("si", $cartData, $userId);
$stmt->execute();

// а вот здесь снова получаем его и возвращаем в cart.php <script>
$sql = "SELECT cart FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

echo '@ we send:';
echo $row['cart']; // что получили из бд

$currentCart = json_decode($row['cart'], true); // получаем user[cart]
$currentCart = json_encode($currentCart); // возвращаем