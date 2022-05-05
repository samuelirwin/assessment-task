<?php

namespace App\Console\Commands;

use App\Services\StringService;
use Illuminate\Console\Command;


class StringConverterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convert:string';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $string = $this->ask('Enter a string:');

        $result1 = (new StringService)->convertStringToUppercase($string);
        $result2 = (new StringService)->convertStringToAlternateUpperAndLower($string);
        $result3 = (new StringService)->createCsv($string);

        $this->info($result1);
        $this->info($result2);
        $this->info($result3);

        return 0;
    }
}
