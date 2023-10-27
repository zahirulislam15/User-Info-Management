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
        Schema::create('client_models', function (Blueprint $table) {
            $table->id();
            // 1
            $table->integer('account_no')->unique();
            $table->integer('account_type');
            $table->integer('unique_id')->unique();
            $table->date('date');
            $table->integer('daily_saving')->nullable();
            $table->integer('weekly_saving')->nullable();
            $table->integer('monthly_saving')->nullable();
            $table->integer('fixed_deposite')->nullable();
            // 2
            $table->string('name');
            $table->string('name_bangla')->nullable();
            $table->text('permanent_address');
            $table->text('present_address');
            $table->string('phone');
            $table->string('nid');
            $table->integer('age');
            $table->tinyInteger('gender');
            $table->tinyInteger('blood_group')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->text('image')->nullable();

            $table->string('name2')->nullable();
            $table->string('name2_bangla')->nullable();
            $table->text('permanent_address2')->nullable();
            $table->text('present_address2')->nullable();
            $table->string('phone2')->nullable();
            $table->string('nid2')->nullable();
            $table->string('age2')->nullable();
            $table->string('gender2')->nullable();
            $table->string('blood_group2')->nullable();
            $table->string('father_name2')->nullable();
            $table->string('mother_name2')->nullable();
            $table->text('image2')->nullable();
            // 3
            $table->string('company_type')->nullable();
            $table->string('details')->nullable();
            // 4
            $table->string('account_handeler_type')->nullable();
            // 5 & 6
            $table->string('account_controller_declare')->nullable();
            $table->string('account_controller1')->nullable();
            $table->string('account_controller2')->nullable();
            $table->string('account_controller3')->nullable();
            // 7
            $table->string('other_account')->nullable();
            $table->string('other_account2')->nullable();
            // 8
            $table->string('other_bank_account')->nullable();
            $table->string('other_bank_account_type')->nullable();
            $table->string('other_bank_account2')->nullable();
            $table->string('other_bank_account2_type')->nullable();
            // 9
            $table->string('identified_by_bangla')->nullable(); 
            $table->string('identified_by_english')->nullable(); 
            $table->string('identified_by_nid')->nullable(); 
            $table->string('identified_by_phonne')->nullable(); 
            $table->text('identifier_sign')->nullable();
            // 10
            $table->integer('instalment')->nullable();
            $table->date('instalment_validation_date')->nullable();
            $table->integer('total_amount')->nullable();
            // 11
            $table->string('company_office_name')->nullable();
            $table->string('company_office_adderess')->nullable();
            $table->string('company_industry_adderess')->nullable();
            // 12
            $table->string('company_trade_licence')->nullable();
            $table->date('company_trade_licence_issue_date')->nullable();
            $table->string('company_trade_licence_issue_to')->nullable();
            $table->date('company_trade_licence_duration')->nullable();
            // 13
            $table->string('company_tin_no')->nullable();
            // 14
            $table->string('company_vat_reg_no')->nullable();
            // 15
            $table->string('business_type')->nullable(); 

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
        Schema::dropIfExists('client_models');
    }
};
