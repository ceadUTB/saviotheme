<?php

$THEME->name = 'saviotheme';
$THEME->parents = array('bootstrapbase');

$THEME->doctype = 'html5';
$THEME->sheets = array('fonts','font-awesome','moodle','waves_min','custom');
$THEME->parents_exclude_sheets = array('bootstrapbase' => array('moodle'));

$THEME->supportscssoptimisation = false;

$THEME->enable_dock = false;
$THEME->editor_sheets = array();

$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_saviotheme_process_css';

$THEME->layouts = array(
    // Most backwards compatible layout without the blocks - this is the layout used by default.
    'base' => array(
        'file' => 'default.php',
        'regions' => array(),
    ),
    // Standard layout with blocks, this is recommended for most pages with general information.
    'standard' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    // Main course page.
    'course' => array(
        'file' => 'course.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu' => true),
    ),
    'coursecategory' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    // Part of course, typical for modules - default page layout if $cm specified in require_login().
    'incourse' => array(
        'file' => 'default.php',
        'regions' => array('side-post','side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // The site home page.
    'frontpage' => array(
        'file' => 'dashboard.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
        'options' => array('nonavbar' => true),
    ),
    // Server administration scripts.
    'admin' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // My dashboard page.
    'mydashboard' => array(
        'file' => 'dashboard.php',
        'regions' => array('side-pre', 'side-post','rb-one-left','rb-one-right','rb-two-left','rb-two-right','rb-oner-left','rb-oner-right'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu' => true),
    ),
    // My public page.
    'mypublic' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post','rb-one-left','rb-one-right','rb-two-left','rb-two-right','rb-oner-left','rb-oner-right'),
        'defaultregion' => 'side-post',
    ),
    'login' => array(
        'file' => 'login.php',
        'regions' => array(),
        'options' => array('langmenu' => true),
    ),

    // Pages that appear in pop-up windows - no navigation, no blocks, no header.
    'popup' => array(
        'file' => 'popup.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nonavbar' => true),
    ),
    // No blocks and minimal footer - used for legacy frame layouts only!
    'frametop' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nocoursefooter' => true),
    ),
    // Embeded pages, like iframe/object embeded in moodleform - it needs as much space as possible.
    'embedded' => array(
        'file' => 'embedded.php',
        'regions' => array()
    ),
    // Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    // This must not have any blocks, links, or API calls that would lead to database or cache interaction.
    // Please be extremely careful if you are modifying this layout.
    'maintenance' => array(
        'file' => 'maintenance.php',
        'regions' => array(),
    ),
    // Should display the content and basic headers only.
    'print' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nonavbar' => false),
    ),
    // The pagelayout used when a redirection is occuring.
    'redirect' => array(
        'file' => 'embedded.php',
        'regions' => array(),
    ),
    // The pagelayout used for reports.
    'report' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // The pagelayout used for safebrowser and securewindow.
    'secure' => array(
        'file' => 'secure.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post'
    ),
);

$THEME->javascripts = array(
    'lib/waves_min','saviotheme'
);

$THEME->blockrtlmanipulations = array(
    'side-pre' => 'side-post',
    'side-post' => 'side-pre'
);
