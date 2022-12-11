<?php

declare(strict_types=1);

namespace Infrastructure\Persistences\Eloquent\Repositories;

use Domain\Entities\Template;
use Domain\Repositories\TemplateRepositoryInterface;

class EloquentTemplateRepository implements TemplateRepositoryInterface
{
    public function allTemplates()
    {
        // TODO: Implement allTemplates() method.
    }

    public function getTemplateFromId(string $id)
    {
        // TODO: Implement getTemplateFromId() method.
    }

    public function saveTemplate(Template $template)
    {
        // TODO: Implement saveTemplate() method.
    }

    public function updateTemplate(Template $template)
    {
        // TODO: Implement updateTemplate() method.
    }

    public function deleteTemplate(Template $template)
    {
        // TODO: Implement deleteTemplate() method.
    }
}
