<?php

namespace Training\Test\Model;

class Page
{
    protected $context;
    protected $config;
    protected $configDeps;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        Config $config,
        ConfigDepsInterface $configDeps
    ) {
        $this->context = $context;
        $this->config = $config;
        $this->configDeps = $configDeps;
    }

    public function log()
    {
        echo get_class($this->context).'<br/>';
        echo get_class($this->config).'<br/>';
        echo get_class($this->configDeps).'<br/>';
    }
}
