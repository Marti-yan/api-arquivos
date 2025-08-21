<?php

namespace App\Imports;


// Lib para Trabalhar com o arquivo Excel
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\Log;

use App\Models\Arquivo;

HeadingRowFormatter::default('none'); // manter o formato  q vem do arquivo

class ArquivoImport implements ToModel, WithHeadingRow, WithChunkReading 
{
    protected $arquivoId;

    public function __construct($arquivoId)
    {
        $this->arquivoId = $arquivoId; // associa o registro do arquivo
    }

    public function model(array $row)
    {
        $arquivo = Arquivo::find($this->arquivoId);
        $row = array_change_key_case($row, CASE_LOWER);
        Log::info('Linha importada', $row);
        return new Arquivo([
            'rptdt'      => $row['rptdt'] ?? null,
            'tckrsymb'   => $row['tckrsymb'] ?? null,
            'mktnm'      => $row['mktnm'] ?? null,
            'sctyctgynm' => $row['sctyctgynm'] ?? null,
            'isin'       => $row['isin'] ?? null,
            'crpnnm'     => $row['crpnnm'] ?? null,
            'file_hash'  => $arquivo->file_hash ?? null,
            'file_name'  => $arquivo->file_name ?? null
        ]);
    }

    public function chunkSize(): int
    {
        return 1000; // carregar em lotes de 1000 linhas por vez
    }
}
