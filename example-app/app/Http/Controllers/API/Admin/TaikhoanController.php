<?php

namespace App\Http\Controllers\Api\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaikhoanController extends Controller
{
    public function index()
    {
        $taikhoan = DB::table('users')->get();
        return response()->json($taikhoan);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $id = DB::table('users')->insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return response()->json(['id' => $id], 201);
    }

    public function show($id)
    {
        $taikhoan = DB::table('users')->where('id', $id)->first();
        if ($taikhoan) {
            return response()->json($taikhoan);
        } else {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'password' => ['nullable', 'string', 'min:8'],
        ]);

        $data = array_filter($request->only(['name', 'email', 'password']), function ($value) {
            return !is_null($value);
        });

        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        DB::table('users')->where('id', $id)->update($data);

        return response()->json(['message' => 'User updated successfully']);
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
}
