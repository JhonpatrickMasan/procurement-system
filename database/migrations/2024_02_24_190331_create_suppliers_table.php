<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('suppliers', function (Blueprint $table) { // Update table name here

            $table->increments('Suppliers_ID');
            $table->timestamps();
            $table->string('Supplier_Name');
            $table->string('Category');
            $table->string('Email');
            $table->integer('Contact');
            $table->string('Address');
            $table->string('Rep_Name');
            $table->string('Rep_Email');
            $table->integer('Rep_Contact');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers'); // Update table name here
    }
}
