<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('arquivos', function (Blueprint $table) {
            $table->renameColumn('RptDt', 'rptdt');
            $table->renameColumn('TckrSymb', 'tckrsymb');
            $table->renameColumn('MktNm', 'mktnm');
            $table->renameColumn('SctyCtgyNm', 'sctyctgynm');
            $table->renameColumn('ISIN', 'isin');
            $table->renameColumn('CrpnNm', 'crpnnm');
        });
    }

    public function down(): void
    {
        Schema::table('arquivos', function (Blueprint $table) {
            $table->renameColumn('rptdt', 'RptDt');
            $table->renameColumn('tckrsymb', 'TckrSymb');
            $table->renameColumn('mktnm', 'MktNm');
            $table->renameColumn('sctyctgynm', 'SctyCtgyNm');
            $table->renameColumn('isin', 'ISIN');
            $table->renameColumn('crpnnm', 'CrpnNm');
        });
    }
};
