<?php

namespace App\Http\Controllers\Nhanviens;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDanhMucRequest;
use App\Models\danhmuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class danhmucnhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $view;
    public function nhanvien()
    {
        return view('nhanvien.index');
    }
    public function index()
    {
        $objDm = new danhmuc();
        $this->view['listDm'] = $objDm->loadAllDataDanhMuc();
        return view('nhanvien.danhmuc.index', $this->view);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nhanvien.danhmuc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDanhMucRequest $request)
    {

        $data = $request->validated();
        $objDm = new danhmuc();
        $res = $objDm->insertDataDanhMuc($data);
        if ($res) {
            return redirect()->route('nhanvien.danhmuc.index')->with('success', 'San pham them thanh cong');
        } else {
            return redirect()->back()->with('error', 'San pham them khong thanh cong');
        }
        // dd($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $objDm = new danhmuc();
        $this->view['listDm'] = $objDm->loadIdDataDanhMuc($id);
        return view('nhanvien.danhmuc.edit', $this->view);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $objDm = new danhmuc();
        $checkId = $objDm->loadIdDataDanhMuc($id);
        if ($checkId) {
            $data = $request->validated();
            $res = $$objDm->upadateDataProduct($data, $id);
            if ($res) {
                return redirect()->route('nhanvien.danhmuc.index')->with('success', 'Sản phẩm chỉnh sửa thành công!');
            } else {
                return redirect()->back()->with('error', 'Sản phẩm chỉnh sửa không thành công!');
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
        //
        $objPro = new danhmuc();
        $idCheck = $objPro->loadIdDataDanhMuc($id);
        if ($idCheck) {
            $res = $objPro->deleteDataDanhMuc($id);
            if ($res) {
                // if (isset($imgOld)) {
                //     if (Storage::disk('public')->exists($imgOld)) {
                //         Storage::disk('public')->exists($imgOld);
                //     }/-strong/-heart:>:o:-((:-h// }
                return redirect()->back()->with('success', 'San pham xoa thanh cong');
            } else {
                return redirect()->back()->with('error', 'San pham xoa khong thanh cong');
            }
        } else {
            return redirect()->back()->with('error', 'San pham khong ton tai');
        }
    }

}