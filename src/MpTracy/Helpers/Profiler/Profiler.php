<?php

namespace MpTracy\Helpers\Profiler;

use /** @noinspection PhpInternalEntityUsedInspection */ MpTracy\Helpers\Profiler\ProfilerService;
use MpTracy\Helpers\Profiler\AdvancedProfiler;
use MpTracy\Helpers\Profiler\Profile;

class Profiler extends AdvancedProfiler
{
    /**
     * @var bool
     */
    protected static $enabled = false;

    /**
     * @var Profile[]
     */
    protected static $stack = [];

    /**
     * @var callable
     */
    protected static $postProcessor = null;

    /**
     * @inheritdoc
     */
    public static function enable($realUsage = false)
    {
        /** @noinspection PhpInternalEntityUsedInspection */
        ProfilerService::init();
        parent::enable($realUsage);
    }

    /**
     * @inheritdoc
     * @internal
     */
    public static function setPostProcessor(callable $postProcessor)
    {
        parent::setPostProcessor($postProcessor);
    }
}
