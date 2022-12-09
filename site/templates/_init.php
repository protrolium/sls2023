<?php // namespace ProcessWire;

// Optional initialization file, called before rendering any template file.
// This is defined by $config->appendTemplateFile in /site/config.php.
// Use this to define shared variables, functions, classes, includes, etc. 

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