<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Userdata extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function delete($id){
        try{
            User::find($id)->delete();
        }catch(\Exception $e){
            dd($e);
        }

    }

    public function render()
    {
        // ดึงข้อมูลจาก user เก็บใส่ตัวแปร Data
        $data = User::Paginate(2);
        // with compact คือทุกครั้งที่มีการ render ใหม่ ให้ใส่หลังตัวแปร data ไปที่หน้า view ด้วย
        return view('livewire.userdata')->with(compact('data'));
    }
}
