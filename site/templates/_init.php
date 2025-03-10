<?php namespace ProcessWire;

// Optional initialization file, called before rendering any template file.
// This is defined by $config->appendTemplateFile in /site/config.php.
// Use this to define shared variables, functions, classes, includes, etc. 

// include_once('/assets/inc/mailchimp.php');

if ($config->rockdevtools) {
    $devtools = rockdevtools();
    
    // compile all less files to CSS
    $devtools->assets()
        ->less() 
        ->add('/site/templates/uikit/src/less/uikit.theme.less')
        ->add('/site/templates/sections/**.less', 3)
        ->add('/site/templates/styles/custom.less')
        ->save('/site/templates/src/.styles.css');
  
    // merge and minify css files
    $devtools->assets()
        ->css()
        ->add('/site/templates/src/.styles.css')
        ->save('/site/templates/dst/styles.min.css');
  
    // merge and minify JS files
    $devtools->assets()
        ->js()
        ->add('/site/templates/uikit/dist/js/uikit.min.js')
        ->add('/site/templates/uikit/dist/js/uikit-icons.min.js')
        ->add('/site/templates/scripts/main.js')
        ->save('/site/templates/dst/scripts.min.js');
  }


function isMobileDevice() {
    // Get the user agent string
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
  
    // Check if the user agent matches any common patterns for mobile devices
    if (preg_match("/\b(?:a(?:ndroid|vantgo)|b(?:lackberry|olt|o?ost)|cricket|docomo|hiptop|i(?:emobile|p[ao]d)|kitkat|m(?:ini|obi)|palm|oneplus|(?:i|smart|windows )phone|symbian|up\.(?:browser|link)|tablet(?: browser| pc)|(?:hp-|rim |sony )tablet|w(?:ebos|indows ce|os))/i", $userAgent)) {
      return true;
    } else {
      return false;
    }
}

$config->SearchEngine = [

  // Index field defines the field to store indexed data in. Default value is "search_index".
  'index_field' => 'search_index',

  // This is an array of all the fields you want to index. Currently there is no way to
  // index "all compatible fields", but such an option may be added in the future. (This
  // is, in fact, a matter of security: by indexing *all* fields you could inadvertently
  // expose sensitive data.)
  'indexed_fields' => [
      // ...
  ],

  // This is an array of fieldtypes that the module should be considered compatible with.
  // You should only modify these values if you're sure that the field in question is
  // indeed compatible with the indexing process.
  'compatible_fieldtypes' => [
      // ...
  ],

  // Currently prefixes contains just the "link" prefix – more may be added in the future.
  'prefixes' => [
      // The "link" prefix is added to indexed links and enables "link:https://..." queries.
      'link' => 'link:',
  ],

  // Find arguments are pretty self-explanatory. These are the defaults and apply only to
  // SearchEngine::find(); custom selectors are not affected.
  'find_args' => [
      'limit' => 20,
      'sort' => 'sort',
      'operator' => '*=',
      'query_param' => 'q',
      // The "selector_extra" option is appended to automatically generated selector string.
      // You might use this to, for example, return just a subset of all indexed templates.
      'selector_extra' => '',
  ],

  // This array is passed directly to the MarkupPagerNav core module, see
  // https://processwire.com/docs/front-end/markup-pager-nav/ for more details.
  'pager_args' => [
      // ...
  ],

  // Render arguments affect the rendered output from the SearchEngine module.
  'render_args' => [

      // At the moment there's only one "theme" available ("default").
      'theme' => 'sls',

      // By default theme-files (styles and scripts) are served minified; setting
      // this option to `false` will serve unmodified, original assets instead.
      'minified_resources' => false,

      // Various attributes used by the search form and results list when rendered.
      'form_action' => './',
      'form_id' => 'se-form',
      'form_input_id' => 'se-form-input',
      'results_summary_id' => 'se-results-summary',
      'results_id' => 'se-results',

      // Summary of each result (in the search results list) is the value of this field.
      'result_summary_field' => 'summary',

      // Highlighting basically wraps each instance of the search term in the summary
      // text with a predefined tag and class (default element is `<strong></strong>`).
      'results_highlight_query' => true,

      // These settings define the fields used when search results are rendered as JSON.
      'results_json_fields' => [
          'title' => 'title',
          'desc' => 'summary',
          'url' => 'url',
      ],

      // This integer is passed to the json_encode call in renderResultsJSON method.
      // See https://www.php.net/json_encode for supported values.
      'results_json_options' => 0,

      // This defines whether a pager should be rendered at the end of the results list.
      'pager' => true,

      // Array of classes to use in templates. You can add new classes here as well.
      'classes' => [
          // ...
      ],

      // Array of strings to use in templates. You can add new classes here as well. Note
      // that most of these are `null` in the $defaultOptions array; the reason for this
      // is simply that methods cannot be called when declaring class properties, so the
      // values are set in SearchEngine::__construct().
      'strings' => [
          // ...
      ],

      // Template strings. These are used to render markup on the site.
      'templates' => [
          // ...
      ],

  ],

  // Currently the requirements array only holds the query min length argument.
  'requirements' => [
      'query_min_length' => 3,
  ],

];