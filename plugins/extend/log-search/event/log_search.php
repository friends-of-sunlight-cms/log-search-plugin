<?php

return function (array $args) {
      if($GLOBALS['search_query'] != null)
        Sunlight\Logger::notice("search", _lang('log-search.search') . " " . $GLOBALS['search_query']);
};
