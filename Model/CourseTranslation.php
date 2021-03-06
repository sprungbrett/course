<?php

namespace Sprungbrett\Component\Course\Model;

use Sprungbrett\Component\Content\Model\ContentableTrait;
use Sprungbrett\Component\Content\Model\ContentInterface;
use Sprungbrett\Component\Translation\Model\Localization;
use Sprungbrett\Component\Translation\Model\TranslationTrait;

class CourseTranslation implements CourseTranslationInterface
{
    use TranslationTrait;
    use ContentableTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $workflowStage = CourseInterface::WORKFLOW_STAGE_NEW;

    public function __construct(string $id, Localization $localization, ContentInterface $content)
    {
        $this->initializeTranslation($localization);
        $this->initializeContent($content);

        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getWorkflowStage(): string
    {
        return $this->workflowStage;
    }

    public function setWorkflowStage(string $workflowStage): CourseTranslationInterface
    {
        $this->workflowStage = $workflowStage;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): CourseTranslationInterface
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): CourseTranslationInterface
    {
        $this->description = $description;

        return $this;
    }
}
