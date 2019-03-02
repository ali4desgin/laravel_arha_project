<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('project_type',["education","health","food"]);
            $table->enum('status',["pending","approved","completed"]);
            $table->string('name');
            $table->text('introduction');
            $table->string('region');
            $table->string('district');
            $table->string('city');
            $table->string('village');
            $table->float('longitude');
            $table->float('latitude');
            $table->text('goals');
            $table->text('expected_impact');
            $table->text('community');
            $table->text('evaluate_project');
            $table->text('digital_signature');
            $table->enum('isOpen',["yes","no"]);
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
        Schema::dropIfExists('projects');
    }
}
