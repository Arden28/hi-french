<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\LibraryArticle;
use App\Models\LibraryCategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PharIo\Manifest\Library;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Eduard Ebankoli',
            'email' => 'eduardo.enbakoli@hi-french.club',
            'password' => Hash::make('koverae'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        // Blog Categories
        $blogCategories = [
            'Learning Techniques',
            'French Culture',
            'Language Tips',
        ];

        foreach ($blogCategories as $categoryName) {
            $category = BlogCategory::create([
                'name' => $categoryName,
                'slug' => Str::slug($categoryName),
            ]);
        }

        // Blog Posts
        $blogPosts = [
            [
                'title' => 'Top 5 Apps to Learn French in 2025',
                'excerpt' => 'Looking to start or improve your French this year? We’ve rounded up the best language learning apps based on features, pricing, and user experience.',
                'content' => "From Duolingo’s gamified lessons to Babbel’s grammar-focused courses, language apps have come a long way. In this article, we compare the top five apps for learning French in 2025, including Memrise, Rosetta Stone, and Busuu. Learn what sets each apart and which one suits your learning style. Whether you're a beginner or brushing up on your skills, these tools will help you stay consistent and make progress.",
                'category' => 1,
            ],
            [
                'title' => 'How Watching French TV Can Improve Your Listening',
                'excerpt' => 'Binge-watching with a purpose? Yes! French shows and films are a great way to absorb vocabulary, accents, and conversational flow.',
                'content' => 'Immersion is key to language learning, and watching French TV is one of the most effective (and enjoyable) ways to train your ear. We highlight popular series like “Dix Pour Cent,” “Lupin,” and “Call My Agent,” and explain how to use subtitles, note-taking, and active listening to get the most out of your screen time. Plus, we give tips on balancing entertainment with language acquisition.',
                'category' => 1,
            ],
            [
                'title' => 'Understanding the French “Bise” Culture',
                'excerpt' => 'Navigating greetings in France can be tricky , especially when it comes to cheek kisses. Here’s how not to get awkward.',
                'content' => 'The “bise” is more than a kiss , it’s a deeply cultural way of greeting in France. But how many kisses? Which cheek first? And when is a handshake more appropriate? In this cultural guide, we break down the etiquette, regional differences, and do’s and don’ts of this unique French custom, helping you avoid faux pas in both social and professional settings.',
                'category' => 2,
            ],
            [
                'title' => 'A Beginner’s Guide to French Slang',
                'excerpt' => 'Want to sound more like a native speaker? Start by learning the words they actually use in everyday life.',
                'content' => 'Standard French is useful, but if you want to understand real conversations , especially among young people , you need slang. This guide introduces you to must-know terms like “meuf,” “chelou,” “grave,” and “kiffer.” Learn what they mean, when to use them, and how they reflect French youth culture. Bonus: we include audio samples and example sentences.',
                'category' => 3,
            ],
            [
                'title' => 'Mastering Gender in French Nouns',
                'excerpt' => 'Struggling to remember when a word is masculine or feminine? You’re not alone , but there are ways to make it easier.',
                'content' => 'Gendered nouns are one of the first challenges learners face in French. But there are patterns , such as word endings and categories , that can help you predict gender with reasonable accuracy. This article explains key rules, common exceptions, and practical memorization techniques to help you stop guessing and start speaking with confidence.',
                'category' => 3,
            ],
            [
                'title' => 'What’s So Special About French Cuisine?',
                'excerpt' => 'From baguettes to bœuf bourguignon, French cuisine is more than food , it’s a way of life.',
                'content' => 'Food plays a central role in French identity and even in its language. This piece explores how meals structure the day, how menus and expressions reflect deeper cultural values, and how food vocabulary helps you better understand the French mindset. We also take a linguistic look at common food-related idioms and how they show up in daily speech.',
                'category' => 2,
            ],
        ];


        foreach ($blogPosts as $post) {
            $blog = BlogPost::create([
                'category_id' => $post['category'],
                'author_id' => 1,
                'title' => $post['title'],
                'slug' => Str::slug($post['title']),
                'excerpt' => $post['excerpt'],
                'content' => $post['content'],
                'status' => 'published',
                'published_at' => now()->subDays(rand(1, 60)),
            ]);
        }

        // Book Categories
        $libraryCategories = [
            'Grammar Guides',
            'Vocabulary Lists',
            'Reading Practice',
            'Audio Resources',
        ];

        foreach ($libraryCategories as $categoryName) {
            $category = LibraryCategory::create([
                'name' => $categoryName,
                'slug' => Str::slug($categoryName),
            ]);
        }

        // Books
        $libraryItems = [
            [
                'title' => 'French Grammar for Beginners',
                'description' => 'An essential guide to articles, verbs, and tenses.',
                'file_path' => 'library/grammar-beginners.pdf',
                'category' => 1,
                'author' => 'Marie Dupont',
                'price' => 0, // Free
            ],
            [
                'title' => '250 Essential French Verbs',
                'description' => 'Master the most frequently used verbs with examples.',
                'file_path' => 'library/essential-verbs.pdf',
                'category' => 2,
                'author' => 'Jean-Luc Martin',
                'price' => 700,
            ],
            [
                'title' => 'Everyday French Phrases',
                'description' => 'A practical booklet of useful expressions.',
                'file_path' => 'library/everyday-phrases.pdf',
                'category' => 2,
                'author' => 'Chloé Moreau',
                'price' => 450,
            ],
            [
                'title' => 'Short Stories for Beginners – Vol. 1',
                'description' => 'Read simple stories with English translation.',
                'file_path' => 'library/short-stories-vol1.pdf',
                'category' => 3,
                'author' => 'Luc Bernard',
                'price' => 800,
            ],
            [
                'title' => 'Learn French with Podcasts (Audio Pack)',
                'description' => 'MP3 audio to train your ear to native French.',
                'file_path' => 'library/audio-pack-podcasts.zip',
                'category' => 4,
                'author' => 'Claire Fontaine',
                'price' => 1050,
            ],
            [
                'title' => 'French Pronunciation Guide',
                'description' => 'Learn how to pronounce difficult French sounds.',
                'file_path' => 'library/pronunciation-guide.pdf',
                'category' => 1,
                'author' => 'Pierre Lemoine',
                'price' => 520,
            ],
            [
                'title' => 'French for Travel: Key Words & Phrases',
                'description' => 'The ultimate cheat sheet for travelers.',
                'file_path' => 'library/french-travel-phrases.pdf',
                'category' => 2,
                'author' => 'Nina Caron',
                'price' => 300,
            ],
            [
                'title' => 'Intermediate French Readings – Vol. 2',
                'description' => 'Practice reading with contextual vocabulary.',
                'file_path' => 'library/intermediate-readings-vol2.pdf',
                'category' => 3,
                'author' => 'Émile Roche',
                'price' => 850,
            ],
        ];


        foreach ($libraryItems as $item) {
            $item = LibraryArticle::create([
                'category_id' => $item['category'],
                'title' => $item['title'],
                'author' => $item['author'],
                'slug' => Str::slug($item['title']),
                'description' => $item['description'],
                'price' => $item['price'],
                // 'file_path' => "documents/sample$i.pdf", // Dummy path
            ]);
        }

        $this->call(
            CourseSeeder::class
        );

    }
}
