<?php

namespace App\Http\Controllers\Nhanviens;

use App\Http\Controllers\Controller;
use App\Models\danhmuc;
use App\Models\SanPham;
use App\Http\Requests\StoreSanPhamRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SanPhamNhanVienController extends Controller
{
    private $view;

    /**
     * Display a listing of the resource.
     */
    public function nhanvien()
    {
        return view('nhanvien.index');
    }
    public function index()
    {

        $objSp = new SanPham();
        $this->view['listSp'] = $objSp->loadAllDataProductWithPager();
        $this->view['danhMucs'] = DanhMuc::all();
        return view('nhanvien.sanpham.index', $this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $objCate = new danhmuc();
        $this->view['listDm'] = $objCate->loadAllDataDanhMuc();
        return view('nhanvien.sanpham.create', $this->view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSanPhamRequest $request)
    {
        $data = $request->except('hinh__anh');

        // Xử lý tệp hình ảnh
        if ($request->hasFile('hinh_anh')) {
            $fileName = time() . '.' . $request->hinh_anh->extension();
            $request->hinh_anh->move(public_path('images'), $fileName);
            $data['hinh_anh'] = $fileName;
        }

        $sanPham = new SanPham();
        $res = $sanPham->insertDataSanPham($data);
        if ($res) {
            return redirect()->route('nhanvien.sanpham.index')->with('success', 'Sản phẩm thêm thành công');
        } else {
            return redirect()->back()->with('error', 'Sản phẩm thêm không thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $objSp = new SanPham();
        $this->view['sanPham'] = $objSp->loadIdDataSanPham($id);
        return view('nhanvien.sanpham.show', $this->view);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $objCate = new danhmuc();
        $this->view['listDm'] = $objCate->loadAllDataDanhMuc();
        $objSp = new SanPham();
        $this->view['listSp'] = $objSp->loadIdDataSanPham($id);
        return view('nhanvien.sanpham.edit', $this->view);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSanPhamRequest $request, string $id)
    {
        // $objPro = new SanPham();
        // $checkId = $objPro->loadIdDataProduct($id);
        // $imageOld = $checkId->image;
        // if ($checkId) {
        //     // loại bỏ trường ảnh
        //     $data = $request->except('hinh_anh');
        //     // Kiểm xem anh đã được upload thành công
        //     if ($request->hasFile('hinh_anh') && $request->file('hinh_anh')->isValid()) {
        //         $data['hinh_anh'] = $this->uploadFile($request->file('hinh_anh'));
        //         $flag = true;
        //     } else {
        //         $data['hinh_anh'] = $imageOld;
        //     }
        //     $res = $objPro->upadateDataProduct($data, $id);
        //     if ($res) {
        //         if (isset($imageOld) && Storage::disk('public')->exists($imageOld)) {
        //             Storage::disk('public')->delete($imageOld);
        //         }
        //         return redirect()->route('nhanvien.sanpham.index')->with('success', 'Sản phẩm chỉnh sửa thành công!');
        //     } else {
        //         return redirect()->back()->with('error', 'Sản phẩm chỉnh sửa không thành công!');
        //     }
        // } else {
        //     return redirect()->back()->with('error', 'ID không chính xác!');
        // }

        $sanPham = new SanPham();
        $checkId = $sanPham->loadIdDataSanPham($id);
        if ($checkId) {
            $data = $request->validated();

            // Xử lý tệp hình ảnh
            if ($request->hasFile('hinh_anh')) {
                // Xóa tệp cũ nếu có
                if ($checkId->hinh_anh) {
                    $oldImagePath = public_path('images/' . $checkId->hinh_anh);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                
                $fileName = time() . '.' . $request->hinh_anh->extension();
                $request->hinh_anh->move(public_path('images'), $fileName);
                $data['hinh_anh'] = $fileName;
            }

            $res = $sanPham->updateDataSanPham($data, $id);
            if ($res) {
                return redirect()->route('nhanvien.sanpham.index')->with('success', 'Sản phẩm chỉnh sửa thành công');
            } else {
                return redirect()->back()->with('error', 'Sản phẩm chỉnh sửa không thành công');
            }
        } else {
            return redirect()->back()->with('error', 'ID không chính xác');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $objSp = new SanPham();
        $idCheck = $objSp->loadIdDataSanPham($id);
        if ($idCheck) {
            $res = $objSp->deleteDataSanPham($id);
            if ($res) {
                return redirect()->back()->with('success', 'Sản phẩm xóa thành công');
            } else {
                return redirect()->back()->with('error', 'Sản phẩm xóa không thành công');
            }
        } else {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }

    }
}
