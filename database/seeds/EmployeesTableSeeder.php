<?php

use Illuminate\Database\Seeder;
use App\Employee;
use App\Department;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // todo
        // モックアップに記されている名前を追加
        $model = new Employee;$model->user_id = 2;$model->last_name = 'MG';$model->first_name = '管理';$model->save();
        
    }
}