<?php


namespace wcbef\classes\helpers;


class Operator
{
    public static function edit_text()
    {
        return [
            'text_append' => esc_html__('Append', WCBEF_NAME),
            'text_prepend' => esc_html__('Prepend', WCBEF_NAME),
            'text_new' => esc_html__('New', WCBEF_NAME),
            'text_delete' => esc_html__('Delete', WCBEF_NAME),
            'text_replace' => esc_html__('Replace', WCBEF_NAME),
        ];
    }

    public static function edit_taxonomy()
    {
        return [
            'taxonomy_append' => esc_html__('Append', WCBEF_NAME),
            'taxonomy_replace' => esc_html__('Replace', WCBEF_NAME),
            'taxonomy_delete' => esc_html__('Delete', WCBEF_NAME),
        ];
    }

    public static function edit_number()
    {
        return [
            'number_new' => esc_html__('Set New', WCBEF_NAME),
            'number_clear' => esc_html__('Clear Value', WCBEF_NAME),
            'number_formula' => esc_html__('Formula', WCBEF_NAME),
            'increase_by_value' => esc_html__('Increase by value', WCBEF_NAME),
            'decrease_by_value' => esc_html__('Decrease by value', WCBEF_NAME),
            'increase_by_percent' => esc_html__('Increase by %', WCBEF_NAME),
            'decrease_by_percent' => esc_html__('Decrease by %', WCBEF_NAME),
        ];
    }

    public static function edit_regular_price()
    {
        return [
            'increase_by_value_from_sale' => esc_html__('Increase by value (From sale)', WCBEF_NAME),
            'increase_by_percent_from_sale' => esc_html__('Increase by % (From sale)', WCBEF_NAME),
        ];
    }

    public static function edit_sale_price()
    {
        return [
            'decrease_by_value_from_regular' => esc_html__('Decrease by value (From regular)', WCBEF_NAME),
            'decrease_by_percent_from_regular' => esc_html__('Decrease by % (From regular)', WCBEF_NAME),
        ];
    }

    public static function round_items()
    {
        return [
            5 => 5,
            10 => 10,
            19 => 19,
            29 => 29,
            39 => 39,
            49 => 49,
            59 => 59,
            69 => 69,
            79 => 79,
            89 => 89,
            99 => 99
        ];
    }
}
