<?php


namespace wcbef\classes\repositories;


class Meta_Field
{
    private $meta_fields_option_name = "wcbef_meta_fields";

    const TEXTINPUT = "textinput";
    const TEXTAREA = "textarea";
    const CHECKBOX = "checkbox";
    const ARRAY_TYPE = "array";
    const CALENDAR = "calendar";

    const STRING_TYPE = "string";
    const NUMBER = "number";

    public static function get_fields_name_have_operator()
    {
        return [
            self::TEXTAREA,
            self::ARRAY_TYPE,
        ];
    }

    public static function get_main_types()
    {
        return [
            self::TEXTINPUT => esc_html__('TextInput', WCBEF_NAME),
            self::TEXTAREA => esc_html__('TextArea', WCBEF_NAME),
            self::CHECKBOX => esc_html__('Checkbox', WCBEF_NAME),
            self::ARRAY_TYPE => esc_html__('Array', WCBEF_NAME),
            self::CALENDAR => esc_html__('Calendar', WCBEF_NAME)
        ];
    }

    public static function get_sub_types()
    {
        return [
            self::STRING_TYPE => esc_html__('String', WCBEF_NAME),
            self::NUMBER => esc_html__('Number', WCBEF_NAME),
        ];
    }

    public function update(array $meta_fields)
    {
        return update_option($this->meta_fields_option_name, serialize($meta_fields));
    }

    public function get()
    {
        $meta_fields = get_option($this->meta_fields_option_name);
        return !empty($meta_fields) ? unserialize($meta_fields) : [];
    }
}
