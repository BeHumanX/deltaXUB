<?php

namespace App\Console\Commands;

use App\Events\GotMessage;
use Illuminate\Console\Command;

use function Laravel\Prompts\text;

class TestMessageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:message';

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
        // $name = text(
        //     label:'What is your name?',
        //     required:true,
        // );
        // //
        // $text = text(
        //     label: 'What is your text?',
        //     required: true,
        // );

        // GotMessage::dispatch($name,$text);
    }
}
