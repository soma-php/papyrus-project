<?php return [
    'title' => 'My Site',
    'language' => 'en_US',
    'description' => 'My personal blog',

    // Default author for published contents, this can be overriden for each page
    'author' => 'John Doe',

    // 'timezone' should be one of the PHP supported: https://www.php.net/manual/en/timezones.php
    'timezone' => 'Europe/Stockholm',

    // 'date-format' sets the default format used by the format_date helper. 
    // If false or missing then the default format is the ISO-8601 standard: YYYY-MM-DD
    'date-format' => false,

    // Adds the option to type-cast specific meta keys
    'meta' => [
        'dates' => ['published', 'birthday'],
        'booleans' => ['featured'],
        'integers' => ['order'],
    ],

    // If you enable drafts you can view the draft in the web browser
    // by appending "?preview=true" to the URL.
    'drafts' => true,

    // Sets the default number of posts per page if you call paginate
    // via ContentManager or the paginate helper.
    'pagination' => 10,

    // Sets the page that will be shown if no page can be found
    '404' => '/404.md',

    // Settings for the built-in content search functionality
    'search' => [
        'low_value' => ['is', 'a', 'the', 'in', 'he', 'she', 'it', 'its', 'and'],
        'exclude' => [
            'pages/sub'
        ],        
    ],

    // The router can be disabled if you want to implement you own
    // custom logic for all requests by setting this key to false
    'router' => [
        // Handlers are callables that take a string and a Symfony Request
        // as arguments and return a boolean indicating whether
        // they handled the request or not. Check the advanced documentation
        // for more information.
        'handlers' => [],
    ],

    // Settings affecting the RSS feed. If 'feed' is set to false
    // then the built-in route handler for RSS feeds will
    // not be registered at all
    'feed' => [
        'route' => '/feed',
        'mode' => 'excerpt',
        // 'filter' will be run against the \Illuminate\Support\Collection instance
        // of pages so that custom logic can do more advanced filtering
        'filter' => false,
        'sort' => 'published',
        'order' => 'asc',
        'include' => [],
        'exclude' => [],
        // 'image' should be either an absolute URL or a relative path to a file
        // within the content directory.
        'image' => false,
    ],

    // If 'images' is set to false then all automatic image processing will be disabled
    'images' => [
        // This value changes what image processing driver will be used,
        // 'gd' and 'imagick' are supported.
        'driver' => 'gd',
        // Sets the image quality used in all automatic image processing
        'quality' => 80,
        'filters' => [
            // Filters need to be callable as with the content.filters
            // and can also be set via the theme manifest
        ],
    ],

    // Content filters (see documentation)
    'filters' => [
        'anchors' => \Papyrus\Content\Filters\AnchorFilter::class,
        'images' => \Papyrus\Content\Filters\ImageFilter::class,
        'includes' => \Papyrus\Content\Filters\ContentIncludesFilter::class,
        'hashtags' => \Papyrus\Content\Filters\HashtagFilter::class,
        'heading-id' => \Papyrus\Content\Filters\HeadingIdFilter::class,
        'heading-offset' => \Papyrus\Content\Filters\HeadingOffsetFilter::class,
        'shortcodes' => \Papyrus\Content\Filters\ShortcodeFilter::class,
        'smartypants' => \Papyrus\Content\Filters\SmartyPantsFilter::class,
    ],

    // Page mixins (see documentation)
    'mixins' => [
        // ...
    ],

    // Filter settings (see documentation)
    'tag-route' => '/tag?t=',
    'includes' => false,

    // Cache settings (see documentation)
    'cache' => [
        'ignore-mtime' => true,
        'validate-visited' => true,
        'gateway' => false,
        'full-page' => false,
        'time' => 3600,
        'include' => false,
        'exclude' => [
            'feed'
        ],
    ],
];