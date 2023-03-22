<?php

declare(strict_types=1);

namespace ZendSkeletonModuleTest\Controller;

use ZendSkeletonModule\Controller\SkeletonController;
use PHPUnit\Framework\TestCase;

class SkeletonControllerTest extends TestCase
{

    public function testClassConstructor()
    {
        $user = new SkeletonController();

        $this->assertEquals(\get_class($user), SkeletonController::class);
    }
}
