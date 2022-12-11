<?php

declare(strict_types=1);

namespace Infrastructure\Repository\Persistence\Eloquent;

use Domain\Entities\Template;
use Domain\Repositories\TemplateRepositoryInterface;

class EloquentTemplate implements TemplateRepositoryInterface
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
