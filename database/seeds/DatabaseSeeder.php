<?php

use Illuminate\Database\Seeder;

use App\Model\Basic_Option;
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
        /*
        Basic_Option::insert([
            ['description' => 'Strongly Agree'],
            ['description' => 'Agree'],
            ['description' => 'Somewhat Agree'],
            ['description' => 'Neither Agree nor Disagree'],
            ['description' => 'Somewhat Disagree'],
            ['description' => 'Disagree'],
            ['description' => 'Strongly Diagree'],

            ['description' => 'Yes'],
            ['description' => 'No'],
            ['description' => 'Not Sure/Can\'t Recall'],
            
            ['description' => 'Male'],
            ['description' => 'Female'],
            ['description' => 'Transgender'],
            ['description' => 'Prefer Not To Say'],

            ['description' => 'White'],
            ['description' => 'Black or African, American'],
            ['description' => 'Asian'],
            ['description' => 'American Indian or Alaska Native'],
            ['description' => 'Native Hawaiian or Pacific Islander'],
            ['description' => 'Hispanic'],
            ['description' => 'Other'],
            ['description' => 'Prefer Not To Say'],

            ['description' => '18-24'],
            ['description' => '25-34'],
            ['description' => '35-44'],
            ['description' => '45-54'],
            ['description' => '55-64'],
            ['description' => '65-74'],
            ['description' => '75+']
        ]);
        */

        /*
        Survey::insert([
            [
                'id' => '1',
                'name' => '(Validation Question) 
                            Do You have Cancer Y/N – If no… 
                            I’m a caregiver of someone with cancer Y/N',
                'description' => 'Please answer the degree to which you relate to the following statements', 
                'status' => 'ready'
            ],

            [
                'id' => '2',
                'name' => 'About You',
                'description' => 'This following demographic questions are completely optional. They are designed to help us understand more about our survey respondents', 
                'status' => 'ready'
            ],
        ]);
        */
        /*
        Question::insert([
            [
                'id' => '1',
                'survey_id' => 1,
                'description' => 'At the time of diagnosis, I left the clinic/office understanding my diagnosis and treatment plan.',
                'type' => 'check',
                'status' => 'activate'
            ],
            [
                'id' => '2',
                'survey_id' => 1,
                'description' => 'Is there a caseworker or Clinical Nurse Specialist (CNS) assigned to support you through your treatment?',
                'type' => 'check',
                'status' => 'activate'
            ],
            [
                'id' => '3',
                'survey_id' => 1,
                'description' => 'I feel that my Clinical Nurse Specialist (CNS) is easily accessible for support.',
                'type' => 'check',
                'status' => 'activate'
            ],
            [
                'id' => '4',
                'survey_id' => 1,
                'description' => 'My healthcare professionals gave me clear information on the treatment of my illness.',
                'type' => 'check',
                'status' => 'activate'
            ],
            [
                'id' => '5',
                'survey_id' => 1,
                'description' => 'How did you learn what next steps you needed to take?',
                'type' => 'check',
                'status' => 'activate'
            ],
            [
                'id' => '6',
                'survey_id' => 1,
                'description' => 'I fully understood my diagnosis and treatment at the time of diagnosis',
                'type' => 'check',
                'status' => 'activate'
            ],
            [
                'id' => '7',
                'survey_id' => 1,
                'description' => 'How helpful would you find a site designed to provide direct access to your clinical team information about your disease, a clearly laid out treatment plan, and discusssions with others who have your same illness?',
                'type' => 'check',
                'status' => 'activate'
            ],
            [
                'id' => '8',
                'survey_id' => 2,
                'description' => 'What is your Gender?',
                'type' => 'check',
                'status' => 'activate'
            ],
            [
                'id' => '9',
                'survey_id' => 2,
                'description' => 'What is your race',
                'type' => 'check',
                'status' => 'activate'
            ],
            [
                'id' => '10',
                'survey_id' => 2,
                'description' => 'What is your age?',
                'type' => 'check',
                'status' => 'activate'
            ]
        ]);
        */

        Question_Option::insert([
            
            ['id' => '1', 'question_id' => 1, 'basic_option_id' => 1, 'link_question_id' => 2],
            ['id' => '2', 'question_id' => 1, 'basic_option_id' => 2, 'link_question_id' => 2],
            ['id' => '3', 'question_id' => 1, 'basic_option_id' => 3, 'link_question_id' => 2],
            ['id' => '4', 'question_id' => 1, 'basic_option_id' => 4, 'link_question_id' => 2],
            ['id' => '5', 'question_id' => 1, 'basic_option_id' => 5, 'link_question_id' => 2],
            ['id' => '6', 'question_id' => 1, 'basic_option_id' => 6, 'link_question_id' => 2],
            ['id' => '7', 'question_id' => 1, 'basic_option_id' => 7, 'link_question_id' => 2],

            ['id' => '8', 'question_id' => 2, 'basic_option_id' => 8, 'link_question_id' => 3],
            ['id' => '9', 'question_id' => 2, 'basic_option_id' => 9, 'link_question_id' => 5],
            ['id' => '10', 'question_id' => 2, 'basic_option_id' => 10, 'link_question_id' => 5],

            ['id' => '11', 'question_id' => 3, 'basic_option_id' => 1, 'link_question_id' => 4],
            ['id' => '12', 'question_id' => 3, 'basic_option_id' => 2, 'link_question_id' => 4],
            ['id' => '13', 'question_id' => 3, 'basic_option_id' => 3, 'link_question_id' => 4],
            ['id' => '14', 'question_id' => 3, 'basic_option_id' => 4, 'link_question_id' => 4],
            ['id' => '15', 'question_id' => 3, 'basic_option_id' => 5, 'link_question_id' => 4],
            ['id' => '16', 'question_id' => 3, 'basic_option_id' => 6, 'link_question_id' => 4],
            ['id' => '17', 'question_id' => 3, 'basic_option_id' => 7, 'link_question_id' => 4],

            ['id' => '18', 'question_id' => 4, 'basic_option_id' => 1, 'link_question_id' => 7],
            ['id' => '19', 'question_id' => 4, 'basic_option_id' => 2, 'link_question_id' => 7],
            ['id' => '20', 'question_id' => 4, 'basic_option_id' => 3, 'link_question_id' => 7],
            ['id' => '21', 'question_id' => 4, 'basic_option_id' => 4, 'link_question_id' => 7],
            ['id' => '22', 'question_id' => 4, 'basic_option_id' => 5, 'link_question_id' => 7],
            ['id' => '23', 'question_id' => 4, 'basic_option_id' => 6, 'link_question_id' => 7],
            ['id' => '24', 'question_id' => 4, 'basic_option_id' => 7, 'link_question_id' => 7],

            ['id' => '25', 'question_id' => 6, 'basic_option_id' => 1, 'link_question_id' => 7],
            ['id' => '26', 'question_id' => 6, 'basic_option_id' => 2, 'link_question_id' => 7],
            ['id' => '27', 'question_id' => 6, 'basic_option_id' => 3, 'link_question_id' => 7],
            ['id' => '28', 'question_id' => 6, 'basic_option_id' => 4, 'link_question_id' => 7],
            ['id' => '29', 'question_id' => 6, 'basic_option_id' => 5, 'link_question_id' => 7],
            ['id' => '30', 'question_id' => 6, 'basic_option_id' => 6, 'link_question_id' => 7],
            ['id' => '31', 'question_id' => 6, 'basic_option_id' => 7, 'link_question_id' => 7],

            ['id' => '32', 'question_id' => 7, 'basic_option_id' => 1, 'link_question_id' => 8],
            ['id' => '33', 'question_id' => 7, 'basic_option_id' => 2, 'link_question_id' => 8],
            ['id' => '34', 'question_id' => 7, 'basic_option_id' => 3, 'link_question_id' => 8],
            ['id' => '35', 'question_id' => 7, 'basic_option_id' => 4, 'link_question_id' => 8],
            ['id' => '36', 'question_id' => 7, 'basic_option_id' => 5, 'link_question_id' => 8],
            ['id' => '37', 'question_id' => 7, 'basic_option_id' => 6, 'link_question_id' => 8],
            ['id' => '38', 'question_id' => 7, 'basic_option_id' => 7, 'link_question_id' => 8],
            
            ['id' => '39', 'question_id' => 8, 'basic_option_id' => 11, 'link_question_id' => 9],
            ['id' => '40', 'question_id' => 8, 'basic_option_id' => 12, 'link_question_id' => 9],
            ['id' => '41', 'question_id' => 8, 'basic_option_id' => 13, 'link_question_id' => 9],
            ['id' => '42', 'question_id' => 8, 'basic_option_id' => 14, 'link_question_id' => 9],

            ['id' => '43', 'question_id' => 9, 'basic_option_id' => 15, 'link_question_id' => 10],
            ['id' => '44', 'question_id' => 9, 'basic_option_id' => 16, 'link_question_id' => 10],
            ['id' => '45', 'question_id' => 9, 'basic_option_id' => 17, 'link_question_id' => 10],
            ['id' => '46', 'question_id' => 9, 'basic_option_id' => 18, 'link_question_id' => 10],
            ['id' => '47', 'question_id' => 9, 'basic_option_id' => 19, 'link_question_id' => 10],
            ['id' => '48', 'question_id' => 9, 'basic_option_id' => 20, 'link_question_id' => 10],
            ['id' => '49', 'question_id' => 9, 'basic_option_id' => 21, 'link_question_id' => 10],
            ['id' => '50', 'question_id' => 9, 'basic_option_id' => 22, 'link_question_id' => 10],

            ['id' => '51', 'question_id' => 10, 'basic_option_id' => 23, 'link_question_id' => 10],
            ['id' => '52', 'question_id' => 10, 'basic_option_id' => 24, 'link_question_id' => 10],
            ['id' => '53', 'question_id' => 10, 'basic_option_id' => 25, 'link_question_id' => 10],
            ['id' => '54', 'question_id' => 10, 'basic_option_id' => 26, 'link_question_id' => 10],
            ['id' => '55', 'question_id' => 10, 'basic_option_id' => 27, 'link_question_id' => 10],
            ['id' => '56', 'question_id' => 10, 'basic_option_id' => 28, 'link_question_id' => 10],
            ['id' => '57', 'question_id' => 10, 'basic_option_id' => 29, 'link_question_id' => 10]

        ]);

               
    }
}
