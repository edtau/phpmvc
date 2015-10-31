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
            'text'  => 'Hem',
            'url'   => $this->di->get('url')->create(''),
            'title' => 'Me'
        ],

        // This is a menu item
        'tema'   => [
            'text' => 'Tema',
            'url'  => $this->di->get('url')->create('theme.php'),
            'title'   => 'Dice'
        ],
        // This is a menu item
        'regioner'  => [
            'text'  => 'Regioner',
            'url'   => $this->di->get('url')->create('theme.php/regioner'),
            'title' => 'regioner'

        ],
        // This is a menu item
        'font-awesome'  => [
            'text'  => 'font-awesome',
            'url'   => $this->di->get('url')->create('theme.php/font-awesome'),
            'title' => 'font-awesome'

        ],
        // This is a menu item
        'rutnät'  => [
            'text'  => 'Rutnät',
            'url'   => $this->di->get('url')->create('theme.php/grid'),
            'title' => 'Kommentarer 2'
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
