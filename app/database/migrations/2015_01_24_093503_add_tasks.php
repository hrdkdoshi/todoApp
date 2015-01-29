<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTasks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('tasks')->insert(array(
			  'name'=> 'workout',
			  'description' => 'jogging',
			  'created_at' => date('Y-m-d H:m:s'),
			  'updated_at' => date('Y-m-d H:m:s')
			  ));

		DB::table('tasks')->insert(array(
			  'name'=> 'meeting',
			  'description' => 'lunch time meeting',
			  'created_at' => date('Y-m-d H:m:s'),
			  'updated_at' => date('Y-m-d H:m:s')
			  ));

		DB::table('tasks')->insert(array(
			  'name'=> 'homework',
			  'description' => 'tuition',
			  'created_at' => date('Y-m-d H:m:s'),
			  'updated_at' => date('Y-m-d H:m:s')
			  ));

		DB::table('tasks')->insert(array(
			  'name'=> 'dinner',
			  'description' => 'dinner with cto',
			  'created_at' => date('Y-m-d H:m:s'),
			  'updated_at' => date('Y-m-d H:m:s')
			  ));		

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('tasks')->where('name', '=', 'workout')->delete();
		DB::table('tasks')->where('name', '=', 'meeting')->delete();
		DB::table('tasks')->where('name', '=', 'homework')->delete();
		DB::table('tasks')->where('name', '=', 'dinner')->delete();

	}

}
