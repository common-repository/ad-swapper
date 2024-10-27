<?php

// *****************************************************************************
// INCLUDES / GEOIP / ALPHA / CONTINENT-SUPPORT.PHP
// (C) 2015 Peter Newman. All Rights Reserved.
// *****************************************************************************

    namespace greatKiwi_byFernTec_adSwapper_local_v0x1x211_geoipAlpha ;

// =============================================================================
// get_continent_codes_to_names_array()
// =============================================================================

function get_continent_codes_to_names_array() {

    // -------------------------------------------------------------------------
    // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_geoipAlpha\
    // get_continent_codes_to_names_array()
    // - - - - - - - - - - - - - - - - - -
    // Returns an array like (eg):-
    //
    //      $continent_codes_to_names_array = array(
    //          [AS] => Asia                ,
    //          [AF] => Africa              ,
    //          [EU] => Europe              ,
    //          [AN] => Antarctica          ,
    //          [OC] => Oceania             ,
    //          [NA] => North America       ,
    //          [SA] => South America
    //          )
    //
    // -------------------------------------------------------------------------

    return array(
                'AS' => 'Asia'              ,
                'AF' => 'Africa'            ,
                'EU' => 'Europe'            ,
                'AN' => 'Antarctica'        ,
                'OC' => 'Oceania'           ,
                'NA' => 'North America'     ,
                'SA' => 'South America'
                ) ;

    // -------------------------------------------------------------------------

}

// =============================================================================
// get_country_to_continent_codes_array()
// =============================================================================

