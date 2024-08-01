<?php

namespace App\Http\Controllers\Nhanviens;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKhuyenMaiRequest;
use App\Models\KhuyenMai;
use Illuminate\Http\Request;

class KhuyenMaiNhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $view;
    
    public function index()
    {
        $objKm = new KhuyenMai();
        $this->view['listKm'] = $objKm->loadAllDataKhuyenMai();
        return view('nhanvien.khuyenmai.index', $this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nhanvien.khuyenmai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKhuyenMaiRequest $request)
    {
        $data = $request->validated();
        $objKm = new KhuyenMai();
        $res = $objKm->insertDataKhuyenMai($data);
        if ($res) {
            return redirect()->route('nhanvien.khuyenmai.index')->with('success', 'Khuyến mãi thêm thành công');
        } else {
            return redirect()->back()->with('error', 'Khuyến mãi thêm không thành công');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $objKm = new KhuyenMai();
        $this->view['khuyenmai'] = $objKm->loadIdDataKhuyenMai($id);
        return view('nhanvien.khuyenmai.edit', $this->view);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreKhuyenMaiRequest $request, string $id)
    {
        $objKm = new KhuyenMai();
        $checkId = $objKm->loadIdDataKhuyenMai($id);
        if ($checkId) {
            $data = $request->validated();
            $res = $objKm->updateDataKhuyenMai($data, $id);
            if ($res) {
                return redirect()->route('nhanvien.khuyenmai.index')->with('success', 'Khuyến mãi chỉnh sửa thành công!');
            } else {
                return redirect()->back()->with('error', 'Khuyến mãi chỉnh sửa không thành công!');
            }
        } else {
            return redirect()->back()->with('error', 'ID không chính xác!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $objKm = new KhuyenMai();
        $idCheck = $objKm->loadIdDataKhuyenMai($id);
        if ($idCheck) {
            $res = $objKm->deleteDataKhuyenMai($id);
            if ($res) {
                return redirect()->back()->with('success', 'Khuyến mãi xóa thành công');
            } else {
                return redirect()->back()->with('error', 'Khuyến mãi xóa không thành công');
            }
        } else {
            return redirect()->back()->with('error', 'Khuyến mãi không tồn tại');
        }
    }
}

