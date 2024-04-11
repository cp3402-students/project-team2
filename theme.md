# Theme Development Guide

## Overview

Welcome to the development guide for our starter theme! This guide will help new developers understand the structure, features, and design decisions behind our theme.


### Theme Features

- Simple design
- Customisable header and layout
- Custom colour scheme


## Files and Directory Structure

Here's a brief overview of the main files and directories in our theme:

- inc/template-tag.php: Controls WordPress post meta data .
- template-parts/content.php: Controls WordPress post content.
- footer.php: Controls the footer section of the theme.
- functions.php: Handles theme functions and includes.
- header.php: Controls the header section of the theme.
- sidebar.php: Controls the sidebar.
- single.php: Template for single blog posts.
- style.css: Contains the main stylesheet for the theme.


## Design Decisions

### Color Scheme
We chose colour's similar to the logo that was provided by the client. We used a combination of blue, gold and white as it evoked a feeling familiarity, inspiration and wisdom.

- Primary Colour: #22547D (Blue)
- Secondary Colour: #BAA347 (Gold)
- Accent Colour: #fff (White)


## Typography


## Layout
The layout of our theme follows the standard design approach, while focusing on simplicity for everybody to be confident when browsing.



## Customization

### template-tag.php
Updated the WordPress post system to display Published on (date) and written by (author).



#### To edit the message about when a post is published, go to lines 14 to 32 and find the function starter_theme_posted_on()

```
	function starter_theme_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Published on  %s', 'post date', 'starter_theme' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
```


#### To edit the message about who wrote an article, go to lines 43 - 48 and find the function starter_theme_posted_by()

```
function starter_theme_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( ' Written by %s', 'post author', 'starter_theme' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);
```
### functions.php

#### To edit the size of the logo with customiser support, go to lines 87 to 104 and find add_theme_support.

```
add_theme_support(
		'custom-logo',
		array(
			'height'      => 90,
			'width'       => 90,
			'flex-width'  => true,
			// 'flex-height' => true,
		)
	);
```

### header.php

#### To edit the clickable area, go to lines 54 to 66 and find the div class clickable-area.

```
		<div class = "clickable-area">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'starter_theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?> 
		</nav><!-- #site-navigation -->
		</div>
```

#### To edit the secondary site navigation, go to lines 68 to 77 and find nav id="secondary-site-navigation".

```
	 <nav id="secondary-site-navigation" class="secondary-navigation">
		<button class="menu-toggle" aria-controls="secondary-menu" aria-expanded="false"><?php esc_html_e( 'Secondary Menu', 'starter_theme' ); ?></button>
		<?php 
		 wp_nav_menu(
			 array(
				 'theme_location' => 'menu-2', // Change to 'menu-2' for the secondary menu
				 'menu_id'        => 'secondary-menu', // Assign a unique ID to the secondary menu
			 )
		 );
		?>		 
```


### style.css

#### 