<?php

declare(strict_types=1);

/**
 * File: functions.php
 *
 * @param int $count
 * @param string $singularNominativ
 * @param string $pluralNominativ
 * @param string $pluralGenitive
 * @return \Magento\Framework\Phrase
 * @author Bartosz Kubicki b.w.kubicki@gmail.com>
 * Github: https://github.com/bartoszkubicki
 */
function __p(
    int $count,
    string $singularNominativ,
    string $pluralNominativ,
    string $pluralGenitive
): \Magento\Framework\Phrase {
    $phrase = decle($count, $singularNominativ, $pluralNominativ, $pluralGenitive);
    return new \Magento\Framework\Phrase('%1 ' . $phrase, [$count]);
}
