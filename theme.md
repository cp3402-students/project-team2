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



#### To edit the message about when a post is published, find the function starter_theme_posted_on()

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


#### To edit the message about who wrote an article, find the function starter_theme_posted_by()

```
function starter_theme_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( ' Written by %s', 'post author', 'starter_theme' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);
```
### functions.php

#### To edit the size of the logo with customiser support, find add_theme_support.

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

#### To edit the clickable area, find div class = "clickable-area".

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

#### To edit the secondary site navigation, find nav id="secondary-site-navigation".

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

#### To update the site header css, go to site header (.site-header).

```
/* Site Header
	 ========================================================================== */

 .site-header {
	position: relative;
	padding: 1em;
	color: #fff;
	background-color: #22547D;
	/* display: flex; */
	/* text-align: center; */
 }
 .site-branding{
	min-height: 65px;
	display: flex;
	text-align: center;


 }

 .custom-logo-link{
	margin-right: 1em;

	img{
		display: block;
		height: 100px;
		width: auto;

	}
	
 }

 .site-branding_text{
	display: flex;
	flex-direction: column;
	justify-content:column;
	height: 65px;
	font-family: Verdana, Geneva, Tahoma, sans-serif;

 }


 .site-title{
	margin: 0;
	padding: 0;
	font-size: 3em;
	/* font-weight: 150; */
	/* line-height:3em; */
	font-weight: 500;

 }

 .header-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #BAA347; /* Change the background color as needed */
    color: #fff; /* Text color */
    text-decoration: none;
    border-radius: 5px;
    margin-left: auto; /* Push the button to the far right */
}

.header-button:hover {
    background-color: #BAA347; /* Change the background color on hover */
}
```
#### To update the footer css, find Site Footer (.site-footer).

```
/* Site Footer
	 ========================================================================== */

.site-footer{
	background-color: #22547D;
	height: 65px;
}
```


#### To update the links css, go to Links.

```
/* Links
--------------------------------------------- */

a {
	color: #BAA347;
	text-decoration: none;
	font-weight: 400;
}

a:visited {
	color: #BAA347;
	font-weight: 200em;
}

a:hover,
a:focus,
a:active {
	color: #21759b;
	text-decoration: underline;
}

a:focus {
	outline: thin dotted;
}

a:hover,
a:active {
	outline: 0;
}

```

#### To update the navigation css, find Navigation (.main-navigation)

```
/* Navigation
--------------------------------------------- */

.main-navigation {
    display: block;
    width: 100%;
    font-size: 25px;
    font-weight: 500;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.main-navigation ul {
    display: none;
    list-style: none;
    margin: 10;
    padding-left: 10;
    text-decoration: none;
}

.main-navigation ul ul {
    box-shadow: 0 3px 3px rgba(234, 231, 231, 0.2);
    float: left;
    position: absolute;
    top: 100%;
    left: -999em;
    z-index: 99999;
}

.clickable-area {
    padding: 10px; /* Adjust padding to increase clickable area */
    display: inline-block; /* Ensures the container only takes up as much space as its content */
    /* Optional: Add styling to make the clickable area visually distinguishable */
    border: 1px solid #22547D;
    border-radius: 5px;
    background-color:#22547D;
    cursor: pointer;
}

.main-navigation ul ul ul {
    left: -999em;
    top: 0;
}

.main-navigation ul ul li:hover > ul,
.main-navigation ul ul li.focus > ul {
    display: block;
    left: auto;
}

.main-navigation ul ul a {
    width: 200px;
}

.main-navigation ul li:hover > ul,
.main-navigation ul li.focus > ul {
    left: auto;
}

.main-navigation li {
    position: flex;
    margin: 0 15px;
}

/* Style navigation menu links */
.main-navigation a,
.clickable-area a {
    color: #BAA347;
}

/* Style navigation menu links when visited */
.main-navigation a:visited,
.clickable-area a:visited {
    color: #BAA347;
    font-weight: 200;
}

/* Style navigation menu links on hover, focus, and active */
.main-navigation a:hover,
.main-navigation a:focus,
.main-navigation a:active,
.clickable-area a:hover,
.clickable-area a:focus,
.clickable-area a:active {
    color: white;
}

/* Remove outline on focus for all links */
a:focus {
    outline: none;
}

@media screen and (min-width: 37.5em) {
    .menu-toggle {
        display: none;
    }

    .main-navigation ul {
        display: flex;
    }
}

.site-main .comment-navigation,
.site-main .posts-navigation,
.site-main .post-navigation {
    margin: 0 0 1.5em;
}

.comment-navigation .nav-links,
.posts-navigation .nav-links,
.post-navigation .nav-links {
    display: flex;
}

.comment-navigation .nav-previous,
.posts-navigation .nav-previous,
.post-navigation .nav-previous {
    flex: 1 0 50%;
}

.comment-navigation .nav-next,
.posts-navigation .nav-next,
.post-navigation .nav-next {
    text-align: end;
    flex: 1 0 50%;
}
```

#### To update Posts and pages, go to posts and pages.

```
/* Posts and pages
--------------------------------------------- */
.sticky {
	display: block;
}

.entry-header{
	font-size: 1.2em;
	font-weight: 200;
	color: black;


}

.entry-header a{
	color: black;
}

.entry-header a:hover{
	color: #BAA347;
}

.entry-title{
	margin: .125em 0 .25em;
	font-size: 1.5em;
	color: black;

}

.entry-title a{
	color: black;
	text-decoration: none;
}

.entry-meta {
	font-size: 90%;

}

.entry-meta a{
	font-weight: 700;
	text-decoration: none;
	

}

.entry-meta a:hover {
	color: #BAA347;
	text-decoration: underline;
}

.byline after {

	content:"|";
	margin: 0 .5em;
}

.cat-links {
	font-size: 90%;
	font-weight: 650;
}

.cat-links a {
	text-decoration: none;
	color: #111;
	
}


.post,
.page {
	margin: 2 0 1.5em;
}

.updated:not(.published) {
	display: none;
}

.page-content,
.entry-content,
.entry-summary {
	margin: 1.5em 0 0;
}

.page-links {
	clear: both;
	margin: 0 0 1.5em;
}
```

