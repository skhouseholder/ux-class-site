---
layout: post
title:  "Illustrator Script: Export Artboards @2x"
blog-list-title: "Illustrator Script: Export @2x with two clicks"
date: 2015-03-10 18:05:31
# categories: illustrator free-stuff
author: "Sarah"
image: illustrator-script
---

<div class="wp-caption alignright">
	<img src="/images/posts/{{ page.image }}-post.png">
	<p class="wp-caption-text">
		Configure once and then export in two clicks
	</p>
</div>

<span class="dropcap medium-big">E</span>xporting .ai artboards at dual resolution and renaming the subsequent files can be a big pain, so I recently scoured the internet for a script to do it for me. Nothing I found quite worked, so I modified and refactored one to meet my needs. 

### What it does

The script exports all artboards to the directory of your choice at 100% and 200% scaling. It also names them in the form [filename]-[artboard name].png and [filename]-[artboard name]@2x.png.

It will also ignore locked layers so background or guide layers won't get in your way every time you want to export something.

### Example output

File name: dashboard icons.ai  
Artboard names: create, refresh, send  
Exported images:

- dashboard-icons-create.png
- dashboard-icons-create@2x.png
- dashboard-icons-refresh.png
- dashboard-icons-refresh@2x.png
- dashboard-icons-send.png
- dashboard-icons-send@2x.png

### How to install

1. [Download the script here](/downloads/SaveArtboardsForDualRes.jsx)
2. Put the file in Illustrator's scripts directory: Adobe Illustrator/Presets/Scripts
3. Restart Illustrator

### How to use

1. Open the .ai file you wish to export
2. Make sure the layers you wish to export are unlocked
3. Execute via File > Scripts

### How to configure (optional)

If you want specific syntax in your filenames or a hardcoded export directory, open the file in a text editor and review the comments. I've created several places where you can easily configure this script to fit your needs like so:

<figure>
	<img src="/images/posts/script-instructions-example.png" data-retina="/images/posts/script-instructions-example.png" alt="script instructions example">
</figure>


### Special thanks

I modified this script from a version by [Hot Apps Factory](http://www.hotappsfactory.com/the-magic-illustrator-script-ai-to-ios-android/) which exports and names compatibly with Android apps as well as iOS. That script is itself an improvement on [Herculano Campos' script](https://herkulano.github.io/illustrator-scripts-for-mobile/).
