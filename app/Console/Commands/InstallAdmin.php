<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User; // Add this line to import the User model
use Illuminate\Support\Facades\Hash; // Import Hash facade

class InstallAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install System Admin';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user=new User([
            'name'=>'BMS Admin',
            'email'=>'bms@yopmail.com',
            'phone_no'=>'9633556687',
            'password'=>Hash::make('secret'),
            'user_type'=>1
        ]);
        if($user->save()){
            $this->info('Account Inserted Successful');
        }
        else{
            $this->info('Account Insertion Failed');
        }
    }
}
