<?php

namespace Joy\VoyagerBreadEmailTemplate\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'email-templates');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'email_templates',
                'display_name_singular' => __('joy-voyager-bread-email-template::seeders.data_types.email_template.singular'),
                'display_name_plural'   => __('joy-voyager-bread-email-template::seeders.data_types.email_template.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadEmailTemplate\\Models\\EmailTemplate',
                // 'policy_name'           => 'Joy\\VoyagerBreadEmailTemplate\\Policies\\EmailTemplatePolicy',
                // 'controller'            => 'Joy\\VoyagerBreadEmailTemplate\\Http\\Controllers\\VoyagerBreadEmailTemplateController',
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
