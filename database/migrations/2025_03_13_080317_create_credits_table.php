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
        Schema::create('credits', function (Blueprint $table) {
            $table->string('id');
            $table->string('STATUS_REC');
            $table->string('STATUS_DATA');
            $table->string('AREA');
            $table->string('BRANCH');
            $table->string('CUST_CODE');
            $table->string('FAC_TYPE');
            $table->string('FAC_SEC_NUM');
            $table->string('CUST_NO_FAC');
            $table->string('FAC_SEQ_FAC');
            $table->string('LOAN_CUST_NO');
            $table->string('CUST_PARENT_NO');
            $table->string('LOAN_NUMBER');
            $table->string('LOAN_PROCESS');
            $table->string('LOAN_TYPE');
            $table->string('LOAN_CURR_CODE');
            $table->string('LOAN_HOLDER');
            $table->string('TANGIBLE_FLAG');
            $table->string('ALTERNATE');
            $table->string('ECO_SECTOR_CODE');
            $table->string('INDUSTRY_CODE');
            $table->string('lOCATION_CODE');
            $table->string('TYPE_OF_USE');
            $table->string('CLCT_EXTERNAL');
            $table->string('CLCT_INTERNAL');
            $table->string('CLCT_SYSTEM');
            $table->string('OWNER_CLASS');
            $table->string('AO_CODE');
            $table->string('NARRATIVE');
            $table->date('START_DATE');
            $table->date('DATE');
            $table->string('START_AREA_CODE');
            $table->string('BRANCH_CODE_START');
            $table->string('KUK_FLG');
            $table->string('STOP_INT_FLG');
            $table->string('STOP_PLTY_ACCR');
            $table->string('WRITE_OFF');
            $table->string('DURATION');
            $table->string('CALC_METH');
            $table->string('BASE_RATE_CODE');
            $table->decimal('SPREAD_PER_RATE', 20, 2);
            $table->decimal('INT_RATE', 20, 2);
            $table->decimal('DUMMY_INT_RATE', 20, 2);
            $table->decimal('INT_RATE_ADV', 20, 2);
            $table->decimal('MARGIN_RATE', 20, 2);
            $table->string('MARGIN_INDICATOR');
            $table->decimal('LOAN_EXCH_RATE', 20, 2);
            $table->decimal('FAC_EXCH_RATE', 20, 2);
            $table->decimal('FACILITY_AMT_ORI', 20, 2);
            $table->string('DWN_START_STTL_AC');
            $table->string('RPY_PCPL_STTL_AC');
            $table->string('INT_SETTLE_AC');
            $table->string('REPAY_AUTO_FLAG');
            $table->string('INT_AUTO_FLAG');
            $table->string('REPAY_TYPE');
            $table->date('REPAY_DATE');
            $table->string('FREQUENCY');
            $table->string('REPAY_DAY_NO');
            $table->decimal('REPAY_VAL', 20, 2);
            $table->decimal('START_PRC_DEDUCT', 20, 2);
            $table->date('NEXT_REPAY_DATE');
            $table->date('LAST_REPAY_DATE');
            $table->string('REPAY_SCHED_FLG');
            $table->date('INT_PAY_DATE');
            $table->string('INT_PAY_FREQ');
            $table->string('INT_PAY_DAY_NO');
            $table->decimal('INTEREST', 20, 2);
            $table->date('NEXT_INT_PAY');
            $table->date('LAST_INT_PAY');
            $table->string('INT_PAY_REV_FLG');
            $table->decimal('PENALTY_RATE', 5, 2);
            $table->decimal('MIN_PENALTY', 20, 2);
            $table->decimal('PCPL_ORI', 20, 2);
            $table->decimal('TOT_INT_DISC', 20, 2);
            $table->date('INT_BACK_DATE');
            $table->date('PCPL_BACK_DATE');
            $table->string('ACCRUAL_DIV_FACTOR');
            $table->string('STOP_INT_ACC');
            $table->string('ACCRUE_ADJ_MANUAL');
            $table->string('ACCRUE_ADJ_SYS');
            $table->date('LAST_ACCRUED');
            $table->string('NEXT_POST_ORG_CURR');
            $table->date('LAST_ACC_POST');
            $table->string('NEXT_CAP_ORG_CURR');
            $table->date('LAST_CAPITALIZED');
            $table->decimal('TOT_CAP_ORG_CURR', 20, 2);
            $table->string('ACCRUAL_DYS_COUNT');
            $table->decimal('DUE_PRINCIPLE', 20, 2);
            $table->decimal('DUE_INTEREST', 20, 2);
            $table->decimal('DUE_PENALTY', 20, 2);
            $table->decimal('PRINCIPLE_PAID', 20, 2);
            $table->decimal('INTEREST_PAID', 20, 2);
            $table->decimal('PENALTY_PAID', 20, 2);
            $table->decimal('FEE_PAID', 20, 2);
            $table->decimal('PRINCIPLE_WOFF', 20, 2);
            $table->decimal('INTEREST_WOFF', 20, 2);
            $table->decimal('PENALTY_WOFF', 20, 2);
            $table->decimal('UNAUTH_PCPL_PAID', 20, 2);
            $table->decimal('UNAUTH_INTRST_PAID', 20, 2);
            $table->decimal('UNAUTH_PENALTY_PAID', 20, 2);
            $table->decimal('UNAUTH_FEE_PAID', 20, 2);
            $table->decimal('PCPL_UNAUTH_WRT_OFF', 20, 2);
            $table->decimal('INTRST_UNAUTH_WRT_OFF', 20, 2);
            $table->decimal('PLTY_UNAUTH_WRT_OFF', 20, 2);
            $table->date('REPAY_DUE_DATE');
            $table->date('START_INTEREST_DUE');
            $table->date('LAST_PRINCIPLE_PAY');
            $table->date('LAST_INTEREST_PAY');
            $table->date('LAST_PENALTY_PAY');
            $table->date('LAST_FEE_PAY');
            $table->date('LAST_WRITE_PCPL');
            $table->date('LAST_WRITE_INT');
            $table->date('START_PENALTY');
            $table->date('LAST_WRITE_OFF');
            $table->string('PENALTY_NUMBER');
            $table->string('OVERRIDE_FLAG');
            $table->string('OVERRIDE_BY');
            $table->date('FIRST_JOB_ENT');
            $table->string('USER_ID');
            $table->string('DEPT_CODE');
            $table->date('LAST_SYS_AMEND');
            $table->date('LAST_JOB_AMEND');
            $table->string('LAST_AMEND');
            $table->string('AUTH_BY');
            $table->string('DISP_ID');
            $table->string('SID_CODE');
            $table->string('SOURCE_FUND');
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
        Schema::dropIfExists('credits');
    }
};
