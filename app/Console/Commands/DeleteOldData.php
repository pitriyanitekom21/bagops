<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DeleteOldData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-old-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
    // Logika untuk menghapus data yang sudah tidak diperlukan
        DB::table('pengajuans')->where('created_at', '<', now()->subYear())->delete();
    
        $this->info('Data yang sudah tidak diperlukan berhasil dihapus.');
    }

}
