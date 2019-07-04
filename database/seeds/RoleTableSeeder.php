<?php

use Illuminate\Database\Seeder;
use App\Role;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_applicant = new Role();
        $role_applicant->name = 'applicant';
        $role_applicant->description = 'a applicant user';
        $role_applicant->save();

        $role_company = new Role();
        $role_company->name='company';
        $role_company->description = 'a company user';
        $role_company->save();
    }
}
