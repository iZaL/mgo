<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableColumnUserIdInBlogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	function up()
	{
		DB::statement('ALTER TABLE `posts` MODIFY `user_id` INTEGER UNSIGNED NULL;');
		DB::statement('UPDATE `posts` SET `user_id` = NULL WHERE `user_id` = 0;');
	}

	function down()
	{
		DB::statement('UPDATE `posts` SET `user_id` = 0 WHERE `user_id` IS NULL;');
		DB::statement('ALTER TABLE `posts` MODIFY `user_id` INTEGER UNSIGNED NOT NULL;');
	}

}
