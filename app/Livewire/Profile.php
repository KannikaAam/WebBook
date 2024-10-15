<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    // ประกาศตัวแปร
    public $name = "Kannika", $username, $email, $photo;

    public function mount()
    {
        if (!auth()->check()) {
            return redirect()->route('login'); // เปลี่ยนเส้นทางหากผู้ใช้ยังไม่ได้เข้าสู่ระบบ
        }

        $user = auth()->user();
        $this->username = $user->name;
        $this->email = $user->email;
        $this->photo = $user->profile_photo_path; // เรียกดูรูปภาพปัจจุบัน
    }

    public function update()
    {
        // ตรวจสอบว่ามีการอัปโหลดรูปภาพหรือไม่
        if ($this->photo) {
            $fullpath = $this->photo->store('photos', 'public'); // เก็บรูปในโฟลเดอร์ photos
            $user = User::find(auth()->user()->id);
            $user->profile_photo_path = $fullpath; // อัปเดตรูปภาพใน profile_photo_path
            $user->save();
        }

        // อัปเดตข้อมูลผู้ใช้
        User::where('id', auth()->user()->id)
            ->update([
                'name' => $this->username,
                'email' => $this->email,
            ]);

        // แจ้งให้ทราบว่าการอัปเดตสำเร็จ
        session()->flash('message', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
