<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:54',
            'email' => 'required|email|unique:users,email',
        ]);

        $user = User::findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
        ];

        $user->update($data);

        return redirect(url('/dashboard/user'))->with('success', 'User berhasil diupdate.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect(url('/dashboard/user'))->with('success', 'User berhasil dihapus.');
    }

    public function changePassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|min:6',
            'password_confirm' => 'required|same:password'
        ]);

        $user = User::findOrFail($id);

        $data = [
            'password' => bcrypt($request->password),
        ];

        $user->update($data);

        return redirect(url('/dashboard/user'))->with('success', 'Password User berhasil diupdate.');
    }
}
