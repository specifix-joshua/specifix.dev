<?php

class LanguageTableSeeder extends Seeder {
    
    public function run() {

        $language = new Language();
        $language->language = 'CSS';
        $language->save();

        $language = new Language();
        $language->language = 'JavaScript';
        $language->save();        

        $language = new Language();
        $language->language = 'PHP';
        $language->save();
    }
}