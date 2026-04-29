<?php

declare(strict_types=1);

namespace Modules\Reporting\Application\Actions;

use Modules\Inventory\Infrastructure\Models\Location;

final class GetWarehouseUtilizationByLocationAction
{
    /**
     * @return array<int, array<string, int|string|float>>
     */
    public function __invoke(): array
    {
        $assumedCapacityPerLocation = 100;

        return Location::query()
            ->with('lots')
            ->orderBy('code')
            ->get()
            ->map(function (Location $location) use ($assumedCapacityPerLocation): array {
                $used = (int) $location->lots->sum('quantity');
                $utilization = round(($used / $assumedCapacityPerLocation) * 100, 2);

                return [
                    'location_id' => (int) $location->id,
                    'location_code' => (string) $location->code,
                    'location_name' => (string) $location->name,
                    'used_capacity_units' => $used,
                    'assumed_capacity_units' => $assumedCapacityPerLocation,
                    'utilization_percent' => min($utilization, 100.0),
                ];
            })
            ->values()
            ->all();
    }
}
