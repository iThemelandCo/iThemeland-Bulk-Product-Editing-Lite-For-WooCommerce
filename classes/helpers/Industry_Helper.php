<?php

namespace wcbef\classes\helpers;

class Industry_Helper
{
    public static function get_industries()
    {
        return [
            'Automotive and Transportation' => esc_html__('Automotive', WCBEF_NAME),
            'AdTech and AdNetwork' => esc_html__('AdTech and AdNetwork', WCBEF_NAME),
            'Agency' => esc_html__('Agency', WCBEF_NAME),
            'B2B Software' => esc_html__('B2B Software', WCBEF_NAME),
            'B2C Internet Services' => esc_html__('B2C Internet Services', WCBEF_NAME),
            'Classifieds' => esc_html__('Classifieds', WCBEF_NAME),
            'Consulting and Market Research' => esc_html__('Consulting and Market Research', WCBEF_NAME),
            'CPG, Food and Beverages' => esc_html__('CPG', WCBEF_NAME),
            'Education' => esc_html__('Education', WCBEF_NAME),
            'Education (student)' => esc_html__('Education (Student)', WCBEF_NAME),
            'Equity Research' => esc_html__('Equity Research', WCBEF_NAME),
            'Financial services' => esc_html__('Financial Services', WCBEF_NAME),
            'Gambling / Gaming' => esc_html__('Gambling and Gaming', WCBEF_NAME),
            'Hedge Funds and Asset Management' => esc_html__('Hedge Funds and Asset Management', WCBEF_NAME),
            'Investment Banking' => esc_html__('Investment Banking', WCBEF_NAME),
            'Logistics and Shipping' => esc_html__('Logistics and Shipping', WCBEF_NAME),
            'Payments' => esc_html__('Payments', WCBEF_NAME),
            'Pharma and Healthcare' => esc_html__('Pharma and Healthcare', WCBEF_NAME),
            'Private Equity and Venture Capital' => esc_html__('Private Equity and Venture Capital', WCBEF_NAME),
            'Media and Entertainment' => esc_html__('Publishers and Media', WCBEF_NAME),
            'Government Public Sector & Non Profit' => esc_html__('Public Sector, Non Profit, Fraud and Compliance', WCBEF_NAME),
            'Retail / eCommerce' => esc_html__('Retail and eCommerce', WCBEF_NAME),
            'Telecom and Hardware' => esc_html__('Telecom', WCBEF_NAME),
            'Travel and Hospitality' => esc_html__('Travel', WCBEF_NAME),
            'Other' => esc_html__('Other', WCBEF_NAME),
        ];
    }
}
