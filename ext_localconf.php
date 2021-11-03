<?php

/**
 * Markus Hofmann
 * 03.11.21 12:48
 * persisted_sanitized_routing
 */

(function () {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['aspects']['PersistedSanitizedPatternMapper']
        = \Calien\PersistedPatternRouting\Routing\Aspect\PersistedSanitizedPatternMapper::class;
})();