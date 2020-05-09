<?php

namespace App\Persistence;

use App\Repository\ChecklistRepositoryInterface;
use App\ValueObjects\ChecklistQuestion;
use App\ValueObjects\ChecklistTemplateID;


class ChecklistService
{

    /**
     * @var ChecklistRepositoryInterface
     */
    private $checklistRepositoryMysql;

    public function __construct(ChecklistRepositoryInterface $checklistRepositoryMysql)
    {
        $this->checklistRepositoryMysql = $checklistRepositoryMysql;

    }

    public function addTemplateQuestion(ChecklistTemplateID$checklist_template_id, ChecklistQuestion $checklistQuestion)
    {
        return $this->checklistRepositoryMysql->createNewTemplateQuestion($checklist_template_id, $checklistQuestion);
    }

    public function updateTemplateQuestion (ChecklistTemplateID $checklist_template_id, ChecklistQuestion $checklistQuestion)
    {
        return $this->checklistRepositoryMysql->editTemplateQuestion($checklist_template_id, $checklistQuestion);
    }
}