<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
       DB::table('users')->delete();

        $user = new User;

        // Seeding of Administrator account
        $user->id = '1';
        $user->username = 'BACOffice';
        $user->firstname = 'Cesarina';
        $user->lastname = 'Macuha' ;
        $user->email = 'pgtbac@yahoo.com';
        $user->password = 'BACOffice';
        $user->password_confirmation = 'BACOffice';
        $user->confirmation_code = 'ok';
        $user->confirmed = 1;
        $user->office_id = 1;
        $user->subscriber_id = 1;
        $user->save();

        $sub = new Subscriber;
        // Seeding of Administrator account
        $sub->id = '1';
        $sub->status = '1';
        $sub->firstname = 'Cesarina';
        $sub->lastname = 'Macuha';
        $sub->municipality = "Tarlac";
        $sub->email = 'pgtbac@yahoo.com';
        $sub->contact_no = "092323241";
        $sub->rank = 1;
        $sub->user_id = 1;
        $sub->save();
    }
}