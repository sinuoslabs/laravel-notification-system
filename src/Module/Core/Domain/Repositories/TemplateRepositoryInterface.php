<?php

declare(strict_types=1);

namespace Domain\Repositories;

use Domain\Entities\Template;

interface TemplateRepositoryInterface
{
    public function allTemplates();

    public function getTemplateFromId(string $id);

    public function saveTemplate(Template $template);

    public function updateTemplate(Template $template);

    public function deleteTemplate(Template $template);
}
