<?php

class LanguageTableSeeder extends Seeder {
    
    public function run() {

        $language = new Language();
        $language->language = 'HTML';
        $language->save();

        $language = new Language();
        $language->language = 'CSS';
        $language->save();        

        $language = new Language();
        $language->language = 'JavaScript';
        $language->save();

        $language = new Language();
        $language->language = 'jQuery';
        $language->save();

        $language = new Language();
        $language->language = 'PHP';
        $language->save();

        $language = new Language();
        $language->language = 'MySQL';
        $language->save();

        $language = new Language();
        $language->language = 'Laravel';
        $language->save();
    }
}