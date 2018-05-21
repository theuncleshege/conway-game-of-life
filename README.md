# Conway's Game of Life in PHP
Created by: Segun Ojo

View help documentation:

```
> php play.php help

  Conway's Game of Life in PHP
  Created by: Segun Ojo
 ---------------------------------
  Available options to change:
  - timeout (default=5000): Number of microseconds between frame renders
  - rand_max (default=5): Chances of a cell being alive. Lower is more alive cells
  - overwrite (default=1): Show most recent output alone or append subsequent output as they become available.
  - template  (default=NULL): Loads a template from a txt file. See /templates folder for options.
  - cell (default=O): Alive cell character
  - empty (default=' '): Dead cell character
  - width (default=TERM_WIDTH): Grid width
  - height (default=TERM_HEIGHT): Grid height

  Options are applied in a query string format. Examples:
  - php play.php 'template=glider_gun'
  - php play.php 'timeout=50000&rand_max=5&template=tumbler'
```

Simply run with `php play.php` in your terminal/command-line.