function get_country_to_continent_codes_array() {

    // -------------------------------------------------------------------------
    // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_geoipAlpha\
    // get_country_to_continent_codes_array()
    // - - - - - - - - - - - - - - - - - - -
    // Returns an array like:-
    //
    //      $country_to_continent_codes_array = array(
    //          'AD' => 'EU'
    //          'AE' => 'AS'
    //          'AF' => 'AS'
    //          'AG' => 'NA'
    //          ...
    //          'ZW' => 'AF'
    //          )
    //
    // Where the data was retieved from:-
    //      http://dev.maxmind.com/geoip/legacy/codes/country_continent/
    //
    // on 25 February 2015.
    //
    // RETURNS
    //      $country_to_continent_codes_array ARRAY
    // -------------------------------------------------------------------------

    return array(
                'AD' => 'EU'    ,
                'AE' => 'AS'    ,
                'AF' => 'AS'    ,
                'AG' => 'NA'    ,
                'AI' => 'NA'    ,
                'AL' => 'EU'    ,
                'AM' => 'AS'    ,
                'AN' => 'NA'    ,
                'AO' => 'AF'    ,
                'AP' => 'AS'    ,
                'AQ' => 'AN'    ,
                'AR' => 'SA'    ,
                'AS' => 'OC'    ,
                'AT' => 'EU'    ,
                'AU' => 'OC'    ,
                'AW' => 'NA'    ,
                'AX' => 'EU'    ,
                'AZ' => 'AS'    ,
                'BA' => 'EU'    ,
                'BB' => 'NA'    ,
                'BD' => 'AS'    ,
                'BE' => 'EU'    ,
                'BF' => 'AF'    ,
                'BG' => 'EU'    ,
                'BH' => 'AS'    ,
                'BI' => 'AF'    ,
                'BJ' => 'AF'    ,
                'BL' => 'NA'    ,
                'BM' => 'NA'    ,
                'BN' => 'AS'    ,
                'BO' => 'SA'    ,
                'BR' => 'SA'    ,
                'BS' => 'NA'    ,
                'BT' => 'AS'    ,
                'BV' => 'AN'    ,
                'BW' => 'AF'    ,
                'BY' => 'EU'    ,
                'BZ' => 'NA'    ,
                'CA' => 'NA'    ,
                'CC' => 'AS'    ,
                'CD' => 'AF'    ,
                'CF' => 'AF'    ,
                'CG' => 'AF'    ,
                'CH' => 'EU'    ,
                'CI' => 'AF'    ,
                'CK' => 'OC'    ,
                'CL' => 'SA'    ,
                'CM' => 'AF'    ,
                'CN' => 'AS'    ,
                'CO' => 'SA'    ,
                'CR' => 'NA'    ,
                'CU' => 'NA'    ,
                'CV' => 'AF'    ,
                'CX' => 'AS'    ,
                'CY' => 'AS'    ,
                'CZ' => 'EU'    ,
                'DE' => 'EU'    ,
                'DJ' => 'AF'    ,
                'DK' => 'EU'    ,
                'DM' => 'NA'    ,
                'DO' => 'NA'    ,
                'DZ' => 'AF'    ,
                'EC' => 'SA'    ,
                'EE' => 'EU'    ,
                'EG' => 'AF'    ,
                'EH' => 'AF'    ,
                'ER' => 'AF'    ,
                'ES' => 'EU'    ,
                'ET' => 'AF'    ,
                'EU' => 'EU'    ,
                'FI' => 'EU'    ,
                'FJ' => 'OC'    ,
                'FK' => 'SA'    ,
                'FM' => 'OC'    ,
                'FO' => 'EU'    ,
                'FR' => 'EU'    ,
                'FX' => 'EU'    ,
                'GA' => 'AF'    ,
                'GB' => 'EU'    ,
                'GD' => 'NA'    ,
                'GE' => 'AS'    ,
                'GF' => 'SA'    ,
                'GG' => 'EU'    ,
                'GH' => 'AF'    ,
                'GI' => 'EU'    ,
                'GL' => 'NA'    ,
                'GM' => 'AF'    ,
                'GN' => 'AF'    ,
                'GP' => 'NA'    ,
                'GQ' => 'AF'    ,
                'GR' => 'EU'    ,
                'GS' => 'AN'    ,
                'GT' => 'NA'    ,
                'GU' => 'OC'    ,
                'GW' => 'AF'    ,
                'GY' => 'SA'    ,
                'HK' => 'AS'    ,
                'HM' => 'AN'    ,
                'HN' => 'NA'    ,
                'HR' => 'EU'    ,
                'HT' => 'NA'    ,
                'HU' => 'EU'    ,
                'ID' => 'AS'    ,
                'IE' => 'EU'    ,
                'IL' => 'AS'    ,
                'IM' => 'EU'    ,
                'IN' => 'AS'    ,
                'IO' => 'AS'    ,
                'IQ' => 'AS'    ,
                'IR' => 'AS'    ,
                'IS' => 'EU'    ,
                'IT' => 'EU'    ,
                'JE' => 'EU'    ,
                'JM' => 'NA'    ,
                'JO' => 'AS'    ,
                'JP' => 'AS'    ,
                'KE' => 'AF'    ,
                'KG' => 'AS'    ,
                'KH' => 'AS'    ,
                'KI' => 'OC'    ,
                'KM' => 'AF'    ,
                'KN' => 'NA'    ,
                'KP' => 'AS'    ,
                'KR' => 'AS'    ,
                'KW' => 'AS'    ,
                'KY' => 'NA'    ,
                'KZ' => 'AS'    ,
                'LA' => 'AS'    ,
                'LB' => 'AS'    ,
                'LC' => 'NA'    ,
                'LI' => 'EU'    ,
                'LK' => 'AS'    ,
                'LR' => 'AF'    ,
                'LS' => 'AF'    ,
                'LT' => 'EU'    ,
                'LU' => 'EU'    ,
                'LV' => 'EU'    ,
                'LY' => 'AF'    ,
                'MA' => 'AF'    ,
                'MC' => 'EU'    ,
                'MD' => 'EU'    ,
                'ME' => 'EU'    ,
                'MF' => 'NA'    ,
                'MG' => 'AF'    ,
                'MH' => 'OC'    ,
                'MK' => 'EU'    ,
                'ML' => 'AF'    ,
                'MM' => 'AS'    ,
                'MN' => 'AS'    ,
                'MO' => 'AS'    ,
                'MP' => 'OC'    ,
                'MQ' => 'NA'    ,
                'MR' => 'AF'    ,
                'MS' => 'NA'    ,
                'MT' => 'EU'    ,
                'MU' => 'AF'    ,
                'MV' => 'AS'    ,
                'MW' => 'AF'    ,
                'MX' => 'NA'    ,
                'MY' => 'AS'    ,
                'MZ' => 'AF'    ,
                'NA' => 'AF'    ,
                'NC' => 'OC'    ,
                'NE' => 'AF'    ,
                'NF' => 'OC'    ,
                'NG' => 'AF'    ,
                'NI' => 'NA'    ,
                'NL' => 'EU'    ,
                'NO' => 'EU'    ,
                'NP' => 'AS'    ,
                'NR' => 'OC'    ,
                'NU' => 'OC'    ,
                'NZ' => 'OC'    ,
                'OM' => 'AS'    ,
                'PA' => 'NA'    ,
                'PE' => 'SA'    ,
                'PF' => 'OC'    ,
                'PG' => 'OC'    ,
                'PH' => 'AS'    ,
                'PK' => 'AS'    ,
                'PL' => 'EU'    ,
                'PM' => 'NA'    ,
                'PN' => 'OC'    ,
                'PR' => 'NA'    ,
                'PS' => 'AS'    ,
                'PT' => 'EU'    ,
                'PW' => 'OC'    ,
                'PY' => 'SA'    ,
                'QA' => 'AS'    ,
                'RE' => 'AF'    ,
                'RO' => 'EU'    ,
                'RS' => 'EU'    ,
                'RU' => 'EU'    ,
                'RW' => 'AF'    ,
                'SA' => 'AS'    ,
                'SB' => 'OC'    ,
                'SC' => 'AF'    ,
                'SD' => 'AF'    ,
                'SE' => 'EU'    ,
                'SG' => 'AS'    ,
                'SH' => 'AF'    ,
                'SI' => 'EU'    ,
                'SJ' => 'EU'    ,
                'SK' => 'EU'    ,
                'SL' => 'AF'    ,
                'SM' => 'EU'    ,
                'SN' => 'AF'    ,
                'SO' => 'AF'    ,
                'SR' => 'SA'    ,
                'ST' => 'AF'    ,
                'SV' => 'NA'    ,
                'SY' => 'AS'    ,
                'SZ' => 'AF'    ,
                'TC' => 'NA'    ,
                'TD' => 'AF'    ,
                'TF' => 'AN'    ,
                'TG' => 'AF'    ,
                'TH' => 'AS'    ,
                'TJ' => 'AS'    ,
                'TK' => 'OC'    ,
                'TL' => 'AS'    ,
                'TM' => 'AS'    ,
                'TN' => 'AF'    ,
                'TO' => 'OC'    ,
                'TR' => 'EU'    ,
                'TT' => 'NA'    ,
                'TV' => 'OC'    ,
                'TW' => 'AS'    ,
                'TZ' => 'AF'    ,
                'UA' => 'EU'    ,
                'UG' => 'AF'    ,
                'UM' => 'OC'    ,
                'US' => 'NA'    ,
                'UY' => 'SA'    ,
                'UZ' => 'AS'    ,
                'VA' => 'EU'    ,
                'VC' => 'NA'    ,
                'VE' => 'SA'    ,
                'VG' => 'NA'    ,
                'VI' => 'NA'    ,
                'VN' => 'AS'    ,
                'VU' => 'OC'    ,
                'WF' => 'OC'    ,
                'WS' => 'OC'    ,
                'YE' => 'AS'    ,
                'YT' => 'AF'    ,
                'ZA' => 'AF'    ,
                'ZM' => 'AF'    ,
                'ZW' => 'AF'
                ) ;

    // -------------------------------------------------------------------------

}

