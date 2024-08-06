<?php
namespace App\Models;

use App\Models\GioHang;
use Illuminate\Support\Facades\Auth;

class Cart
{
    public $items = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
        $this->totalPrice = $this->getTotalPrice();
        $this->totalQuantity = $this->getTotalQuantity();
    }

    public function add($sanpham)
    {
        $id = $sanpham->id_san_pham;

        if (isset($this->items[$id])) {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng
            $this->items[$id]->so_luong += 1;
        } else {
            // Nếu sản phẩm chưa có trong giỏ hàng, thêm sản phẩm mới
            $cart_item = (object)[
                'id_san_pham' => $id,
                'ten_san_pham' => $sanpham->ten_san_pham,
                'gia' => $sanpham->gia,
                'so_luong' => 1,
                'hinh_anh' => $sanpham->hinh_anh
            ];
            $this->items[$id] = $cart_item;
        }

        // Cập nhật giỏ hàng trong session
        session(['cart' => $this->items]);
    }

    public function update()
    {
        // Cập nhật logic cho sản phẩm
    }

    public function delete($id)
    {
        if (isset($this->items[$id])) {
            unset($this->items[$id]);
            session(['cart' => $this->items]);
        }
    }

    public function clearCart()
    {
        session()->forget('cart');
    }

    public function clearAllSessions()
    {
        session()->flush();
    }

    private function getTotalPrice()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->so_luong * $item->gia;
        }
        return $total;
    }

    private function getTotalQuantity()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->so_luong;
        }
        return $total;
    }

    public function saveToDatabase()
    {
        if (Auth::check()) {
            $userId = Auth::id();

            foreach ($this->items as $item) {
                GioHang::updateOrCreate(
                    ['id    ' => $userId, 'id_san_pham' => $item->id_san_pham],
                    ['so_luong' => $item->so_luong,
                    'tong_tien' => $this->totalPrice ]
                );
            }

            // Sau khi lưu vào cơ sở dữ liệu, có thể xóa giỏ hàng trong session
            $this->clearCart();

            return true;
        }

        return false;
    }
}
