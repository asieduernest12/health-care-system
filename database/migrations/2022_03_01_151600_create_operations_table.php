<?php

use App\Models\OperationType;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->date('operation_date');
            $table->time('operation_item');
            $table->integer('amount');
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->foreignIdFor(OperationType::class)->nullable()->constrained()->comment('the user_id is the doctor id in this table');
            $table->foreignIdFor(Patient::class)->nullable()->constrained()->comment('the user_id is the doctor id in this table');
            $table->foreignIdFor(User::class)->nullable()->constrained()->comment('the user_id is the doctor id in this table');
            $table->foreignId('created_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('updated_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('operations');
    }
}
