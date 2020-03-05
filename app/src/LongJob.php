<?php

namespace {

    use SilverStripe\ORM\DB;
    use Symbiote\QueuedJobs\Services\AbstractQueuedJob;

    class LongJob extends AbstractQueuedJob
    {
        public function getTitle()
        {
            return 'LongJob';
        }

        public function process()
        {
            DB::query('SELECT SLEEP(30)');
        }
    }
}
