<?php

return [
    'plugin' => [
        'name'          => 'Posts',
        'description'   => 'Posts for October CMS.'
    ],
    'posts' => [
        'tabs'  => [
            'categories'        => 'Categories',
            'tags'              => 'Tags',
        ],
        'labels' => [
            'is_published'      => 'Published?',
            'published_at'      => 'Published At',
            'published_until'   => 'Published Until',
            'show_contents'     => 'Show Contents?',
            'primary_category'  => 'Primary Category',
            'category_list'     => 'Category List',
            'tags'              => 'Tags',
        ],
        'comments' => [
            'primary_category'  => 'The most relevant category',
            'published_at'      => 'Default to now if published',
            'published_until'   => 'Optional post expiry time',
        ]
    ],

    'categories' => [

    ],

    'tags' => [
        'labels' => [
            'is_approved' => 'Approved?',
        ]
    ],

    'blocks' => [
        'section' => [
            'tabs'  => [
                'main'  => 'Main',
                'main'  => 'Main',
            ],
            'labels' => [

            ]
        ],
    ],

    'common' => [
        'tabs' => [
            'detail'        => 'Detail',
            'images'        => 'Images',
            'image'         => 'Image',
            'body'          => 'Body',
            'seo'           => 'SEO',
            'posts'         => 'Posts',
            'settings'      => 'Settings',
            'main'          => 'Main',
        ],
        'labels' => [
            'name'          => 'Name',
            'title'         => 'Title',
            'slug'          => 'Slug',
            'excerpt'       => 'Excerpt',
            'seo'           => 'SEO',
            'posts'         => 'Posts',
            'cms_layout'    => 'CMS Layout',
            'block_heading' => 'Section Heading',
            'block_id'      => 'Section ID',
            'block_content' => 'Section Content'
        ]

    ],
];