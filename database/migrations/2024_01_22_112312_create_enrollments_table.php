<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Batch;
use App\Models\Student;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('enroll_no')->nullable();
            $table->date('join_date')->nullable();
            $table->double('fee')->nullable();
            $table->timestamps();

            $table->foreignIdFor(Batch::class)->nullable()->constrainte()->cascadeOnDelete();
            $table->foreignIdFor(Student::class)->nullable()->constrainte()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
        dropForeignIdFor(Batch::class);
        dropForeignIdFor(Student::class);
    }
};
