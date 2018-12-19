@foreach($model->formFields() as $field)
    @php
        if (!function_exists('field_value')) {
            function field_value($model, $field) {
                $name = is_string($field) ? $field : $field['name'];
                if (preg_match('/\[(\w+)\]\[(\w+)\]/', $name, $m))
                    $value = $model->{$m[1]}->{$m[2]} ?? '';
                else if (preg_match('/\[(\w+)\]/', $name, $m))
                    $value = $model->{$m[1]};
                else
                    $value = $model->{$name};

                return $value;
            }
            function field_label($field) {
                if (is_string($field))
                    $label = title_case(str_replace('_', ' ', $field));
                else
                    $label = $field['label'] ?? title_case(str_replace('_', ' ', $field['name']));

                return $label;
            }
            function multi_name($field) {
                $name = is_string($field) ? $field : $field['name'];
                if (preg_match('/\[(\w+)\]/', $name, $m))
                    return $m[1];

                return $name;
            }
            function image($id) {
                return \LaravelAdmin\Models\Image::findOrNew((int)$id);
            }
        }
    @endphp

    @if(is_string($field))
        @input([
            'label' => field_label($field),
            'name' => $field,
            'value' => field_value($model, $field)
        ])
    @elseif($field['type'] == 'password')
        @input([
            'type' => 'password',
            'label' => field_label($field),
            'name' => $field['name'],
            'value' => field_value($model, $field)
        ])
    @elseif($field['type'] == 'textarea')
        @textarea([
            'label' => field_label($field),
            'name' => $field['name'],
            'value' => field_value($model, $field)
        ])
    @elseif($field['type'] == 'editor')
        <div class="row">
            <div class="col-md-10">
                @textarea([
                    'label' => field_label($field),
                    'name' => $field['name'],
                    'class' => 'editor',
                    'value' => field_value($model, $field)
                ])
            </div>
            <div class="col-md-2" style="padding-top: 28px;">
                @image_for_drug()
            </div>
        </div>
    @elseif($field['type'] == 'select')
        @select([
            'class'    => 'chosen-select',
            'label'    => field_label($field),
            'name'     => $field['name'],
            'options'  => $field['options'],
            'value'    => field_value($model, $field)
        ])
    @elseif($field['type'] == 'checkbox')
        @checkbox([
            'label' => field_label($field),
            'name'  => $field['name'],
            'value' => field_value($model, $field)
        ])
    @elseif($field['type'] == 'image' && !empty($field['multi']))
        <div class="multi">
            @include('admin::ui.form.label', ['label' => field_label($field)])

            @php($miltiImages = $model->{multi_name($field)})
            @if($miltiImages)
                @foreach($miltiImages as $k => $item)
                    <div class="item">
                        @image([
                            'label' => false,
                            'name'  => str_replace('[]', "[{$k}]", $field['name']),
                            'value' => $model->{multi_name($field)}[$k]
                        ])
                    </div>
                @endforeach
            @else
                <div class="item">
                    @image([
                        'label' => false,
                        'name'  => str_replace('[]', "[0]", $field['name'])
                    ])
                </div>
            @endif
        </div>
    @elseif($field['type'] == 'image' && empty($field['multi']))
        @image([
            'label' => field_label($field),
            'name'  => $field['name'],
            'value' => field_value($model, $field)
        ])
    @elseif(isset($field['type']))
        @switch($field['type'])
            @case('multi_slides')
                @include('admin.ui.form.multi_slides', [
                    'label' => field_label($field),
                    'name'  => $field['name'],
                    'value' => field_value($model, $field)
                ])
                @break
            @case('multi_images')
                @include('admin.ui.form.multi_images', [
                    'label' => field_label($field),
                    'name'  => $field['name'],
                    'value' => field_value($model, $field)
                ])
                @break
            @case('multi_team')
                @include('admin.ui.form.multi_team', [
                    'label' => field_label($field),
                    'name'  => $field['name'],
                    'value' => field_value($model, $field)
                ])
                @break
            @default
                @input([
                    'type' => $field['type'],
                    'label' => field_label($field),
                    'name' => $field['name'],
                    'custom' => isset($field['custom']) ? $field['custom'] :  [],
                    'step' => isset($field['step']) ? $field['step'] :  '',
                    'min' => isset($field['min']) ? $field['min'] :  '',
                    'readonly' => isset($field['readonly']) ? $field['readonly'] :  '',
                    'required' => isset($field['required']) ? $field['required'] :  '',
                    'disabled' => isset($field['disabled']) ? $field['disabled'] :  '',
                    'value' => field_value($model, $field)
                ])
        @endswitch

    @else
        @input([
            'label' => field_label($field),
            'name' => $field['name'],
            'value' => field_value($model, $field)
        ])
    @endif

@endforeach