// =============================================================================
// get_continent_details_for_country_code()
// =============================================================================

function get_continent_details_for_country_code() {

    // -------------------------------------------------------------------------
    // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_geoipAlpha\
    // get_continent_details_for_country_code(
    //      $two_letter_country_code
    //      )
    // - - - - - - - - - - - - - - - - - - - -
    // Returns an array like (eg):-
    //
    //      $continent_details = array(
    //          'code'  =>  'OC'        ,
    //          'name'  =>  'Oceania'
    //          )
    //
    // Or FALSE if the country code wasn't recognised.
    // -------------------------------------------------------------------------

    // -------------------------------------------------------------------------
    // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_geoipAlpha\
    // get_country_to_continent_codes_array()
    // - - - - - - - - - - - - - - - - - - -
    // Returns an array like:-
    //
    //      $country_to_continent_codes_array = array(
    //          'AD' => 'EU'
    //          'AE' => 'AS'
    //          'AF' => 'AS'
    //          'AG' => 'NA'
    //          ...
    //          'ZW' => 'AF'
    //          )
    //
    // Where the data was retieved from:-
    //      http://dev.maxmind.com/geoip/legacy/codes/country_continent/
    //
    // on 25 February 2015.
    //
    // RETURNS
    //      $country_to_continent_codes_array ARRAY
    // -------------------------------------------------------------------------

    $country_to_continent_codes_array = get_country_to_continent_codes_array() ;

    // -------------------------------------------------------------------------

    if (    ! array_key_exists(
                $two_letter_country_code                    ,
                $country_to_continent_codes_array
                )
        ) {
        return FALSE ;
    }

    // -------------------------------------------------------------------------

    $continent_code =
        $country_to_continent_codes_array[ $two_letter_country_code ]
        ;

    // -------------------------------------------------------------------------
    // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_geoipAlpha\
    // get_continent_codes_to_names_array()
    // - - - - - - - - - - - - - - - - - -
    // Returns an array like (eg):-
    //
    //      $continent_codes_to_names_array = array(
    //          [AS] => Asia                ,
    //          [AF] => Africa              ,
    //          [EU] => Europe              ,
    //          [AN] => Antarctica          ,
    //          [OC] => Oceania             ,
    //          [NA] => North America       ,
    //          [SA] => South America
    //          )
    //
    // -------------------------------------------------------------------------

    $continent_codes_to_names_array = get_continent_codes_to_names_array() ;

    // -------------------------------------------------------------------------

    if (    ! array_key_exists(
                $continent_code                     ,
                $continent_codes_to_names_array
                )
        ) {
        return FALSE ;
    }

    // -------------------------------------------------------------------------

    return array(
                'code'  =>  $continent_code                                         ,
                'name'  =>  $continent_codes_to_names_array[ $continent_code   ]
                ) ;

    // -------------------------------------------------------------------------

}

