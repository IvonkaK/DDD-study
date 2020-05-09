<?php

namespace App\ValueObjects;

class ChecklistTemplateID
{
    private $checklist_template_id;

    public function __construct($checklist_template_id)
    {
        \Assert\Assert::that($checklist_template_id)->integer();
        $this->checklist_template_id = $checklist_template_id;
    }
}
