<?php

declare(strict_types=1);

/**
 * File: DeclensionTest.php
 *
 * @author Bartosz Kubicki b.w.kubicki@gmail.com>
 * Github: https://github.com/bartoszkubicki
 */

namespace BKubicki\Magento2PolishNounNumeralDeclensionAdapter\Test\Unit;

use PHPUnit\Framework\TestCase;

/**
 * Class DeclensionTest
 * @package BKubicki\Magento2PolishNounNumeralDeclensionAdapter\Unit
 */
class DeclensionTest extends TestCase
{
    /**
     * @return void
     */
    public function testDecleCorrectlyFormatsWordWithNumber(): void
    {
        $phrase = __p(1, 'komentarz', 'komentarze', 'komentarzy');
        $this->assertSame('1 komentarz', $phrase->render());

        $phrase = __p(4, 'komentarz', 'komentarze', 'komentarzy');
        $this->assertSame('4 komentarze', $phrase->render());

        $phrase = __p(60, 'komentarz', 'komentarze', 'komentarzy');
        $this->assertSame('60 komentarzy', $phrase->render());
    }
}
