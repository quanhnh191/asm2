<?php

namespace App\Console\Commands;

use Dflydev\DotAccessData\Data;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestSendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-send-mail';

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
        $data = ['name' => 'Lan Anh'];
        Mail::send('mail',$data, function ($message){
            $message->to('anhntlph40857@fpt.edu.vn','Nguyễn Lan Anh')
                ->subject('Thân gửi Lan Anh ');
        });
    }
}
