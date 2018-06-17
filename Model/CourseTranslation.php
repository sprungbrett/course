<?php

namespace Sprungbrett\Component\Course\Model;

use Sprungbrett\Component\Translation\Model\Localization;
use Sprungbrett\Component\Translation\Model\TranslationTrait;
use Sprungbrett\Component\Uuid\Model\Uuid;
use Sprungbrett\Component\Uuid\Model\UuidTrait;

class CourseTranslation implements CourseTranslationInterface
{
    use TranslationTrait;
    use UuidTrait;

    /**
     * @var string
     */
    protected $title;

    public function __construct(Localization $localization, ?Uuid $uuid = null)
    {
        $this->initializeTranslation($localization);
        $this->initializeUuid($uuid);
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): CourseTranslation
    {
        $this->title = $title;

        return $this;
    }
}