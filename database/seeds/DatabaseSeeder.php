<?php

use Illuminate\Database\Seeder;

use App\Model\Survey;
use App\Model\Question;
use App\Model\Question_Option;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Survey::create([
            'id' => '1',
            'name' => '(Validation Question)
                        Do You have Cancer Y/N – If no…
                        I’m a caregiver of someone with cancer Y/N',
            'description' => 'Please answer the degree to which you relate to the following statements', 
            'status' => 'ready']);
        
        Question::create([
            'id' => '1',
            'survey_id' => 1,
            'status' => 'activate',
            'description' => '1.	At the time of diagnosis, I left the clinic/office understanding my diagnosis and treatment plan.'
        ]);

        Question::create([
            'id' => '2',
            'survey_id' => 1,
            'status' => 'activate',
            'description' => '1.	At the time of diagnosis, I left the clinic/office understanding my diagnosis and treatment plan.'
        ]);

        Question_Option::create([
            'id' => '1',
            'question_id' => 1,
            'description' => 'Strongly Agree',
            'type' => 'check',
            'link_question_id' => 2
        ]);

        Question_Option::create([
            'id' => '2',
            'question_id' => 1,
            'description' => 'Agree',
            'type' => 'check',
            'link_question_id' => 2        
        ]);

        Question_Option::create([
            'id' => '3',
            'question_id' => 1,
            'description' => 'Somewhat Agree',
            'type' => 'check',
            'link_question_id' => 2        
        ]);

        Question_Option::create([
            'id' => '4',
            'question_id' => 1,
            'description' => 'Neither Agree nor Disagree',
            'type' => 'check',
            'link_question_id' => 2        
        ]);
        
        Question_Option::create([
            'id' => '5',
            'question_id' => 1,
            'description' => 'Somewhat Disagree',
            'type' => 'check',
            'link_question_id' => 2        
        ]);

        Question_Option::create([
            'id' => '6',
            'question_id' => 1,
            'description' => 'Disagree',
            'type' => 'check',
            'link_question_id' => 2
        ]);
        
        Question_Option::create([
            'id' => '7',
            'question_id' => 1,
            'description' => 'Strongly Disagree',
            'type' => 'check',
            'link_question_id' => 2        
        ]);        
    }
}
