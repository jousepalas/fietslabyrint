<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamp('added_on');
            $table->timestamp('last_update');
            $table->string('company_name', 100)->collation('latin1_general_ci');
            $table->string('street', 100)->collation('latin1_general_ci');
            $table->string('street_nr', 20)->collation('latin1_general_ci');
            $table->string('zip', 50)->collation('latin1_general_ci');
            $table->string('city', 50)->collation('latin1_general_ci');
            $table->string('contact_person', 100)->collation('latin1_general_ci');
            $table->string('email')->unique();
            $table->string('phone', 30)->collation('latin1_general_ci');
            $table->string('photo')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
