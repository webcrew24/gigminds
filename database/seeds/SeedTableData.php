<?php
  
use Illuminate\Database\Seeder;
use App\Skill;
use App\Lookup;
  
class SeedTableData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Skill::updateOrCreate([ 'id' => 1,  'type' => 'Position',    'source' => 'Seed', 'name' => 'director', 'keyword' => 'director', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 2,  'type' => 'Position',    'source' => 'Seed', 'name' => 'manager', 'keyword' => 'manager', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 3,  'type' => 'Position',    'source' => 'Seed', 'name' => 'analyst', 'keyword' => 'analyst', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 4,  'type' => 'Position',    'source' => 'Seed', 'name' => 'developer', 'keyword' => 'developer', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 5,  'type' => 'Position',    'source' => 'Seed', 'name' => 'administrator', 'keyword' => 'administrator', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 6,  'type' => 'Position',    'source' => 'Seed', 'name' => 'admin', 'keyword' => 'admin', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 7,  'type' => 'Position',    'source' => 'Seed', 'name' => 'project manager', 'keyword' => 'project manager', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 8,  'type' => 'Position',    'source' => 'Seed', 'name' => 'scrum', 'keyword' => 'scrum', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 9,  'type' => 'Position',    'source' => 'Seed', 'name' => 'president', 'keyword' => 'president', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 10, 'type' => 'Position',    'source' => 'Seed', 'name' => 'consultant', 'keyword' => 'consultant', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 11, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'salesforce', 'keyword' => 'salesforce', 'min_threshold' => 2 ]);
        $user = Skill::updateOrCreate([ 'id' => 12, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'cpq', 'keyword' => 'cpq', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 13, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'apex', 'keyword' => 'apex', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 14, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'lightning', 'keyword' => 'lightning', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 15, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'visualforce', 'keyword' => 'visualforce', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 16, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'workflow', 'keyword' => 'workflow', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 17, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'apttus', 'keyword' => 'apttus', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 18, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'mulesoft', 'keyword' => 'mulesoft', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 19, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'tableau', 'keyword' => 'tableau', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 20, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'trigger', 'keyword' => 'trigger', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 21, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'einstein', 'keyword' => 'einstein', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 22, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'process builder', 'keyword' => 'process builder', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 23, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'steelbrick', 'keyword' => 'steelbrick', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 24, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'marketo', 'keyword' => 'marketo', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 25, 'type' => 'Technology',  'source' => 'Seed', 'name' => 'sfdc', 'keyword' => 'sfdc', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 26, 'type' => 'Domain',      'source' => 'Seed', 'name' => 'customer service', 'keyword' => 'customer service', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 27, 'type' => 'Domain',      'source' => 'Seed', 'name' => 'sales', 'keyword' => 'sales', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 28, 'type' => 'Domain',      'source' => 'Seed', 'name' => 'marketing', 'keyword' => 'marketing', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 29, 'type' => 'Domain',      'source' => 'Seed', 'name' => 'it', 'keyword' => 'it', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 30, 'type' => 'Domain',      'source' => 'Seed', 'name' => 'support', 'keyword' => 'support', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 31, 'type' => 'Domain',      'source' => 'Seed', 'name' => 'sales ops', 'keyword' => 'sales ops', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 32, 'type' => 'Domain',      'source' => 'Seed', 'name' => 'sales operations', 'keyword' => 'sales operations', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 33, 'type' => 'Domain',      'source' => 'Seed', 'name' => 'product management', 'keyword' => 'product management', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 34, 'type' => 'Domain',      'source' => 'Seed', 'name' => 'product marketing', 'keyword' => 'product marketing', 'min_threshold' => 1 ]);
        $user = Skill::updateOrCreate([ 'id' => 35, 'type' => 'Domain',      'source' => 'Seed', 'name' => 'information technology', 'keyword' => 'information technology', 'min_threshold' => 1 ]);

        $lookup = Lookup::updateOrCreate([ 'id' => 1, 'type' => 'Job Type',  'source' => 'Seed', 'name' => 'Full Time', 'value' => 'Full Time' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 2, 'type' => 'Job Type',  'source' => 'Seed', 'name' => 'Part Time', 'value' => 'Part Time' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 3, 'type' => 'Job Type',  'source' => 'Seed', 'name' => 'Contracting', 'value' => 'Contracting' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 4, 'type' => 'Job Source','source' => 'Seed', 'name' => 'Internal', 'value' => 'Internal' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 5, 'type' => 'Job Source','source' => 'Seed', 'name' => 'Scraped', 'value' => 'Scraped' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 6, 'type' => 'Job Source','source' => 'Seed', 'name' => 'Customer', 'value' => 'Customer' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 7, 'type' => 'Scrape City',  'source' => 'Seed', 'name' => 'San Francisco', 'value' => 'San Francisco' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 8, 'type' => 'Scrape City',  'source' => 'Seed', 'name' => 'Austin', 'value' => 'Austin' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 9, 'type' => 'Scrape City',  'source' => 'Seed', 'name' => 'Seattle', 'value' => 'Seattle' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 10, 'type' => 'Scrape City', 'source' => 'Seed', 'name' => 'Chicago', 'value' => 'Chicago' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 11, 'type' => 'Scrape City', 'source' => 'Seed', 'name' => 'New York', 'value' => 'New York' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 12, 'type' => 'Scrape Keyword', 'source' => 'Seed', 'name' => 'Salesforce', 'value' => 'Salesforce' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 13, 'type' => 'Scrape Keyword', 'source' => 'Seed', 'name' => 'Apttus', 'value' => 'Apttus' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 14, 'type' => 'Scrape Keyword', 'source' => 'Seed', 'name' => 'CPQ', 'value' => 'CPQ' ]);
        $lookup = Lookup::updateOrCreate([ 'id' => 15, 'type' => 'Scrape Keyword', 'source' => 'Seed', 'name' => 'CLM', 'value' => 'CLM' ]);



    }
}