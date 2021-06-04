<?php

namespace Sanchescom\WiFi\Contracts;

use Sanchescom\WiFi\System\AbstractNetwork;

/**
 * Interface NetworkInterface.
 */
interface NetworkInterface
{
    /**
     * @param string $password
     * @param string $device
     */
    public function connect(string $password, string $device, string $extra_command): void;

    /**
     * @param string $device
     */
    public function disconnect(string $device): void;

    /**
     * @param array $network
     *
     * @return \Sanchescom\WiFi\System\AbstractNetwork
     */
    public function createFromArray(array $network): AbstractNetwork;
}
