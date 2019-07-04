<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_applicant = Role::where('name', 'applicant')->first();
        $role_company = Role::where('name', 'company')->first();

        $applicant = new User();
        $applicant->name = 'Applicant name';
        $applicant->email = 'applicant@gmail.om';
        $applicant->password = bcrypt('secret');
        $applicant->save();
        $applicant->roles()->attach($role_applicant);

        $company = new User();
        $company->name = 'Company name';
        $company->email ='company@gmail.com';
        $company->password = bcrypt('secret');
        $company->save();
        $company->roles()->attach($role_company);

    }
}
