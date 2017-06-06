<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1496342327PurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('purchases')) {
            Schema::create('purchases', function (Blueprint $table) {
                $table->increments('id');
                $table->string('file_number')->nullable();
                $table->string('client')->nullable();
                $table->string('property')->nullable();
                $table->string('city_town_village')->nullable();
                $table->string('county')->nullable();
                $table->string('seller')->nullable();
                $table->string('agent')->nullable();
                $table->string('seller_attorney')->nullable();
                $table->string('bank_attorney')->nullable();
                $table->string('rep_agmt')->nullable();
                $table->string('approval_letter')->nullable();
                $table->string('seller_approval_letter')->nullable();
                $table->string('search_update_received')->nullable();
                $table->string('survey_update_received')->nullable();
                $table->string('tax_receipts')->nullable();
                $table->string('sewer_water_compliance_tax')->nullable();
                $table->string('pina')->nullable();
                $table->string('proposed_deed_received')->nullable();
                $table->string('mortgage_commitment')->nullable();
                $table->string('mc_rate_lock_expiration')->nullable();
                $table->string('mortgage_commitment_sent_to_seller_attorney')->nullable();
                $table->string('survey_taxes_and_deed')->nullable();
                $table->string('ordered_title_insurance')->nullable();
                $table->string('title_report_to_seller')->nullable();
                $table->string('title_report_to_bank')->nullable();
                $table->string('hoi_binder')->nullable();
                $table->string('hoi_binder_receipts')->nullable();
                $table->string('closing_statement_received')->nullable();
                $table->string('closing_statement_to_bank')->nullable();
                $table->string('closing_date')->nullable();
                $table->text('notes')->nullable();
                $table->text('internal_notes')->nullable();
                $table->string('rates')->nullable();
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '41730_59305f377131d')->references('id')->on('users')->onDelete('cascade');
                $table->integer('assigned_to_id')->unsigned();
                $table->foreign('assigned_to_id')->references('id')->on('users')->onDelete('cascade');
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
