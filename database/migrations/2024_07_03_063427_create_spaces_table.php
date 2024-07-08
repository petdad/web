<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpacesTable extends Migration
{
    public function up()
    {
        Schema::create('spaces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('space_id')->nullable();
            $table->string('breed');
            $table->string('name');
            $table->string('species'); // Adding the species column
            $table->date('dob');
            $table->string('health_state')->default('healthy');
            $table->string('color')->nullable();
            $table->string('gender');
            $table->boolean('vaccinated')->default(false);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('microchipped')->default(false);
            $table->string('microchip_number')->nullable();
            $table->boolean('adopted')->default(false);
            $table->date('adoption_date')->nullable();
            $table->boolean('neutered')->default(false);
            $table->boolean('declawed')->default(false);
            $table->string('tag_number')->nullable();
            $table->string('insurance_provider')->nullable();
            $table->timestamps();
        });

        Schema::create('vaccine_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pet_id')->constrained()->onDelete('cascade');
            $table->string('vaccine_name');
            $table->date('administered_at');
            $table->string('veterinarian')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('controllers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('space_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('controller_devices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('controller_id')->constrained()->onDelete('cascade');
            $table->string('device_name');
            $table->string('device_type');
            $table->string('device_status');
            $table->timestamps();
        });

        Schema::create('controller_network_adapters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('controller_id')->constrained()->onDelete('cascade');
            $table->string('network_adapter_name');
            $table->string('ip_address');
            $table->string('mac_address')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('gates');
        Schema::dropIfExists('spaces');
        Schema::dropIfExists('pets');
        Schema::dropIfExists('vaccine_logs');
        Schema::dropIfExists('controllers');
        Schema::dropIfExists('controller_devices');
        Schema::dropIfExists('controller_network_adapters');
    }
}
