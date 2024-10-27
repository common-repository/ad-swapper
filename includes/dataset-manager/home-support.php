<?php

// *****************************************************************************
// DATASET-MANAGER / HOME-SUPPORT.PHP
// (C) 2013 Peter Newman. All Rights Reserved.
// *****************************************************************************

    namespace greatKiwi_byFernTec_adSwapper_local_v0x1x211_standardDatasetManager ;

// =============================================================================
// list_applications_and_their_datasets_and_views_etc()
// =============================================================================

function list_applications_and_their_datasets_and_views_etc(
    $caller_app_slash_plugins_global_namespace          ,
    $caller_apps_includes_dir                           ,
    $question_front_end                                 ,
    $app_or_sub_apps_dataset_and_view_definitions_etc   ,
    $application_slug                                   ,
    $application_path                                   ,
    $level
    ) {

    // -------------------------------------------------------------------------
    // list_applications_and_their_datasets_and_views_etc(
    //      $caller_app_slash_plugins_global_namespace          ,
    //      $caller_apps_includes_dir                           ,
    //      $question_front_end                                 ,
    //      $app_or_sub_apps_dataset_and_view_definitions_etc   ,
    //      $application_slug                                   ,
    //      $application_path                                   ,
    //      $level
    //      )
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // RETURNS
    //      o   On SUCCESS!
    //          - - - - - -
    //          $applications_and_datasets_html STRING
    //
    //      o   On FAILURE!
    //          - - - - - -
    //          array( $error_message STRING )
    // -------------------------------------------------------------------------

    // -------------------------------------------------------------------------
    // Here we should have (eg):-
    //
    //      $app_or_sub_apps_dataset_and_view_definitions_etc = array(
    //
    //          [dirspec]               => /opt/lampp/htdocs.../app-defs
    //
    //          [app_path]              =>
    //
    //          [app_data]              => Array(
    //                                          [app_slug]  => dataset_manager_dataset_defs
    //                                          [app_title] => Dataset Manager Dataset Defs
    //                                          )
    //
    //          [sub_apps]              => Array(
    //
    //              [research-assistant] => Array(
    //
    //                  [dirspec]               => /opt/lampp/htdocs/.../research-assistant.app
    //
    //                  [app_path]              => research-assistant
    //
    //                  [app_data]              => Array(
    //                                                  [app_slug]              => research_assistant
    //                                                  [app_title]             => Research Assistant
    //                                                  [dataset_listing_order] => Array(
    //                                                      [0] => projects
    //                                                      [1] => categories
    //                                                      [2] => urls
    //                                                      )
    //
    //                  )
    //
    //                  [sub_apps]            => Array()
    //
    //                  [dataset_definitions] => Array(
    //
    //                      [categories] => Array(
    //                          [dataset_slug]                      => categories
    //                          [dataset_name_singular]             => category
    //                          [dataset_name_plural]               => categories
    //                          [dataset_title_singular]            => Category
    //                          [dataset_title_plural]              => Categories
    //                          [basepress_dataset_handle]          => Array(
    //                              [nice_name]     => researchAssistant_byFernTec_categories
    //                              [unique_key]    => 6934fccc-c552-46b0-8db5-87a02...f7adf54
    //                              [version]       => 0.1
    //                              )
    //                          [dataset_records_table]             => Array(...)
    //                          [zebra_form]                        => Array(...)
    //                          [array_storage_record_structure]    => Array(...)
    //                          [array_storage_key_field_slug]      => key
    //                          )
    //
    //                      [projects] => Array(
    //                          [dataset_slug]                      => projects
    //                          [dataset_name_singular]             => project
    //                          [dataset_name_plural]               => projects
    //                          [dataset_title_singular]            => Project
    //                          [dataset_title_plural]              => Projects
    //                          [basepress_dataset_handle]          => Array(
    //                              [nice_name]     => researchAssistant_byFernTec_projects
    //                              [unique_key]    => d2562b23-3c20-4368-92c4-2b...0c9a66
    //                              [version]       => 0.1
    //                              )
    //                          [dataset_records_table]             => Array(...)
    //                          [zebra_form]                        => Array(...)
    //                          [array_storage_record_structure]    => Array(...)
    //                          [array_storage_key_field_slug]      => key
    //                          )
    //
    //                      [urls] => Array(
    //                          [dataset_slug]                      => urls
    //                          [dataset_name_singular]             => url
    //                          [dataset_name_plural]               => urls
    //                          [dataset_title_singular]            => URL
    //                          [dataset_title_plural]              => URLs
    //                          [basepress_dataset_handle]          => Array(
    //                              [nice_name]     => researchAssistant_byFernTec_urls
    //                              [unique_key]    => 7d800cd3-8787-49ea-9058-68db...5097b13
    //                              [version]       => 0.1
    //                              )
    //                          [dataset_records_table]             => Array(...)
    //                          [zebra_form]                        => Array(...)
    //                          [array_storage_record_structure]    => Array(...)
    //                          [array_storage_key_field_slug]      => key
    //                          )
    //
    //                      )
    //
    //                  [views] => Array(
    //
    //                      [url_tree] => Array(
    //                          [view_slug] => url_tree
    //                          ...
    //                          )
    //
    //                      )
    //
    //                  )
    //              )
    //
    //          [dataset_definitions]   => Array()
    //
    //          [views]                 => Array()
    //
    //          )
    //
    // -------------------------------------------------------------------------

//\greatKiwi_byFernTec_adSwapper_local_v0x1x211_testDebug\pr(
//    $app_or_sub_apps_dataset_and_view_definitions_etc       ,
//    '$app_or_sub_apps_dataset_and_view_definitions_etc'
//    ) ;

    // -------------------------------------------------------------------------
    // Here we should have (eg):-
    //      $application_path = "ad-swapper"
    // -------------------------------------------------------------------------

//\greatKiwi_byFernTec_adSwapper_local_v0x1x211_testDebug\pr(
//    $application_path       ,
//    '$application_path'
//    ) ;

    // -------------------------------------------------------------------------
    // Here we should have (eg):-
    //      $application_slug = "ad-swapper"
    // -------------------------------------------------------------------------

//\greatKiwi_byFernTec_adSwapper_local_v0x1x211_testDebug\pr(
//    $application_slug       ,
//    '$application_slug'
//    ) ;

    // =========================================================================
    // Init.
    // =========================================================================

    $ns = __NAMESPACE__ ;
    $fn = __FUNCTION__  ;

    // -------------------------------------------------------------------------

    $application_title = \greatKiwi_byFernTec_adSwapper_local_v0x1x211_stringUtils\to_title( $application_slug ) ;

    // -------------------------------------------------------------------------

    $indent          = ( $level * 2 ) - 0.5 ;

    $indent_plus_one = $indent + 1.8 ;

    $indent_plus_two = $indent + 3 ;

    // -------------------------------------------------------------------------

    if ( $application_title === '' ) {
        $application_header = '' ;

    } else {
        $application_header = <<<EOT
<h3 style="margin-left:{$indent}em">{$application_title}</h3>
EOT;

    }

    // -------------------------------------------------------------------------

    $all_orphaned_records_errors = '' ;

    // -------------------------------------------------------------------------

    $output_html = <<<EOT
<div style="background-color:#F0F0F0; margin-bottom:2em; padding:0.1em; width:98%">
{$application_header}
[**ORPHANED.RECORDS.ERRORS**]\n
EOT;

    // =========================================================================
    // For the "Plugin Plant" main page which lists all the apps, just list
    // the APP titles on the main page - and then the APP's datasets etc,
    // when that title is clicked...
    // =========================================================================

    // -------------------------------------------------------------------------
    // Here we should have (eg):-
    //
    //      $_GET = Array(
    //                  [page] => pluginPlant
    //                  )
    //
    //      $application_slug = ''
    //
    //      $application_path = ''
    //
    // if ALL applications are to be listed.
    //
    //      $_GET = Array(
    //                  [page]        => pluginPlant
    //                  [application] => xxx
    //                  )
    //
    //      $application_slug = 'validata'
    //
    //      $application_path = 'validata'
    //
    // if a SPECIFIC application is to be listed.
    // -------------------------------------------------------------------------

//pr( $_GET , '$_GET' ) ;
//pr( $application_slug , '$application_slug' ) ;
//pr( $application_path , '$application_path' ) ;

    if (    $_GET['page'] === 'pluginPlant'
            &&
            $application_slug !== ''
            &&
            ! array_key_exists( 'application' , $_GET )
        ) {

        // ---------------------------------------------------------------------

        if ( ! array_key_exists( 'plugin_plant_last_start_char' , $GLOBALS ) ) {
            $GLOBALS['plugin_plant_last_start_char'] = 'a' ;
        }

        // ---------------------------------------------------------------------

        $this_start_char = substr( $application_slug , 0 , 1 ) ;

        // ---------------------------------------------------------------------

        if ( $this_start_char === $GLOBALS['plugin_plant_last_start_char'] ) {
            $margin_top = '0' ;

        } else {
            $margin_top = '1em' ;

        }

        // ---------------------------------------------------------------------

        $GLOBALS['plugin_plant_last_start_char'] = $this_start_char ;

        // ---------------------------------------------------------------------

        $href = \untrailingslashit( \admin_url() ) . <<<EOT
?page={$_GET['page']}&application={$application_slug}
EOT;

        // ---------------------------------------------------------------------

        return <<<EOT
<p  style="margin-left:{$indent}em; margin-top:{$margin_top}; margin-bottom:0"
    ><a href="{$href}"
        style="text-decoration:none; font-size:117%; font-weight:bold"
        >{$application_title}</a></p>
EOT;

        // ---------------------------------------------------------------------

    }

    // -------------------------------------------------------------------------

    if (    $_GET['page'] === 'pluginPlant'
            &&
            $application_slug !== ''
            &&
            array_key_exists( 'application' , $_GET )
            &&
            $_GET['application'] !== $application_slug
        ) {
        return '' ;
    }

    // =========================================================================
    // HOME PAGE RAW MODE ?
    // =========================================================================

    $home_page_raw_mode_support_filespec = dirname( __FILE__ ) . '/home-page-raw-mode-support.php' ;

    // -------------------------------------------------------------------------

    if ( is_file( $home_page_raw_mode_support_filespec ) ) {

        // =====================================================================
        // HOME PAGE RAW MODE ON...
        // =====================================================================

        require_once( $home_page_raw_mode_support_filespec ) ;

        $question_home_page_raw_mode = TRUE ;

        $td_style = 'padding-right:3em' ;

        // ---------------------------------------------------------------------

    } else {

        // =====================================================================
        // HOME PAGE RAW MODE OFF...
        // =====================================================================

        $question_home_page_raw_mode = FALSE ;

        // ---------------------------------------------------------------------

    }

    // =========================================================================
    // List the application's DATASETS...
    // =========================================================================

    if ( count( $app_or_sub_apps_dataset_and_view_definitions_etc['dataset_definitions'] ) > 0 ) {

        // ---------------------------------------------------------------------

        if (    isset( $app_or_sub_apps_dataset_and_view_definitions_etc['app_data']['dataset_listing_order'] )
                &&
                is_array( $app_or_sub_apps_dataset_and_view_definitions_etc['app_data']['dataset_listing_order'] )
            ) {

            $dataset_slugs_to_list =
                $app_or_sub_apps_dataset_and_view_definitions_etc['app_data']['dataset_listing_order']
                ;

        } else {

            $dataset_slugs_to_list = array() ;

        }

//\greatKiwi_byFernTec_adSwapper_local_v0x1x211_testDebug\pr( $dataset_slugs_to_list , '$dataset_slugs_to_list' ) ;

        // ---------------------------------------------------------------------

        $dataset_slugs_defined = array_keys(
            $app_or_sub_apps_dataset_and_view_definitions_etc['dataset_definitions']
            ) ;

//\greatKiwi_byFernTec_adSwapper_local_v0x1x211_testDebug\pr( $dataset_slugs_defined , '$dataset_slugs_defined' ) ;

        // ---------------------------------------------------------------------

        foreach ( $dataset_slugs_to_list as $this_index => $this_dataset_slug ) {

            if ( ! in_array( $this_dataset_slug , $dataset_slugs_defined , TRUE ) ) {
                unset( $dataset_slugs_to_list[ $this_index ] ) ;
            }

        }

        // ---------------------------------------------------------------------

        $temp = array() ;

        // ---------------------------------------------------------------------

        foreach ( $dataset_slugs_defined as $this_dataset_slug ) {

            if ( ! in_array( $this_dataset_slug , $dataset_slugs_to_list , TRUE ) ) {
                $temp[] = $this_dataset_slug ;
            }

        }

        // -------------------------------------------------------------------------
        // bool natcasesort ( array &$array )
        // - - - - - - - - - - - - - - - - -
        // natcasesort() is a case insensitive version of natsort().
        //
        // This function implements a sort algorithm that orders alphanumeric
        // strings in the way a human being would while maintaining key/value
        // associations. This is described as a "natural ordering".
        //
        // PARAMETERS
        //
        //      array
        //          The input array.
        //
        // Returns TRUE on success or FALSE on failure.
        //
        // EXAMPLE
        //
        //      Standard sorting
        //      ----------------
        //      Array(
        //          [0] => IMG0.png
        //          [1] => IMG3.png
        //          [2] => img1.png
        //          [3] => img10.png
        //          [4] => img12.png
        //          [5] => img2.png
        //      )
        //
        //      Natural order sorting (case-insensitive)
        //      ----------------------------------------
        //      Array(
        //          [0] => IMG0.png
        //          [4] => img1.png
        //          [3] => img2.png
        //          [5] => IMG3.png
        //          [2] => img10.png
        //          [1] => img12.png
        //          )
        //
        // (PHP 4, PHP 5)
        // -------------------------------------------------------------------------

        natcasesort( $temp ) ;

        // ---------------------------------------------------------------------

        $dataset_slugs_to_list = array_merge( $dataset_slugs_to_list , $temp ) ;

        // ---------------------------------------------------------------------

        if ( count( $dataset_slugs_to_list ) > 0 ) {

            // -----------------------------------------------------------------

            if ( $question_home_page_raw_mode ) {

                // -------------------------------------------------------------

                $all_application_dataset_definitions =
                    $app_or_sub_apps_dataset_and_view_definitions_etc['dataset_definitions']
                    ;

                // -------------------------------------------------------------------------
                // load_and_initialise_array_storage(
                //      $all_application_dataset_definitions    ,
                //      $caller_apps_includes_dir
                //      )
                // - - - - - - - - - - - - - - - - - - - - - - -
                // RETURNS
                //      o   On SUCCESS
                //              TRUE
                //
                //      o   On FAILURE
                //              $error_message STRING
                // -------------------------------------------------------------------------

                $result = load_and_initialise_array_storage(
                                $all_application_dataset_definitions    ,
                                $caller_apps_includes_dir
                                ) ;

                // -------------------------------------------------------------

                if ( is_string( $result ) ) {
                    return array( $result ) ;
                }

                // -------------------------------------------------------------

            }

            // -----------------------------------------------------------------

            if ( $question_home_page_raw_mode ) {

                $output_html .= <<<EOT
<h3 style="margin-left:{$indent_plus_one}em; font-size:95%; color:#666666; margin-bottom:0; padding-bottom:0">Datasets...</h3>
<table  border="0"
        cellpadding="0"
        cellspacing="0"
        style="margin-left:{$indent_plus_two}em"
        >\n
EOT;

            } else {

                $output_html .= <<<EOT
<h3 style="margin-left:{$indent_plus_one}em; font-size:95%; color:#666666; margin-bottom:0; padding-bottom:0">Datasets...</h3>
<ul style="margin-left:{$indent_plus_two}em; margin-top:0; paddingtop:0">\n
EOT;

            }

            // -----------------------------------------------------------------

//\greatKiwi_byFernTec_adSwapper_local_v0x1x211_testDebug\pr( $dataset_slugs_to_list ) ;

            foreach ( $dataset_slugs_to_list as $dataset_slug ) {

                // -------------------------------------------------------------

                $selected_datasets_dmdd = $app_or_sub_apps_dataset_and_view_definitions_etc['dataset_definitions'][ $dataset_slug ] ;

                // -------------------------------------------------------------
                // Here we should have (eg):-
                //
                //      $selected_datasets_dmdd = Array(
                //          [dataset_slug]                      => projects
                //          [dataset_name_singular]             => project
                //          [dataset_name_plural]               => projects
                //          [dataset_title_singular]            => Project
                //          [dataset_title_plural]              => Projects
                //          [basepress_dataset_handle]          => Array(
                //              [nice_name]     => researchAssistant_byFernTec_projects
                //              [unique_key]    => d2562b23-3c20-4368-92c4-2b...0c9a66
                //              [version]       => 0.1
                //              )
                //          [dataset_records_table]             => Array(...)
                //          [zebra_form]                        => Array(...)
                //          [array_storage_record_structure]    => Array(...)
                //          [array_storage_key_field_slug]      => key
                //          )
                //
                // -------------------------------------------------------------

//pr( $selected_datasets_dmdd ) ;

                // =============================================================
                // Get the URL to "manage" the dataset with...
                // =============================================================

                if ( $question_front_end ) {

                    require_once( $caller_apps_includes_dir . '/url-utils.php' ) ;

                    // -------------------------------------------------------------------------
                    // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_urlUtils\
                    // get_query_adjusted_current_page_url(
                    //      $query_changes = array()        ,
                    //      $question_amp = FALSE           ,
                    //      $question_die_on_error = FALSE
                    //      ) ;
                    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                    // Attempts to retrieve the current page URL from $_SERVER.
                    //
                    // If successful, returns the URL with the query part adjusted as
                    // requested.
                    //
                    // RETURNS
                    //      o   On SUCCESS!
                    //          -----------
                    //          $query_adjusted_current_page_url STRING
                    //
                    //      o   On FAILURE!
                    //          -----------
                    //          If $question_die_on_error = TRUE
                    //              Doesn't return
                    //          If $question_die_on_error = FALSE
                    //              array( $error_message STRING )
                    // -------------------------------------------------------------------------

                    $query_changes = array(
                                        'action'        =>  'manage-dataset'                                                ,
                                        'application'   =>  $app_or_sub_apps_dataset_and_view_definitions_etc['app_path']   ,
                                        'dataset_slug'  =>  $dataset_slug
                                        ) ;

                    $question_amp = FALSE ;

                    $question_die_on_error = FALSE ;

                    $href = \greatKiwi_byFernTec_adSwapper_local_v0x1x211_urlUtils\get_query_adjusted_current_page_url(
                                $query_changes              ,
                                $question_amp               ,
                                $question_die_on_error
                                ) ;

                    if ( is_array( $href ) ) {
                        return $href ;
                    }

                } else {

                    $href = <<<EOT
?page={$_GET['page']}&action=manage-dataset&application={$app_or_sub_apps_dataset_and_view_definitions_etc['app_path']}&dataset_slug={$dataset_slug}
EOT;

                }

                // =============================================================
                // Get the stuff for the RAW MODE version...
                // =============================================================

                if ( $question_home_page_raw_mode ) {

                    // -------------------------------------------------------------------------
                    // \greatKiwi_byFernTec_pluginWorkshop_rawModeSupport\
                    // get_raw_mode_data_for_dataset(
                    //      $all_application_dataset_definitions    ,
                    //      $caller_apps_includes_dir               ,
                    //      $selected_datasets_dmdd                 ,
                    //      $dataset_slug                           ,
                    //      $question_front_end                     ,
                    //      $application_path
                    //      )
                    // - - - - - - - - - - - - - - - - - - - - - - -
                    // RETURNS
                    //      o   On SUCCESS
                    //              ARRAY(
                    //                  $number_dataset_records     INT
                    //                  $number_orphaned_records    INT | NULL (*)
                    //                  $orphaned_records_error     STRING
                    //                  $view_raw_url               STRING
                    //                  $export_raw_url             STRING
                    //                  $import_raw_url             STRING
                    //                  )
                    //
                    //          (*) $number_orphaned_records is NULL if $orphaned_records_error
                    //              is the non-empty string.
                    //
                    //      o   On FAILURE
                    //              $error_message STRING
                    // -------------------------------------------------------------------------

                    $result = \greatKiwi_byFernTec_pluginWorkshop_rawModeSupport\get_raw_mode_data_for_dataset(
                                    $all_application_dataset_definitions    ,
                                    $caller_apps_includes_dir               ,
                                    $selected_datasets_dmdd                 ,
                                    $dataset_slug                           ,
                                    $question_front_end                     ,
                                    $application_path
                                    ) ;

                    // ---------------------------------------------------------

                    if ( is_string( $result ) ) {
                        return array( $result ) ;
                    }

                    // ---------------------------------------------------------

                    list(
                        $number_dataset_records     ,
                        $number_orphaned_records    ,
                        $orphaned_records_error     ,
                        $view_raw_url               ,
                        $export_raw_url             ,
                        $import_raw_url
                        ) = $result ;

                    // ---------------------------------------------------------

                    if ( $number_dataset_records == 0 ) {
                        $number_records = 'NO&nbsp;records' ;

                    } else {
                        $number_records = <<<EOT
<b>{$number_dataset_records}</b>&nbsp;total&nbsp;records
EOT;

                    }

                    // ---------------------------------------------------------

                    if ( $orphaned_records_error !== '' ) {

                        $all_orphaned_records_errors .= nl2br( $orphaned_records_error ) ;

                        $number_orphaned_records = <<<EOT
<span style="color:#AA0000; font-weight:bold">???</span>
EOT;

                    } else {

                        if ( $number_orphaned_records === 0 ) {
                            $number_orphaned_records = 'no&nbsp;orphaned&nbsp;records' ;

                        } else {
                            $number_orphaned_records = <<<EOT
<span style="color:#AA0000; font-weight:bold">{$number_orphaned_records}&nbsp;orphaned&nbsp;records</span>
EOT;

                        }

                    }

                    // ---------------------------------------------------------

                }

                // =============================================================
                // Append the dataset to the listing...
                // =============================================================

                if ( $question_home_page_raw_mode ) {

                    // ---------------------------------------------------------

                    $output_html .= <<<EOT
<tr>
    <td style="{$td_style}"><a
        href="{$href}"
        style="text-decoration:none"
        ><b>{$selected_datasets_dmdd['dataset_title_plural']}</b></a></td>
    <td style="{$td_style}">{$number_records}</td>
    <td style="{$td_style}">{$number_orphaned_records}</td>
EOT;

                    // ---------------------------------------------------------

                    if ( $view_raw_url === '' ) {

                        $output_html .= <<<EOT
    <td style="{$td_style}"><a  href="javascript:void()"
                                onclick="mysql_table()"
                                style="text-decoration:line-through; color:#666666"
                                >view raw</a></td>
EOT;

                    } else {

                        $output_html .= <<<EOT
    <td style="{$td_style}"><a  href="{$view_raw_url}"
                                style="text-decoration:none"
                                >view raw</a></td>
EOT;

                    }

                    // ---------------------------------------------------------

                    if ( $export_raw_url === '' ) {

                        $output_html .= <<<EOT
    <td style="{$td_style}"><a  href="javascript:void()"
                                onclick="mysql_table()"
                                style="text-decoration:line-through; color:#666666"
                                >export raw</a></td>
EOT;

                    } else {

                        $output_html .= <<<EOT
    <td style="{$td_style}"><a  href="{$export_raw_url}"
                                style="text-decoration:none"
                                >export raw</a></td>
EOT;

                    }

                    // ---------------------------------------------------------

                    if ( $import_raw_url === '' ) {

                        $output_html .= <<<EOT
    <td style="{$td_style}"><a  href="javascript:void()"
                                onclick="mysql_table()"
                                style="text-decoration:line-through; color:#666666"
                                >import raw</a></td>
EOT;

                    } else {

                        $output_html .= <<<EOT
    <td style="{$td_style}"><a  href="{$import_raw_url}"
                                style="text-decoration:none"
                                >import raw</a></td>
EOT;

                    }

                    // ---------------------------------------------------------

                    $output_html .= <<<EOT
</tr>\n
EOT;

                    // ---------------------------------------------------------

                } else {

                    // ---------------------------------------------------------

                    $output_html .= <<<EOT
<li style="margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0"><a
    href="{$href}"
    style="text-decoration:none"
    >{$selected_datasets_dmdd['dataset_title_plural']}</a></li>\n
EOT;

                    // ---------------------------------------------------------

                }

                // =============================================================
                // Append the PAGE VARIANTS (if any)...
                // =============================================================

                if (    array_key_exists(
                            'dataset_records_table'     ,
                            $selected_datasets_dmdd
                            )
                        &&
                        is_array( $selected_datasets_dmdd['dataset_records_table'] )
                        &&
                        array_key_exists(
                            'page_variants'                                     ,
                            $selected_datasets_dmdd['dataset_records_table']
                            )
                        &&
                        is_array( $selected_datasets_dmdd['dataset_records_table']['page_variants'] )
                        &&
                        count( $selected_datasets_dmdd['dataset_records_table']['page_variants'] ) > 0
                    ) {

                    // ---------------------------------------------------------

                    require_once( $caller_apps_includes_dir . '/dataset-manager/get-dataset-urls.php' ) ;

                    // ---------------------------------------------------------

                    foreach ( $selected_datasets_dmdd['dataset_records_table']['page_variants'] as $pv_slug => $pv_details ) {

                        // -------------------------------------------------------------------------
                        // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_standardDatasetManager\get_manage_dataset_url(
                        //      $caller_apps_includes_dir   ,
                        //      $question_front_end         ,
                        //      $dataset_slug = NULL        ,
                        //      $page_variant = NULL
                        //      )
                        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                        // Returns the "manage-dataset" URL.
                        //
                        // If $dataset_slug is NULL, then we use:-
                        //      $_GET['dataset_slug']
                        //
                        // If a STRING $page_variant slug is supplied, it's the CALLER's job to
                        // ensure that it's defined.  In:-
                        //      $selected_datasets_dmdd['dataset_records_table']['page_variants']
                        //
                        // RETURNS
                        //      o   On SUCCESS!
                        //          - - - - - -
                        //          STRING $url
                        //
                        //      o   On FAILURE!
                        //          - - - - - -
                        //          ARRAY( $error_message STRING )
                        // -------------------------------------------------------------------------

                        $pv_url =
                            \greatKiwi_byFernTec_adSwapper_local_v0x1x211_standardDatasetManager\get_manage_dataset_url(
                                $caller_apps_includes_dir   ,
                                $question_front_end         ,
                                $dataset_slug               ,
                                $pv_slug
                                ) ;

                        // -----------------------------------------------------

                        if ( is_array( $pv_url ) ) {
                            return $pv_url ;
                        }

                        // -----------------------------------------------------

                        if (    array_key_exists(
                                    'title'         ,
                                    $pv_details
                                    )
                                &&
                                is_string( $pv_details['title'] )
                                &&
                                trim( $pv_details['title'] ) !== ''
                            ) {
                            $pv_title = $pv_details['title'] ;

                        } else {

                            $pv_title =
                                \greatKiwi_byFernTec_adSwapper_local_v0x1x211_stringUtils\to_title(
                                    $pv_slug
                                    ) ;

                        }

                        // -----------------------------------------------------

                        if ( $question_home_page_raw_mode ) {

                            // -------------------------------------------------

                            $output_html .= <<<EOT
<tr>
    <td style="{$td_style}">&nbsp;&nbsp;&bull;&nbsp;&nbsp;<a
        href="{$pv_url}"
        style="text-decoration:none"
        >{$pv_title}</a></td>
    <td style="{$td_style}">&nbsp;</td>
    <td style="{$td_style}">&nbsp;</td>
    <td style="{$td_style}">&nbsp;</td>
    <td style="{$td_style}">&nbsp;</td>
    <td style="{$td_style}">&nbsp;</td>
</tr>\n
EOT;

                            // -------------------------------------------------

                        } else {

                            // -------------------------------------------------

                            $output_html .= <<<EOT
<li style="margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0"><a
    href="{$pv_url}"
    style="text-decoration:none; margin-left:2em"
    >{$pv_title}</a></li>\n
EOT;

                            // -------------------------------------------------

                        }

                        // -----------------------------------------------------

                    }

                    // ---------------------------------------------------------

                }   //  END Page Variants

                // =============================================================
                // Repeat with the NEXT DATASET (if there is one)...
                // =============================================================

            }

            // -----------------------------------------------------------------

            if ( $question_home_page_raw_mode ) {

                $output_html .= <<<EOT
</table>
<script type="text/javascript">
    function mysql_table() {
        var msg = 'This dataset\\'s data is stored in a MySQL TABLE.\\n\\nPlease view/edit that table/data with (eg);\\n\\t PHPMyAdmin\\n\\n' ;
        alert( msg ) ;
    }
</script>
EOT;

            } else {

                $output_html .= <<<EOT
</ul>\n
EOT;

            }

            // -----------------------------------------------------------------

        }

        // ---------------------------------------------------------------------

    }

    // -------------------------------------------------------------------------

    if ( $all_orphaned_records_errors === '' ) {

        $output_html = str_replace(
                            '[**ORPHANED.RECORDS.ERRORS**]'     ,
                            ''                                  ,
                            $output_html
                            ) ;

    } else {

        $all_orphaned_records_errors = <<<EOT
<div style="background-color:#FFF0F0; padding:1em; bprder:2px solid #AA0000">
    {$all_orphaned_records_errors}
</div>
EOT;

        $output_html = str_replace(
                            '[**ORPHANED.RECORDS.ERRORS**]'     ,
                            $all_orphaned_records_errors        ,
                            $output_html
                            ) ;

    }

    // =========================================================================
    // List the application's VIEWS...
    // =========================================================================

    if ( count( $app_or_sub_apps_dataset_and_view_definitions_etc['views'] ) > 0 ) {

        // ---------------------------------------------------------------------

        $output_html .= <<<EOT
<h3 style="margin-left:{$indent_plus_one}em; font-size:95%; color:#666666; margin-bottom:0; padding-bottom:0">Views...</h3>
<ul style="margin-left:{$indent_plus_two}em; margin-top:0; padding-top:0">\n
EOT;

        // ---------------------------------------------------------------------

        foreach ( $app_or_sub_apps_dataset_and_view_definitions_etc['views'] as $view_slug => $view_details ) {

            // -----------------------------------------------------------------
            // Here we should have (eg):-
            //
            //      $view_details = Array(
            //          [view_slug]     =>  url_tree
            //          [view_title]    =>  URL Tree
            //          ...
            //          )
            //
            // -----------------------------------------------------------------

//pr( $view_details ) ;

            // =================================================================
            // Get the URL to "show" the view with...
            // =================================================================

            if ( $question_front_end ) {

                require_once( $caller_apps_includes_dir . '/url-utils.php' ) ;

                // -------------------------------------------------------------------------
                // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_urlUtils\
                // get_query_adjusted_current_page_url(
                //      $query_changes = array()        ,
                //      $question_amp = FALSE           ,
                //      $question_die_on_error = FALSE
                //      ) ;
                // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                // Attempts to retrieve the current page URL from $_SERVER.
                //
                // If successful, returns the URL with the query part adjusted as
                // requested.
                //
                // RETURNS
                //      o   On SUCCESS!
                //          -----------
                //          $query_adjusted_current_page_url STRING
                //
                //      o   On FAILURE!
                //          -----------
                //          If $question_die_on_error = TRUE
                //              Doesn't return
                //          If $question_die_on_error = FALSE
                //              array( $error_message STRING )
                // -------------------------------------------------------------------------

                $query_changes = array(
                                    'action'        =>  'show-view'                                                     ,
                                    'application'   =>  $app_or_sub_apps_dataset_and_view_definitions_etc['app_path']     ,
                                    'view_slug'     =>  $view_slug
                                    ) ;

                $question_amp = FALSE ;

                $question_die_on_error = FALSE ;

                $href = \greatKiwi_byFernTec_adSwapper_local_v0x1x211_urlUtils\get_query_adjusted_current_page_url(
                            $query_changes              ,
                            $question_amp               ,
                            $question_die_on_error
                            ) ;

                if ( is_array( $href ) ) {
                    return $href ;
                }

            } else {

                $href = <<<EOT
?page={$_GET['page']}&action=show-view&application={$app_or_sub_apps_dataset_and_view_definitions_etc['app_path']}&view_slug={$view_slug}
EOT;

            }

            // =================================================================
            // Append the view to the listing...
            // =================================================================

            if ( isset( $view_details['view_title'] ) ) {
                $view_title = $view_details['view_title'] ;

            } else {
                $view_title = \greatKiwi_byFernTec_adSwapper_local_v0x1x211_stringUtils\to_title( $view_slug ) ;

            }

            // -----------------------------------------------------------------

            $output_html .= <<<EOT
<li style="margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0"><a
    href="{$href}"
    style="text-decoration:none"
    ><b>{$view_title}</b></a></li>\n
EOT;

            // =================================================================
            // Repeat with the NEXT VIEW (if there is one)...
            // =================================================================

        }

        // ---------------------------------------------------------------------

        $output_html .= <<<EOT
</ul>\n
EOT;

        // ---------------------------------------------------------------------

    }

    // =========================================================================
    // List the application's CUSTOM PAGES (if it has any)...
    // =========================================================================

    if ( count( $app_or_sub_apps_dataset_and_view_definitions_etc['custom_pages'] ) > 0 ) {

        // ---------------------------------------------------------------------

        $output_html .= <<<EOT
<h3 style="margin-left:{$indent_plus_one}em; font-size:95%; color:#666666; margin-bottom:0; padding-bottom:0">Custom Pages...</h3>
<ul style="margin-left:{$indent_plus_two}em; margin-top:0; padding-top:0">\n
EOT;

        // ---------------------------------------------------------------------

        foreach ( $app_or_sub_apps_dataset_and_view_definitions_etc['custom_pages'] as $custom_page_slug => $custom_page_details ) {

            // -----------------------------------------------------------------
            // Here we should have (eg):-
            //
            //      $custom_page_details = Array(
            //          [menu_title]            => Export Pages
            //          [general_title]         => Export Pages
            //          [dirspec]               => /opt/.../custom.pages/export-pages.cp
            //          [page_display_filespec] => /opt/.../custom.pages/export-pages.cp/page-display-file.php
            //          [page_data_filespec]    => /opt/.../custom.pages/export-pages.cp/page-data.php
            //          [page_data]             => Array(
            //                                          [menu_title] => Export Pages
            //                                          [general_title] => Export Pages
            //                                          )
            //          )
            //
            // -----------------------------------------------------------------

//\greatKiwi_byFernTec_adSwapper_local_v0x1x211_testDebug\pr( $custom_page_details ) ;

            // =================================================================
            // Get the URL to "show" the custom page with...
            // =================================================================

            if ( $question_front_end ) {

                // -------------------------------------------------------------

                require_once( $caller_apps_includes_dir . '/url-utils.php' ) ;

                // -------------------------------------------------------------------------
                // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_urlUtils\
                // get_query_adjusted_current_page_url(
                //      $query_changes = array()        ,
                //      $question_amp = FALSE           ,
                //      $question_die_on_error = FALSE
                //      ) ;
                // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                // Attempts to retrieve the current page URL from $_SERVER.
                //
                // If successful, returns the URL with the query part adjusted as
                // requested.
                //
                // RETURNS
                //      o   On SUCCESS!
                //          -----------
                //          $query_adjusted_current_page_url STRING
                //
                //      o   On FAILURE!
                //          -----------
                //          If $question_die_on_error = TRUE
                //              Doesn't return
                //          If $question_die_on_error = FALSE
                //              array( $error_message STRING )
                // -------------------------------------------------------------------------

                $query_changes = array(
                                    'action'        =>  'custom-page'                                                     ,
                                    'application'   =>  $app_or_sub_apps_dataset_and_view_definitions_etc['app_path']     ,
                                    'custom_page'   =>  $custom_page_slug
                                    ) ;

                $question_amp = FALSE ;

                $question_die_on_error = FALSE ;

                $href = \greatKiwi_byFernTec_adSwapper_local_v0x1x211_urlUtils\get_query_adjusted_current_page_url(
                            $query_changes              ,
                            $question_amp               ,
                            $question_die_on_error
                            ) ;

                if ( is_array( $href ) ) {
                    return $href ;
                }

                // -------------------------------------------------------------

            } else {

                // -------------------------------------------------------------

                $href = \untrailingslashit( \admin_url() ) . <<<EOT
/admin.php?page={$_GET['page']}&action=custom-page&application={$app_or_sub_apps_dataset_and_view_definitions_etc['app_path']}&custom_page={$custom_page_slug}
EOT;

                // -------------------------------------------------------------

            }

            // =================================================================
            // Append the custom_page to the listing...
            // =================================================================

            if (    array_key_exists( 'menu_title' , $custom_page_details )
                    &&
                    is_string( $custom_page_details['menu_title'] )
                    &&
                    trim( $custom_page_details['menu_title'] ) !== ''
                ) {
                $custom_page_title = $custom_page_details['menu_title'] ;

            } elseif (  array_key_exists( 'general_title' , $custom_page_details )
                        &&
                        is_string( $custom_page_details['general_title'] )
                        &&
                        trim( $custom_page_details['general_title'] ) !== ''
                ) {
                $custom_page_title = $custom_page_details['general_title'] ;

            } else {
                $custom_page_title =
                    \greatKiwi_byFernTec_adSwapper_local_v0x1x211_stringUtils\to_title(
                        $custom_page_slug
                        ) ;

            }

            // -----------------------------------------------------------------

            $output_html .= <<<EOT
<li style="margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0"><a
    href="{$href}"
    style="text-decoration:none"
    ><b>{$custom_page_title}</b></a></li>\n
EOT;

            // =================================================================
            // Repeat with the NEXT CUSTOM PAGE (if there is one)...
            // =================================================================

        }

        // ---------------------------------------------------------------------

        $output_html .= <<<EOT
</ul>\n
EOT;

        // ---------------------------------------------------------------------

    }

    // =========================================================================
    // Add the MISC stuff...
    // =========================================================================

    // -------------------------------------------------------------------------
    // Link to CUSTOM HOME PAGE...
    // -------------------------------------------------------------------------

    if (    array_key_exists( 'application' , $_GET )
            &&
            $_GET['application'] === $application_slug
        ) {

//echo '<br />' , $_GET['application'] ;

        // -------------------------------------------------------------------------
        // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_appsAPI\
        // get_core_plugapp_dirs(
        //      $path_in_plugin         ,
        //      $app_handle = NULL
        //      )
        // - - - - - - - - - - - - - - -
        // Returns the dirspecs of the main dirs used in a given app.  Ie:-
        //
        //      array(
        //          'plugin_root_dir'                   =>  "xxx"   ,
        //          'plugins_includes_dir'              =>  "xxx"   ,
        //          'plugins_app_defs_dir'              =>  "xxx"   ,
        //          'dataset_manager_includes_dir'      =>  "xxx"   ,   //  (1)
        //          'apps_dot_app_dir'                  =>  "xxx"   ,   //  (2)
        //          'apps_plugin_stuff_dir'             =>  "xxx"       //  (3)
        //          'custom_pages_dir'                  =>  "xxx"       //  (4)
        //          )
        //
        //      (1) This is where most of the "Dataset Manager" includes files
        //          are stored.
        //
        //      (2) If $app_handle === NULL, the returned 'apps_dot_app_dir'
        //          is NULL too.
        //
        //      (3) If $app_handle === NULL, the returned 'apps_plugin_stuff_dir'
        //          is NULL too.
        //
        //      (4) If $app_handle === NULL, the returned 'custom_pages_dir'
        //          is NULL too.
        //
        // ---
        //
        // $path_in_plugin should be a file, directory or link path in the
        // plugin (or "app") from which this function is called.  Typically,
        // one uses __FILE__ for this purpose.  Eg:-
        //
        //      \greatKiwi_byFernTec_adSwapper_local_v0x1x211_appsAPI\get_single_app_defs_root_dir( __FILE__ ) ;
        //
        // ---
        //
        // $app_handle should be either:-
        //
        //      o   A single "app slug" - eg; "research-assistant" - as a
        //          STRING.  For which the returned dirspec might be (eg):-
        //
        //              /home/joe/.../plugins/some-plugin/app-defs/research-assistant.app
        //
        // Or:-
        //
        //      o   An array of (nested) app slugs.  Eg:-
        //
        //              array(
        //                  'some-app'          ,
        //                  'child-app'         ,
        //                  'grandchild-app'
        //                  [...]
        //                  )
        //
        //          For which the returned dirspec might be (eg):-
        //
        //              /home/joe/.../plugins/some-plugin/app-defs/some-app.app/child-app.app/grandchild-app.app
        //
        // Exits with an error message if the directory can't be returned (eg;
        // doesn't exist).
        //
        // NOTE!
        // -----
        // These "apps" and "datasets" (etc) are typically defined in a directory
        // tree structure like (eg):-
        //
        //      /plugins/this-plugin/
        //      +-- app-defs/
        //      |   +-- some-app.app/
        //      |   |   +-- child-app.app/
        //      |   |       +-- grandchild-app.app
        //      |   |           +-- etc...
        //      |   +-- another-app.app/
        //      |       +-- ...
        //      +-- includes/
        //      +-- js/
        //      +-- admin/
        //      +-- remote/
        //      +-- ...etc...
        //      +-- this-plugin.php
        //      +-- ...etc...
        //
        // -------------------------------------------------------------------------

        $path_in_plugin = __FILE__ ;

        $app_handle = $_GET['application'] ;

        $core_plugapp_dirs =
            \greatKiwi_byFernTec_adSwapper_local_v0x1x211_appsAPI\get_core_plugapp_dirs(
                $path_in_plugin     ,
                $app_handle
                ) ;

        // ---------------------------------------------------------------------

        $custom_home_page_filespec =
            $core_plugapp_dirs['apps_plugin_stuff_dir'] .
            '/admin/custom-home-page.php'
            ;

//echo '<br />' , $custom_home_page_filespec ;

        // ---------------------------------------------------------------------

        if ( is_file( $custom_home_page_filespec ) ) {

            // -----------------------------------------------------------------

            require_once( $custom_home_page_filespec ) ;

            // -----------------------------------------------------------------

            $custom_home_page_function_name =
                '\\greatKiwi_byFernTec_adSwapper_local_v0x1x211_customHomePage\\custom_home_page'
                ;

//echo '<br />' , $custom_home_page_function_name ;

            // -----------------------------------------------------------------

            if ( function_exists( $custom_home_page_function_name ) ) {

                // -------------------------------------------------------------

                require_once( $caller_apps_includes_dir . '/url-utils.php' ) ;

                // -------------------------------------------------------------------------
                // \greatKiwi_byFernTec_adSwapper_local_v0x1x211_urlUtils\
                // get_query_adjusted_current_page_url(
                //      $query_changes = array()        ,
                //      $question_amp = FALSE           ,
                //      $question_die_on_error = FALSE
                //      ) ;
                // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                // Attempts to retrieve the current page URL from $_SERVER.
                //
                // If successful, returns the URL with the query part adjusted as
                // requested.
                //
                // RETURNS
                //      o   On SUCCESS!
                //          -----------
                //          $query_adjusted_current_page_url STRING
                //
                //      o   On FAILURE!
                //          -----------
                //          If $question_die_on_error = TRUE
                //              Doesn't return
                //          If $question_die_on_error = FALSE
                //              array( $error_message STRING )
                // -------------------------------------------------------------------------

                $query_changes = array(
                                    'force_chp'     =>  'true'
                                    ) ;

                $question_amp = FALSE ;

                $question_die_on_error = FALSE ;

                $url =
                    \greatKiwi_byFernTec_adSwapper_local_v0x1x211_urlUtils\get_query_adjusted_current_page_url(
                        $query_changes              ,
                        $question_amp               ,
                        $question_die_on_error
                        ) ;

                if ( is_array( $url ) ) {
                    return $url ;
                }

                // -------------------------------------------------------------

                $output_html .= <<<EOT
<h3 style="margin-left:{$indent_plus_one}em; font-size:95%; color:#666666; margin-bottom:0; padding-bottom:0">Misc...</h3>
<ul style="margin-left:{$indent_plus_two}em; margin-top:0; padding-top:0">\n
    <li style="margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0"><a
        href="{$url}"
        style="text-decoration:none"
        ><b>Custom Home Page</b></a></li>
</ul>\n
EOT;

                // -------------------------------------------------------------

            }

            // -----------------------------------------------------------------

        }

        // ---------------------------------------------------------------------

    }

    // =========================================================================
    // List the application's SUB-APPS...
    // =========================================================================

    foreach ( $app_or_sub_apps_dataset_and_view_definitions_etc['sub_apps'] as $sub_application_slug => $sub_applications_details ) {

        // -------------------------------------------------------------------------
        // Here we should have (eg):-
        //
        //      $sub_applications_details = Array(
        //
        //          [dirspec]             => /opt/lampp/htdocs/.../research-assistant.app
        //
        //          [sub_apps]            => Array()
        //
        //          [dataset_definitions] => Array(
        //
        //              [projects] => Array(
        //                  [dataset_slug]                      => projects
        //                  [dataset_name_singular]             => project
        //                  [dataset_name_plural]               => projects
        //                  [dataset_title_singular]            => Project
        //                  [dataset_title_plural]              => Projects
        //                  [basepress_dataset_handle]          => Array(
        //                      [nice_name]     => researchAssistant_byFernTec_projects
        //                      [unique_key]    => d2562b23-3c20-4368-92c4-2b...0c9a66
        //                      [version]       => 0.1
        //                      )
        //                  [dataset_records_table]             => Array(...)
        //                  [zebra_form]                        => Array(...)
        //                  [array_storage_record_structure]    => Array(...)
        //                  [array_storage_key_field_slug]      => key
        //                  )
        //
        //              ...
        //
        //              )
        //
        //          )
        //
        // -------------------------------------------------------------------------

//pr( $sub_application_details ) ;

        // -------------------------------------------------------------------------
        // list_applications_and_their_datasets_and_views_etc(
        //      $caller_app_slash_plugins_global_namespace          ,
        //      $caller_apps_includes_dir                           ,
        //      $question_front_end                                 ,
        //      $app_or_sub_apps_dataset_and_view_definitions_etc   ,
        //      $application_slug                                   ,
        //      $application_path                                   ,
        //      $level
        //      )
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        // RETURNS
        //      o   On SUCCESS!
        //          - - - - - -
        //          $applications_and_datasets_html STRING
        //
        //      o   On FAILURE!
        //          - - - - - -
        //          array( $error_message STRING )
        // -------------------------------------------------------------------------

        if ( $application_path === '' ) {
            $new_application_path = $sub_application_slug ;

        } else {
            $new_application_path = $application_path . '/' . $sub_application_slug ;

        }

        // ---------------------------------------------------------------------

        $result = list_applications_and_their_datasets_and_views_etc(
                        $caller_app_slash_plugins_global_namespace      ,
                        $caller_apps_includes_dir                       ,
                        $question_front_end                             ,
                        $sub_applications_details                       ,
                        $sub_application_slug                           ,
                        $new_application_path                           ,
                        $level + 1
                        ) ;

        // ---------------------------------------------------------------------

        if ( is_array( $result ) ) {
            return $result ;
        }

        // ---------------------------------------------------------------------

        $output_html .= $result ;

        // ---------------------------------------------------------------------

    }

    // -------------------------------------------------------------------------

    $output_html .= <<<EOT
</div>\n
EOT;

    // =========================================================================
    // SUCCESS!
    // =========================================================================

    return $output_html ;

    // =========================================================================
    // That's that!
    // =========================================================================

}

// =============================================================================
// That's that!
// =============================================================================
