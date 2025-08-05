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
        $courses = [
            [
                'title' => 'Master French in 30 Days: A Self-Paced Journey',
                'slug' => 'master-french-in-30-days',
                'type' => 'self-paced',
                'price' => 1800,
                'description' => 'Learn French at your own pace with engaging video lessons designed to build your confidence. Whether you have 10 minutes or an hour, this course fits into your schedule. No pressure, just consistent progress.',
                'original_price' => 2200,
                'discount_percent' => 18,
                'thumbnail' => '/assets/images/french-self-paced.png',
                'sections' => [
                    'Getting Started with French' => [
                        ['title' => 'Why Learn French?', 'duration' => '00:06:45'],
                        ['title' => 'French Alphabet and Pronunciation', 'duration' => '00:07:20'],
                    ],
                    'Foundational Skills' => [
                        ['title' => 'Everyday Greetings', 'duration' => '00:09:00'],
                        ['title' => 'Useful Nouns and Verbs', 'duration' => '00:11:10'],
                    ],
                ],
            ],
            [
                'title' => 'French for You: Private One-on-One Lessons',
                'slug' => 'french-private-lessons',
                'type' => 'private',
                'price' => 3500,
                'description' => 'Get personal guidance from a dedicated French tutor. Each session is tailored to your goals and pace. Perfect for learners who want full attention and quick progress.',
                'original_price' => 4000,
                'discount_percent' => 12,
                'thumbnail' => '/assets/images/french-private.png',
                'sections' => [
                    'Tailored Introductions' => [
                        ['title' => 'Introduction Call with Tutor', 'duration' => '00:15:00'],
                        ['title' => 'Learning Plan Overview', 'duration' => '00:10:00'],
                    ],
                    'Grammar Deep Dive' => [
                        ['title' => 'Understanding Verb Conjugation', 'duration' => '00:12:30'],
                        ['title' => 'Gendered Nouns in French', 'duration' => '00:09:45'],
                    ],
                ],
            ],
            [
                'title' => 'French Together: Fun and Engaging Group Lessons',
                'slug' => 'french-group-lessons',
                'type' => 'group',
                'price' => 2500,
                'description' => 'Learn French in a vibrant group setting filled with games, activities, and conversations. Make friends while practicing real-life dialogues. Ideal for social learners who thrive with peer interaction.',
                'original_price' => 3000,
                'discount_percent' => 16,
                'thumbnail' => '/assets/images/french-group.png',
                'sections' => [
                    'Bienvenue en Groupe' => [
                        ['title' => 'Meet the Group & Icebreakers', 'duration' => '00:08:30'],
                        ['title' => 'Group Learning Expectations', 'duration' => '00:07:15'],
                    ],
                    'Interactive Learning' => [
                        ['title' => 'Conversational Practice', 'duration' => '00:10:20'],
                        ['title' => 'Pronunciation Games', 'duration' => '00:09:00'],
                    ],
                ],
            ],
        ];

        foreach ($courses as $data) {
            $course = Course::create([
                'title' => $data['title'],
                'slug' => $data['slug'],
                'description' => $data['description'],
                'what_you_learn' => [
                    'Speak and understand basic French',
                    'Build daily conversation confidence',
                    'Master common verbs and vocabulary',
                    'Grasp grammar and sentence structure',
                ],
                'video_hours' => 10,
                'instructor_id' => 1,
                'rating' => 4.5,
                'review_count' => rand(100, 300),
                'student_count' => rand(200, 800),
                'price' => $data['price'],
                'original_price' => $data['original_price'],
                'discount_percent' => $data['discount_percent'],
                'certificate' => true,
                'resource_count' => 5,
                'thumbnail' => $data['thumbnail'],
                'type' => $data['type'],
                'language' => 'French',
            ]);

            $position = 1;
            foreach ($data['sections'] as $sectionTitle => $lectures) {
                $section = CourseSection::create([
                    'course_id' => $course->id,
                    'title' => $sectionTitle,
                    'position' => $position++,
                ]);

                $lecturePos = 1;
                foreach ($lectures as $lecture) {
                    Lecture::create([
                        'course_section_id' => $section->id,
                        'title' => $lecture['title'],
                        'duration' => $lecture['duration'],
                        'position' => $lecturePos++,
                    ]);
                }
            }
        }
    }


}
