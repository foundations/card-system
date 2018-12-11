<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateCategoriesTable extends Migration { public function up() { Schema::create('categories', function (Blueprint $sp04f69b) { $sp04f69b->increments('id'); $sp04f69b->integer('user_id'); $sp04f69b->text('name'); $sp04f69b->integer('sort')->default(1000); $sp04f69b->string('password')->nullable(); $sp04f69b->boolean('password_open')->default(false); $sp04f69b->boolean('enabled'); $sp04f69b->timestamps(); $sp04f69b->index('user_id'); }); } public function down() { Schema::dropIfExists('groups'); } }