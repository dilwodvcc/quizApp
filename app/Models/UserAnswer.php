
<?php
namespace App\Models;

use App\Models\DB;

class UserAnswer extends DB
{
public function create(int $result_id, int $option_id): int
{
$created_at = date("Y-m-d H:i:s");
$updated_at = $created_at;

$query = "INSERT INTO user_answers (result_id, option_id, created_at, updated_at)
VALUES (?, ?, ?, ?)";

$stmt = $this->conn->prepare($query);
$stmt->bind_param("iiss", $result_id, $option_id, $created_at, $updated_at);

if ($stmt->execute()) {
// Yangi yozuv qo'shilganidan so'ng uning ID'sini qaytarish
return $stmt->insert_id;
} else {
// Xato yuz berayotgan bo'lsa
return 0;
}
}

// Foydalanuvchining javoblarini olish
public function getAnswersByResultId(int $result_id)
{
$query = "SELECT * FROM user_answers WHERE result_id = ?";
$stmt = $this->conn->prepare($query);
$stmt->bind_param("i", $result_id);
$stmt->execute();

$result = $stmt->get_result();
$answers = [];

while ($row = $result->fetch_assoc()) {
$answers[] = $row;
}

return $answers;
}
}
