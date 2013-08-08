# Genesis Ignore Deprecated

Stops the Genesis deprecated functions file from loading on every request, giving a small performance benefit

## Description 

Genesis Framework 2.0 includes a new boolean value `genesis_load_deprecated` filter just before the loading of the file that includes all of the old deprecated functions. 

Deprecated functions are ones which shoudn't be used for some reason, the most common being that they may be removed in a future version of the software. WordPress has apparently never deleted any function and Genesis has only deleted a few that were not being used.

In the case of Genesis Framework 2.0, that stands at 72 deprecated functions out of a total of 355.

This filter means you can turn off loading of the deprecated functions, if you know your theme and plugins are not using any of them, for a small performance benefit. A quick un-scientific test suggested about 0.13MB of memory usage was saved. This is likely less than 1% of the total memory usage for a front-end or admin request (depends on other plugins and variables), but it's still a saving.

## Installation

### Upload

1. Download the latest tagged archive (choose the "zip" option).
2. Go to the __Plugins -> Add New__ screen and click the __Upload__ tab.
3. Upload the zipped archive directly.
4. Go to the Plugins screen and click __Activate__.

### Manual

1. Download the latest tagged archive (choose the "zip" option).
2. Unzip the archive.
3. Copy the folder to your `/wp-content/plugins/` directory.
4. Go to the Plugins screen and click __Activate__.

Check out the Codex for more information about [installing plugins manually](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

### Git

Using git, browse to your `/wp-content/plugins/` directory and clone this repository:

`git clone git@github.com:GaryJones/genesis-ignore-deprecated.git genesis-ignore-deprecated`

Then go to your Plugins screen and click __Activate__.

## Credits

Built by [Gary Jones](https://twitter.com/GaryJ)  
Copyright 2013 [Gamajo Tech](http://gamajo.com/)
