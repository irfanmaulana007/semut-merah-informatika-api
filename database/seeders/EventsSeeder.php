<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Events;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Events::Create([
            'name' => 'Exploratory Data Analysis (EDA) menggunakan Python',
            'description' => 'EDA adalah tahap pertama dan salah satu tahap yang penting dalam proses analytics. Pada training ini kita akan membahas statistika dasar yang biasa digunakan pada proses EDA dan menggunakan library Pandas untuk eksplorasi sampel data riil.',
            'precondition' => 'Familiar dengan matematika, statistika, dan pemograman Python',
            'capacity' => 15,
            'img_url' => '1.png',
            'location' => 'online'
        ]);

        Events::Create([
            'name' => 'Introduction to Machine Learning & Data Science',
            'description' => 'Analyzing and extracting insight from data becoming more and more important nowadays. That exactly what data science is. In this training, we are going to get and overview about data science and machine learning techniques and see how to implement the technique for particular use case.',
            'img_url' => '',
            'location' => 'online'
        ]);
    }
}
