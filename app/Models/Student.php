<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name = 'Riaz';
        $this->student->email = 'Riaz@gmail.com';
        $this->student->mobile = '45238';
        $this->student->save();
    }

    public static function getAllStudent()
    {
        return [
            0 => [
                'id'       => 1,
                'name'   => 'Sreejon',
                'email'  => 'sree@gmail.com',
                'mobile' => '01737467634',
                'image'  => '',
            ],
            1 => [
                'id'       => 2,
                'name'   => 'Nur',
                'email'  => 'sree@gmail.com',
                'mobile' => '01737467634',
                'image'  => '',
            ],
            2 => [
                'id'       => 3,
                'name'   => 'Nasib',
                'email'  => 'sree@gmail.com',
                'mobile' => '01737467634',
                'image'  => '',
            ],
            3 => [
                'id'       => 4,
                'name'   => 'Shahbuddin',
                'email'  => 'sree@gmail.com',
                'mobile' => '01737467634',
                'image'  => '',
            ],
            4 => [
                'id'       =>  5,
                'name'   => 'Khan',
                'email'  => 'sree@gmail.com',
                'mobile' => '01737467634',
                'image'  => '',
            ],
            5 => [
                'id'       => 6,
                'name'   => 'Talukdar',
                'email'  => 'sree@gmail.com',
                'mobile' => '01737467634',
                'image'  => '',
            ],
        ];
    }
}
