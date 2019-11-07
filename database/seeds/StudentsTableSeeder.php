<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new \App\Student();
        $student->name = "Tran anh tuan";
        $student->theme = "Văn học";
        $student->title = "Lão hạc ";
        $student->present = "Cậu vàng";
        $student->image = "image/anh1.jpg";
        $student->save();
    }
}
