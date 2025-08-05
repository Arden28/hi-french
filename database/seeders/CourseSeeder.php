<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseSection;
use App\Models\Lecture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $course = Course::create([
            'title' => 'Master Swahili in 30 Days: A Self-Paced Journey',
            'slug' => 'master-swahili-in-30-days',
            'description' => 'Build your conversational Swahili confidently through structured video lessons...',
            'what_you_learn' => [
                'Greet and introduce yourself in Swahili',
                'Hold a basic conversation',
                'Master key verbs and grammar',
                'Use daily phrases and vocabulary',
            ],
            'video_hours' => 12.5,
            'instructor_id' => 1,
            'rating' => 4.2,
            'review_count' => 204,
            'student_count' => 712,
            'price' => 1500,
            'original_price' => 2000,
            'discount_percent' => 25,
            'certificate' => true,
            'resource_count' => 3,
            'thumbnail' => '/assets/images/7.png',
            'type' => 'self-paced',
            'language' => 'Swahili',
        ]);

        $section1 = CourseSection::create([
            'course_id' => $course->id,
            'title' => 'Introduction to Swahili',
            'position' => 1,
        ]);

        $section2 = CourseSection::create([
            'course_id' => $course->id,
            'title' => 'Basic Conversations',
            'position' => 2,
        ]);

        Lecture::insert([
            [
                'course_section_id' => $section1->id,
                'title' => 'What is Swahili?',
                'duration' => '00:07:00',
                'position' => 1,
            ],
            [
                'course_section_id' => $section1->id,
                'title' => 'The Swahili Alphabet',
                'duration' => '00:05:30',
                'position' => 2,
            ],
            [
                'course_section_id' => $section2->id,
                'title' => 'Greetings and Introductions',
                'duration' => '00:08:15',
                'position' => 1,
            ],
            [
                'course_section_id' => $section2->id,
                'title' => 'Common Daily Phrases',
                'duration' => '00:10:00',
                'position' => 2,
            ],
        ]);
    }
}
