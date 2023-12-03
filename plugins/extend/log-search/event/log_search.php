<?php

return function (array $args) {
      Sunlight\Logger::notice("search", _lang('log-search.search') . " " . $GLOBALS['search_query']);
};
