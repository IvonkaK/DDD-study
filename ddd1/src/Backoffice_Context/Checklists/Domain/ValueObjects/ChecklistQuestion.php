<?php

namespace App\ValueObjects;

class ChecklistQuestion
{
    private $title_string;
    private $type_string;
    private $questionData;


    public function __construct($title_string, $type_string, QuestionData $questionData)
    {
        \Assert\Assert::that($title_string)->string();
        \Assert\Assert::assertNotEmpty($title_string);

        $this->title_string = $title_string;
        \Assert\Assert::that($type_string)->string();
        $this->type_string = $type_string;

        $this->questionData = $questionData;
    }
}