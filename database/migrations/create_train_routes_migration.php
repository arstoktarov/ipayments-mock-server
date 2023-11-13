<?php

namespace migrations;

class create_train_routes_migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dep_route');
            $table->string('dep_route');
            $table->string('time');
            $table->integer('distance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('missing_subtype_logs');
    }
}
