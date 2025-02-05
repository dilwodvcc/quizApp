<?php
namespace App\Http\Controllers\WEB;

use App\Models\User;

class OtherController {
    public function show(): void
    {
        echo "show string from OtherController";
    }

    public function delete($id): false|string
    {
        if (!$id) {
            return json_encode([
                "status" => "error",
                "message" => "ID ko'rsatilmagan."
            ]);
        }

        $userModel = new User();
        $result = $userModel->deleteUser((int)$id);

        if ($result) {
            return json_encode([
                "status" => "success",
                "message" => "User deleted successfully."
            ]);
        } else {
            return json_encode([
                "status" => "error",
                "message" => "Todo-ni o'chirishda xatolik yuz berdi."
            ]);
        }
    }
}