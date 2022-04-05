<?php

namespace Joy\VoyagerBreadPlan\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'plans');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'plans',
                'display_name_singular' => __('joy-voyager-bread-plan::seeders.data_types.plan.singular'),
                'display_name_plural'   => __('joy-voyager-bread-plan::seeders.data_types.plan.plural'),
                'icon'                  => 'voyager-bread voyager-bread-plan voyager-tag',
                'model_name'            => 'Joy\\VoyagerBreadPlan\\Models\\Plan',
                // 'policy_name'           => 'Joy\\VoyagerBreadPlan\\Policies\\PlanPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadPlan\\Http\\Controllers\\VoyagerBreadPlanController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
