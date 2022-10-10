<?php

declare(strict_types=1);

/*
 * This file is part of the NucleosAntiSpamBundle package.
 *
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nucleos\AntiSpamBundle\Form\Event;

use Symfony\Contracts\EventDispatcher\Event;

class AntiSpamEvent extends Event
{
    public const FORM_EXTENSION_EVENT =  'nucleos_antispam.form.extension.event';

    protected bool $isDisabled = false;

    /**
     * @param bool $isAllowed
     *
     * @return void
     */
    public function setDisabled(bool $isDisabled): void
    {
        $this->isDisabled = $isDisabled;
    }

    /**
     * @return bool
     */
    public function isDisabled(): bool
    {
        return $this->isDisabled;
    }

}
