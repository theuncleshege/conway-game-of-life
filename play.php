<?php

namespace GameOfLife;

include "src/Game.php";
include "src/Grid.php";

$opts = [];

if (isset($argv[1]) && $argv[1] == 'help') {
  // Check for 'help' argument.
  print PHP_EOL;
  print "  Conway's Game of Life in PHP" . PHP_EOL;
  print "  Created by: Segun Ojo" . PHP_EOL;
  print " ---------------------------------" . PHP_EOL;
  print "  Available options to change:" . PHP_EOL;
  print "  - timeout (default=5000): Number of microseconds between frame renders" . PHP_EOL;
  print "  - rand_max (default=5): Chances of a cell being alive. Lower is more alive cells" . PHP_EOL;
  print "  - overwrite (default=1): Show most recent output alone or append subsequent output as they become available." . PHP_EOL;
  print "  - template  (default=NULL): Loads a template from a txt file. See /templates folder for options." . PHP_EOL;
  print "  - cell (default=O): Alive cell character" . PHP_EOL;
  print "  - empty (default=' '): Dead cell character" . PHP_EOL;
  print "  - width (default=TERM_WIDTH): Grid width" . PHP_EOL;
  print "  - height (default=TERM_HEIGHT): Grid height" . PHP_EOL;
  print PHP_EOL;
  print "  Options are applied in a query string format. Examples:" . PHP_EOL;
  print "  - php play.php 'template=glider_gun'" . PHP_EOL;
  print "  - php play.php 'timeout=250000&rand_max=5&template=glider_gun'" . PHP_EOL;
  print PHP_EOL;
  die();
}

if (isset($argv[1])) {
  // Populate options from the input arguments.
  parse_str($argv[1], $opts);
}

$game = new Game($opts);
$game->loop();

print "\r\nCompleted!\r\n\r\n";