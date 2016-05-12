<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class PaveIt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'snipeit:pave';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pave the database to start over. This should ALMOST NEVER BE USED. (It is primarily a quick tool for developers.)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        if ($this->confirm("\n****************************************************\nTHIS WILL DROP ALL OF THE TABLES IN YOUR DATABASE. \nThere is NO undo. This WILL destroy ALL of your data. \n****************************************************\n\nDo you wish to continue? No backsies! [y|N]")) {

          \DB::statement('drop table IF EXISTS accessories_users');
          \DB::statement('drop table IF EXISTS accessories');
          \DB::statement('drop table IF EXISTS asset_logs');
          \DB::statement('drop table IF EXISTS asset_maintenances');
          \DB::statement('drop table IF EXISTS asset_uploads');
          \DB::statement('drop table IF EXISTS assets');
          \DB::statement('drop table IF EXISTS categories');
          \DB::statement('drop table IF EXISTS companies');
          \DB::statement('drop table IF EXISTS consumables_users');
          \DB::statement('drop table IF EXISTS consumables');
          \DB::statement('drop table IF EXISTS custom_field_custom_fieldset');
          \DB::statement('drop table IF EXISTS custom_fields');
          \DB::statement('drop table IF EXISTS custom_fieldsets');
          \DB::statement('drop table IF EXISTS depreciations');
          \DB::statement('drop table IF EXISTS groups');
          //\DB::statement('drop table IF EXISTS history');
          \DB::statement('drop table IF EXISTS license_seats');
          \DB::statement('drop table IF EXISTS licenses');
          \DB::statement('drop table IF EXISTS locations');
          \DB::statement('drop table IF EXISTS manufacturers');
          \DB::statement('drop table IF EXISTS models');
          \DB::statement('drop table IF EXISTS migrations');
          \DB::statement('drop table IF EXISTS password_resets');
          \DB::statement('drop table IF EXISTS requested_assets');
          \DB::statement('drop table IF EXISTS requests');
          \DB::statement('drop table IF EXISTS settings');
          \DB::statement('drop table IF EXISTS status_labels');
          \DB::statement('drop table IF EXISTS suppliers');
          \DB::statement('drop table IF EXISTS throttle');
          \DB::statement('drop table IF EXISTS users_groups');
          \DB::statement('drop table IF EXISTS users');


        }

    }
}