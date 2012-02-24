<?php

namespace Lexik\Bundle\TranslationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Lexik\Bundle\TranslationBundle\Model\Translation as BaseTranslation;

/**
 * @ORM\Entity
 *
 * @author Cédric Girard <c.girard@lexik.fr>
 */
class Translation extends BaseTranslation
{
}