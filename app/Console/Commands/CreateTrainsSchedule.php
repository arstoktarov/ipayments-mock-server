<?php

namespace App\Console\Commands;

use App\Services\ScheduleCalculatorService;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateTrainsSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:trains-schedule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates schedule entities for all existing trains';

    private $calculatorService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle() {

        $from = Carbon::now();
        $to = Carbon::now()->addDays(45);

        $trains = include(base_path('data/trains.php'));
        $trainRoutes = include(base_path('data/train_routes.php'));

        $calculatorService = new ScheduleCalculatorService();

        foreach ($trains as $train) {
            $entities = $calculatorService->calculate($trainRoutes[$train['Number']], $from, $to);
            foreach ($entities as $date => $values) {
                foreach ($values as $value) {
                    DB::table('train_schedules')->insert([
                        'train_number' => $train['Number'],
                        'station_code' => $value['Code'],
                        'arv_date_time' => $value['arvDateTime'],
                        'dep_date_time' => $value['depDateTime'],
                    ]);
                }
            }
        }

    }

}
