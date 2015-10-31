<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Use for styling the menu
    'class' => 'navbar',

    // Here comes the menu strcture
    'items' => [

        // This is a menu item
        'home'  => [
            'text'  => 'Me',
            'url'   => $this->di->get('url')->create('me'),
            'title' => 'Me'
        ],

        // This is a menu item
        'dice'   => [
            'text' => 'Tärning',
            'url'  => $this->di->get('url')->create('dice'),
            'title'   => 'Dice'
        ],
        // This is a menu item
        'comment'  => [
            'text'  => 'Kommentarer',
            'url'   => $this->di->get('url')->create('comment'),
            'title' => 'Kommentarer'
        ],
        // This is a menu item
        'comment2'  => [
            'text'  => 'Kommentarer 2',
            'url'   => $this->di->get('url')->create('comment2'),
            'title' => 'Kommentarer 2'
        ],
        // This is a menu item
        'report'   => [
            'text' => 'Redovisning',
            'url'  => $this->di->get('url')->create('redovisning'),
            'title'   => 'Redovisning'
        ],
        // This is a menu item
        'tema'   => [
            'text' => 'Tema',
            'url'  => $this->di->get('url')->create('theme.php'),
            'title'   => 'Tema'
        ],

        // This is a menu item
        'source' => [
            'text'  =>'Källkod',
            'url'   => $this->di->get('url')->create('source'),
            'title' => 'Källkod'
        ],

    ],

    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    'callback' => function ($url) {
        if ($url == $this->di->get('request')->getCurrentUrl(false)) {
            return true;
        }
    },

    /**
     * Callback to check if current page is a decendant of the menuitem, this check applies for those
     * menuitems that has the setting 'mark-if-parent' set to true.
     *
     */
    'is_parent' => function ($parent) {
        $route = $this->di->get('request')->getRoute();
        return !substr_compare($parent, $route, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
   /*
    'create_url' => function ($url) {
        return $this->di->get('url')->create($url);
    },
    */
];
