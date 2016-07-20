<?php

/*
 * This file is part of Plista Chimney.
 *
 * (c) plista GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plista\Chimney\Test\Unit\Command;

use Plista\Chimney\Command\Make\ExitException;
use Plista\Chimney\Command\MakeCommand;

/**
 *
 */
class MakeCommandTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function createCommand()
    {
        return new MakeCommand();
    }

    /**
     * @test
     */
    public function execute_wrongType()
    {
        $commandTester = $this->executeCommand(['type' => 'some_wrong_type']);
        $this->assertEquals(
            ExitException::STATUS_CHANGELOG_TYPE_UNKNOWN,
            $commandTester->getStatusCode()
        );
        $this->assertEquals(
            'Errors occured:' . PHP_EOL . 'The changelog type is not recognized',
            trim($commandTester->getDisplay())
        );
    }
}
