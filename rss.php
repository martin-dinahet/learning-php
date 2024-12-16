<?php

$rss = simplexml_load_file("http://www.lemonde.fr/technologies/rss_full.xml");

foreach ($rss->channel->item as $item) {
  echo "<h2><a href='" . $item->link . "'>" . $item->title . "</a></h2>";
  echo "<p>" . $item->description . "</p>";
  echo "<hr>";
}
