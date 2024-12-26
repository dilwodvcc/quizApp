<?php
namespace App\Controllers;

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
                "message" => "Todo muvaffaqiyatli o'chirildi."
            ]);
        } else {
            return json_encode([
                "status" => "error",
                "message" => "Todo-ni o'chirishda xatolik yuz berdi."
            ]);
        }
    }
}
