<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = THEME_OPT;

if ( !function_exists( "redux_add_metaboxes" ) ):
	function redux_add_metaboxes($metaboxes) {

        $homepage_options = array();

        $homepage_fields1 = array(
		'title' => 'Перший розділ сторінки',
		'icon_class'    => 'icon-large',
		'icon'          => 'el-icon-list-alt',
		'fields' => array(
			array(
				'id'     => 'slick-slider-meta',
                'title'       => __('Слайдер ',THEME_OPT),
				'type'   => 'text',
				'description'  => __( 'Шорткод слайдеру')
			)
		)
	);
        $homepage_fields2 = array(
            'title' => 'Другий розділ сторінки',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'link-department',
                    'type'   => 'text',
                    'description'  => __( 'посилання на сторінку органи самоврядування'),
                    'default' => '/'
                ),
                array(
                    'id'     => 'link-conditions',
                    'type'   => 'text',
                    'description'  => __( 'посилання на сторінку умови вступу до школи'),
                    'default' => '/'
                ),
                array(
                    'id'     => 'link-rewards',
                    'type'   => 'text',
                    'description'  => __( 'посилання на сторінку наші досягнення'),
                    'default' => '/'
                ),
                array(
                    'id'     => 'link-video',
                    'type'   => 'text',
                    'description'  => __( 'посилання на сторінку відеотека школи'),
                    'default' => '/'
                ),
                array(
                    'id'     => 'link-for-parent',
                    'type'   => 'text',
                    'description'  => __( 'посилання на сторінку рекомендації батькам'),
                    'default' => '/'
                ),

            )
        );
        $homepage_fields3 = array(
            'title' => 'Третій розділ сторінки',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'front-secont-string-head',
                    'type'   => 'text',
                    'description'  => __( 'Залоговок')
                ),
                array(
                    'id'     => 'front-image',
                    'type'   => 'media',
                    'title'  => __( 'Зображення',THEME_OPT)
                ),
                array(
                    'id'     => 'front-content',
                    'type'   => 'editor',
                    'title'  => __( 'Зміст')
                ),
                array(
                    'id'     => 'link-front',
                    'type'   => 'text',
                    'title'  => __( 'посилання')
                ),

            )
        );
        $homepage_fields4 = array(
            'title' => 'Хто може стати нашим учнем',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id' => '1-section-start',
                    'type' => 'section',
                    'subtitle' => __('Контент по центру', THEME_OPT),
                    'indent' => true
                ),
                array(
                    'id'     => 'left-head-text',
                    'type'   => 'editor',
                    'title'  => __( 'Заголовок', THEME_OPT)
                ),
                array(
                    'id'     => 'left-content-text',
                    'type'   => 'editor',
                    'title'  => __( 'Зміст', THEME_OPT)
                ),
                array(
                    'id'     => 'left-link',
                    'type'   => 'text',
                    'title'  => __( 'Посилання', THEME_OPT)
                ),
                array(
                    'id'     => '1-section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),


            )
        );
        $homepage_fields5 = array(
            'title' => 'Мапа',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(

                array(
                    'id'     => 'bottom-address',
                    'type'   => 'editor',
                    'title'  => __( 'Адреса', THEME_OPT)
                ),
                array(
                    'id'     => 'bottom-phone',
                    'type'   => 'editor',
                    'title'  => __( 'Телефон та інше', THEME_OPT)
                )
            )
        );


	$homepage_options[] = $homepage_fields1;
	$homepage_options[] = $homepage_fields2;
	$homepage_options[] = $homepage_fields3;
	$homepage_options[] = $homepage_fields4;

	//page team
    $the_team_options = array();

       $the_team_fields = array(
            'title' => 'Педагогічний колектив',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(

                array(
                    'id'       => 'director-photo',
                    'type'     => 'media',
                    'title'    => __('Фото директора', THEME_OPT),
                ),
                array(
                    'id'       => 'director-post',
                    'type'     => 'text',
                    'title'    => __('Посада', THEME_OPT),
                ),
                array(
                    'id'       => 'director-name',
                    'type'     => 'text',
                    'title'    => __('ПІБ', THEME_OPT),
                ),
                array(
                    'id'       => 'director-info',
                    'type'     => 'editor',
                    'title'    => __('інфо', THEME_OPT),
                ),
                array(
                    'id'       => 'director-phone',
                    'type'     => 'text',
                    'title'    => __('телефон', THEME_OPT),
                ),
                array(
                    'id'               => 'page-team-persons',
                    'type'             => 'repeatable_list',
                    'accordion'      => true,
                    'title'            => __('Колектив:', THEME_OPT),
                    'add_button'     => __( 'Додати особу', THEME_OPT),
                    'remove_button'  => __( 'Видалити особу', THEME_OPT),
                    'fields'         => array(
                        array(
                            'id'       => 'person-photo',
                            'type'     => 'media',
                            'title'    => __('Фото особи', THEME_OPT),
                        ),
                        array(
                            'id'       => 'person-post',
                            'type'     => 'text',
                            'title'    => __('Посада', THEME_OPT),
                        ),
                        array(
                            'id'       => 'person-name',
                            'type'     => 'text',
                            'title'    => __('ПІБ', THEME_OPT),
                        ),
                        array(
                            'id'       => 'preson-info',
                            'type'     => 'editor',
                            'title'    => __('інфо', THEME_OPT),
                        ),
                        array(
                            'id'       => 'preson-phone',
                            'type'     => 'text',
                            'title'    => __('телефон', THEME_OPT),
                        ),

                    )
                ),
                array(
                    'id'       => 'team-photo',
                    'type'     => 'media',
                    'title'    => __('Фото колективу', THEME_OPT),
                ),
                array(
                    'id'       => 'team-info',
                    'type'     => 'editor',
                    'title'    => __('зміст', THEME_OPT),
                ),

            )
        );

    $the_team_options[] = $the_team_fields;
    //page rewards
    $rewards_options = array();

        $rewards_fields = array(
            'title' => 'Сторінка досягнень',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'               => 'page-rewards-list',
                    'type'             => 'repeatable_list',
                    'accordion'      => true,
                    'title'            => __('Нагороди:', THEME_OPT),
                    'add_button'     => __( 'Додати нагороду', THEME_OPT),
                    'remove_button'  => __( 'Видалити нагороду', THEME_OPT),
                    'fields'         => array(
                        array(
                            'id'       => 'rewards-photo',
                            'type'     => 'media',
                            'title'    => __('Зображення', THEME_OPT),
                        ),
                        array(
                            'id'       => 'rewards-title',
                            'type'     => 'text',
                            'title'    => __('заголовок', THEME_OPT),
                             ),
                        array(
                            'id'       => 'rewards-content',
                            'type'     => 'editor',
                            'title'    => __('зміст', THEME_OPT),
                             )
                         )
                    ),
                )

        );
        $rewards_options[] = $rewards_fields;

     //page videos
    $videos_options = array();

        $videos_fields = array(
            'title' => 'Сторінка відеотеки',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'=>'multi-text-youtube',
                    'type' => 'multi_text',
                    'title' => __('Завантаження деколькох відео', THEME_OPT),
                    'validate' => 'color',
                    'subtitle' => __('Якщо бажаєте видали то натисніть на посилання поруч remove', THEME_OPT),
                    'desc' => __('Адреса посилання відео', THEME_OPT)
                )
            )


        );
        $videos_options[] = $videos_fields;

     $contactpage_options = array();

        $contactpage_fields = array(
            'title' => 'Зображення',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(

                array(
                    'id'     => 'contact-map',
                    'type'   => 'media',
                    'title'  => __( 'Мапа, зображення',THEME_OPT)
                ),
                array(
                    'id'     => 'contact-img1',
                    'type'   => 'media',
                    'title'  => __( 'Зображення1 ліве',THEME_OPT)
                ),
                array(
                    'id'     => 'contact-img2',
                    'type'   => 'media',
                    'title'  => __( 'Зображення2 праве',THEME_OPT)
                ),
                )

        );

        $contactpage_options[] = $contactpage_fields;

        $for_parents_options = array();

        $for_parents_fields = array(
            'title' => 'Розділ для заповнення',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'     => 'parents-ped-img',
                    'type'   => 'media',
                    'title'  => __( 'Головне зображення',THEME_OPT)
                ),
                array(
                    'id'               => 'for-parents-list',
                    'type'             => 'repeatable_list',
                    'accordion'        => true,
                    'title'            => __('Перелік:', THEME_OPT),
                    'add_button'     => __( 'Додати нотатки', THEME_OPT),
                    'remove_button'  => __( 'Видалити нотатки', THEME_OPT),
                    'fields'         => array(
                        array(
                            'id'       => 'head-text',
                            'type'     => 'text',
                            'title'    => __('Заголовок', THEME_OPT),
                        ),
                        array(
                            'id'       => 'content',
                            'type'     => 'editor',
                            'title'    => __('Наповнення', THEME_OPT),
                        )
                    )
                )
            )

        );

        $for_parents_options[] = $for_parents_fields;

        $library_options = array();

        $library_fields = array(
            'title' => 'Розділ для бібліотеки',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(
                array(
                    'id'               => 'library-list',
                    'type'             => 'repeatable_list',
                    'accordion'      => true,
                    'title'            => __('Посилання:', THEME_OPT),
                    'add_button'     => __( 'Додати посилання', THEME_OPT),
                    'remove_button'  => __( 'Видалити посилання', THEME_OPT),
                    'fields'         => array(
                        array(
                            'id'       => 'library-text',
                            'type'     => 'text',
                            'title'    => __('Текст', THEME_OPT),
                        ),
                        array(
                            'id'       => 'library-url',
                            'type'     => 'text',
                            'title'    => __('Посилання URL', THEME_OPT),
                        ),
                    )
                )
            )

        );

        $library_options[] = $library_fields;

        $public_info_options = array();

        $public_info_fields1 = array(
            'title' => 'Розділ для тендерів',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(

                array(
                    'title'=>__('Держакупівлі тощо', THEME_OPT ),
                    'id' => 'public-slides-list',
                    'type' => 'slides',
                    'subtitle'    => __( 'Завантаження інформації із зображеннями.', THEME_OPT ),
                    'placeholder' => array(
                        'title'       => __( 'Пояснення', THEME_OPT ),
                        'description' => __( 'Не потребує заповнення', 'mytheme' ),
                        'url'         => __( 'Посилання URL', THEME_OPT ),
                    )
                )

            )

        );
        $public_info_fields2 = array(
            'title' => 'Розділ для публічної інформації',
            'icon_class'    => 'icon-large',
            'icon'          => 'el-icon-list-alt',
            'fields' => array(

                array(
                    'id'               => 'public-list',
                    'type'             => 'repeatable_list',
                    'accordion'      => true,
                    'title'            => __('Посилання:', THEME_OPT),
                    'add_button'     => __( 'Додати посилання', THEME_OPT),
                    'remove_button'  => __( 'Видалити посилання', THEME_OPT),
                    'fields'         => array(

                        array(
                            'id'       => 'public-text',
                            'type'     => 'text',
                            'title'    => __('Текст', THEME_OPT),
                        ),
                        array(
                            'id'       => 'public-url',
                            'type'     => 'text',
                            'placeholder' => __('Якщо обираєте заголовок посилання не портібне', THEME_OPT),
                            'title'    => __('Посилання URL', THEME_OPT),
                        ),
                        array(
                            'id'       => 'head-content',
                            'type'     => 'button_set',
                            'title'    => __('Тип інформації, для повідображення на сторінці', THEME_OPT),
                            'desc'     => __('Залоговок та для року, контент для іншого', THEME_OPT),
                            'multi'    => false,
                            'options' => array(
                                'head-year' => 'заголовок-рік',
                                'head' => 'заголовок',
                                'disabled' => 'контент',
                            ),
                            'default'=> 'disabled'
                        ),
                    )
                )
            )

        );

        $public_info_options[] = $public_info_fields1;
        $public_info_options[] = $public_info_fields2;

        $metaboxes[] = array(
            'id'            => 'home-page-options',
            'title'         => __( 'Головна сторінка', THEME_OPT ),
            'post_types'    => array( 'page' ),
            'page_template' => array('front-page.php'),
            'position'      => 'normal', // normal, advanced, side
            'priority'      => 'high', // high, core, default, low
            'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
            'sections'      => $homepage_options,
            );
        $metaboxes[] = array(
            'id'            => 'the-team-options',
            'title'         => __( 'Для педагогічного колективу', THEME_OPT ),
            'post_types'    => array( 'page' ),
            'page_template' => array('the-team.php'),
            'position'      => 'normal', // normal, advanced, side
            'priority'      => 'high', // high, core, default, low
            'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
            'sections'      => $the_team_options,
        );
        $metaboxes[] = array(
                'id'            => 'rewards-options',
                'title'         => __( 'Для сторінки досягень', THEME_OPT ),
                'post_types'    => array( 'page' ),
                'page_template' => array('rewards-page.php'),
                'position'      => 'normal', // normal, advanced, side
                'priority'      => 'high', // high, core, default, low
                'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
                'sections'      => $rewards_options,
            );
        $metaboxes[] = array(
                'id'            => 'videos-options',
                'title'         => __( 'Для сторінки Відеотеки', THEME_OPT ),
                'post_types'    => array( 'page' ),
                'page_template' => array('videos-page.php'),
                'position'      => 'normal', // normal, advanced, side
                'priority'      => 'high', // high, core, default, low
                'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
                'sections'      => $videos_options,
            );
	    $metaboxes[] = array(
                'id'            => 'contact-page-options',
                'title'         => __( 'Сторінка батькам', THEME_OPT ),
                'post_types'    => array( 'page' ),
                'page_template' => array('contact-page.php'),
                'position'      => 'normal', // normal, advanced, side
                'priority'      => 'high', // high, core, default, low
                'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
                'sections'      => $contactpage_options,
                );
	    $metaboxes[] = array(
                'id'            => 'for_parents-page-options',
                'title'         => __( 'Сторінка контакти', THEME_OPT ),
                'post_types'    => array( 'page' ),
                'page_template' => array('for-parents-page.php'),
                'position'      => 'normal', // normal, advanced, side
                'priority'      => 'high', // high, core, default, low
                'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
                'sections'      => $for_parents_options,
                );
	    $metaboxes[] = array(
                'id'            => 'library-page-options',
                'title'         => __( 'Сторінка бібліотеки', THEME_OPT ),
                'post_types'    => array( 'page' ),
                'page_template' => array('library-page.php'),
                'position'      => 'normal', // normal, advanced, side
                'priority'      => 'high', // high, core, default, low
                'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
                'sections'      => $library_options,
                );
        $metaboxes[] = array(
                'id'            => 'public-info-page-options',
                'title'         => __( 'Сторінка для ЗМІ ', THEME_OPT ),
                'post_types'    => array( 'page' ),
                'page_template' => array('info-page.php'),
                'position'      => 'normal', // normal, advanced, side
                'priority'      => 'high', // high, core, default, low
                'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
                'sections'      => $public_info_options,
                );

	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_metaboxes');
endif;

