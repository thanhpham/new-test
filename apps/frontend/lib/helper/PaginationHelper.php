<?php

function pager_navigation($pager, $uri)
{
  $navigation = '<ul class="pager">';

    $uri .= (preg_match('/\?/', $uri) ? '&' : '?').'page=';

    if ($pager->getPreviousPage()) {
       $navigation .= '<li class="previous"><a href="'. $uri.$pager->getPreviousPage() . '"/>&larr; Newer</li>';
    }

    if ($pager->getNextPage() != $pager->getLastPage()) {
        $navigation .= '<li class="next"><a href="' .  $uri.$pager->getNextPage() . '"/>Older &rarr;</li>';
    }

  $navigation .= '</ul>';
  
  return $navigation;
}