<?php


class QuestionData
{
    public function __construct($question_data)
    {
        \Assert\Assert::that($question_data)->isJsonString();
        $this->$question_data = $question_data;
    }
}
