<?php

namespace App\Services;

class RandomQuestionGeneratorService
{
    public function generate(): string
    {
        switch (rand(0, 2)) {
            case 0:
                $view = 'questions.first';
                break;
            case 1:
                $view = 'questions.second';
                break;
            case 2:
                $view = 'questions.third';
                break;
        }
        
        return $view;
    }
}