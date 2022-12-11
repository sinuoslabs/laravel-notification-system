<?php

namespace Domain\Repositories;

use Domain\Entities\Device;

interface DeviceRepositoryInterface
{
    public function allDevices();

    public function getDeviceFromId(string $id);

    public function getDeviceFromToken(string $id);

    public function saveDevice(Device $device);

    public function updateDevice(Device $device);

    public function deleteDevice(Device $device);
}
