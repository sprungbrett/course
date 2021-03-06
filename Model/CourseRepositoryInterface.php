<?php

namespace Sprungbrett\Component\Course\Model;

use Sprungbrett\Component\Course\Model\Exception\CourseNotFoundException;
use Sprungbrett\Component\Translation\Model\Localization;

interface CourseRepositoryInterface
{
    public function create(?Localization $localization = null, ?string $id = null): CourseInterface;

    /**
     * @throws CourseNotFoundException
     */
    public function findById(string $id, ?Localization $localization = null): CourseInterface;

    public function remove(CourseInterface $course): void;
}
