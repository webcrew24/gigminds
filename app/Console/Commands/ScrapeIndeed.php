<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Job;
use App\Job_Skill;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ScrapeIndeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:scrape-indeed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to scrape Indeed for Jobs and populate Jobs table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = "https://www.indeed.com/jobs?q=salesforce";

        $html = file_get_contents($url); 
        $jobLinks=array(); 
        $job_doc = new \DOMDocument(); 
        libxml_use_internal_errors(TRUE); //disable libxml errors 
        if (!empty($html)) { //if any html is actually returned 
            $job_doc->loadHTML($html);
            libxml_clear_errors(); //remove errors for yucky html
            $job_xpath = new \DOMXPath($job_doc);
            $anchors = $job_xpath->query('//div[@class="title"]/a');
            if ($anchors->length > 0) {
                foreach ($anchors as $a) {
                    $jobLinks[] = "https://www.indeed.com" . $a->getAttribute("href") . " ";
                }
            }
        }


        foreach ($jobLinks as $job) {
            $context = stream_context_create(
                array(
                    'http' => array(
                        'follow_location' => false
                    )
                )
            );
            
            //$this->line($job);
            $parts = parse_url($job);
            parse_str($parts['query'], $query);
            
            $this->line($query);

            $last = isset($query['jk']) ? $query['jk'] : 0;

            $this->line($last);
            if ($last) {
                $url = "https://www.indeed.com/viewjob?jk=" . $last;
            } else {
                return Null;
            }
            $this.line($url);
    

        }

        /*

        $html = file_get_contents($url, false, $context);


        $job_doc = new DOMDocument();

        libxml_use_internal_errors(TRUE); //disable libxml errors

        if (!empty($html)) { //if any html is actually returned
            $job_doc->loadHTML($html);
            libxml_clear_errors(); //remove errors for yucky html

            $job_xpath = new DOMXPath($job_doc);

            $title = $job_xpath->query('//b[@class="jobtitle"]', $job_doc)->item(0)->nodeValue;
            $description = $job_xpath->query('//span[@id="job_summary"]', $job_doc)->item(0)->nodeValue;
            $link = $job_xpath->query('//div[@class="job-footer-button-row"]/a');


            //If we have option selected which needs to fetch jobs for this day only
          

                $date = $job_xpath->query('//span[@class="date"]', $job_doc)->item(0)->nodeValue;
                $postDate = strtotime($date);
                $lastDay = strtotime('-1 day');

                if (!$postDate) {
                    return Null;
                }

                if ($postDate < $lastDay) { return Null; } } if ($link->length > 0) {

                $applyLink = "https://www.indeed.com" . $link->item(0)->getAttribute("href");
            */




    }
}