// =============================================================================
// get_countries_by_continent_codes_array()
// =============================================================================

function get_countries_by_continent_codes_array() {

    // -------------------------------------------------------------------------
    // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_geoipAlpha\
    // get_countries_by_continent_codes_array()
    // - - - - - - - - - - - - - - - - - - - -
    // Returns an array like (eg):-
    //
    //      $countries_by_continent_codes_array = array(
    //          'AS' => array(
    //                      'AE'    ,
    //                      'AF'    ,
    //                      'AM'    ,
    //                      ...
    //                      )   ,
    //          'AF' => array(
    //                      'BI'    ,
    //                      'BJ'    ,
    //                      'BW'    ,
    //                      ...
    //                      )   ,
    //          'EU' => array(
    //                      'AD'    ,
    //                      'AL'    ,
    //                      'AT'    ,
    //                      ...
    //                      )   ,
    //          'AN' => array(
    //                      'AQ'    ,
    //                      'BV'    ,
    //                      'GS'    ,
    //                      ...
    //                      )   ,
    //          'OC' => array(
    //                      'AS'    ,
    //                      'AU'    ,
    //                      'CK'    ,
    //                      ...
    //                      )   ,
    //          'NA' => array(
    //                      'AG'    ,
    //                      'AI'    ,
    //                      'AN'    ,
    //                      ...
    //                      )   ,
    //          'SA' => array(
    //                      'AR'    ,
    //                      'BO'    ,
    //                      'BR'    ,
    //                      ...
    //                      )
    //          )
    //
    // -------------------------------------------------------------------------

    // -------------------------------------------------------------------------
    // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_geoipAlpha\
    // get_country_to_continent_codes_array()
    // - - - - - - - - - - - - - - - - - - -
    // Returns an array like:-
    //
    //      $country_to_continent_codes_array = array(
    //          'AD' => 'EU'
    //          'AE' => 'AS'
    //          'AF' => 'AS'
    //          'AG' => 'NA'
    //          ...
    //          'ZW' => 'AF'
    //          )
    //
    // Where the data was retieved from:-
    //      http://dev.maxmind.com/geoip/legacy/codes/country_continent/
    //
    // on 25 February 2015.
    //
    // RETURNS
    //      $country_to_continent_codes_array ARRAY
    // -------------------------------------------------------------------------

    $country_to_continent_codes_array =
        get_country_to_continent_codes_array()
        ;

    // -------------------------------------------------------------------------

    $countries_by_continent_codes_array = array() ;

    // -------------------------------------------------------------------------

    foreach ( $country_to_continent_codes_array as $country_code => $continent_code ) {

        // ---------------------------------------------------------------------

        if ( array_key_exists( $continent_code , $countries_by_continent_codes_array ) ) {
            $countries_by_continent_codes_array[ $continent_code ][] = $country_code ;

        } else {
            $countries_by_continent_codes_array[ $continent_code ] = array( $country_code ) ;

        }

        // ---------------------------------------------------------------------

    }

    // -------------------------------------------------------------------------

    return $countries_by_continent_codes_array ;

    // -------------------------------------------------------------------------

}

// =============================================================================
// That's that!
// =============================================================================

