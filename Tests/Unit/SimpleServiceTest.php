<?php

declare(strict_types=1);

namespace SBUERK\ParameterToSpeakingUrl\Tests\Unit;

use SBUERK\ParameterToSpeakingUrl\SimpleService;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

final class SimpleServiceTest extends UnitTestCase
{
    /**
     * @test
     */
    public function methodTextReturnsExpectedValue(): void
    {
        self::assertSame('simpleservice::text(1)', (new SimpleService())->text(1));
    }
}
