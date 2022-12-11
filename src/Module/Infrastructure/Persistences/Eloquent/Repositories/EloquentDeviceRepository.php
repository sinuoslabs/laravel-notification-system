<?php

declare(strict_types=1);

namespace Infrastructure\Persistences\Eloquent\Repositories;

use Domain\Entities\Device;
use Domain\Repositories\DeviceRepositoryInterface;

class EloquentDeviceRepository implements DeviceRepositoryInterface
{
    public function allDevices()
    {
        // TODO: Implement allDevices() method.
    }

    public function getDeviceFromId(string $id)
    {
        // TODO: Implement getDeviceFromId() method.
    }

    public function getDeviceFromToken(string $id)
    {
        // TODO: Implement getDeviceFromToken() method.
    }

    public function saveDevice(Device $device)
    {
        // TODO: Implement saveDevice() method.
    }

    public function updateDevice(Device $device)
    {
        // TODO: Implement updateDevice() method.
    }

    public function deleteDevice(Device $device)
    {
        // TODO: Implement deleteDevice() method.
    }
}
