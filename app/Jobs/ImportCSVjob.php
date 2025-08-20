<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImportCSVjob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;



    public function __construct(protected $filePath)
    {
    //    dump("ImportCSVjob: " . $filePath); // checagem pra ver se o job está sendo instanciado corretamente

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Define o caminho completo do arquivo armazenado no storage
        $filePath = storage_path('app/private/imports/' . $this->filePath);


        // Verifica se o arquivo existe antes de tentar processá-lo
        if(!file_exists($filePath)) {
            throw new \Exception('Arquivo não encontrado: ' . $filePath);
        };
        //teste unitario feito pelo tinker:
        //    dispatch_sync(new \App\Jobs\ImportCSVjob('import-18-08-2025_18-14.csv' ));


        
    }


    }

