# How to create new LazyBlock?

1. Create Block from LazyBlock page

   1. Go to WordPress admin panel ([bridgecap.local/wp-admin/](http://bridgecap.local/wp-admin/))
   2. Go to LazyBlocks page in admin panel ([LazyBlocks -> Blocks](http://bridgecap.local/wp-admin/edit.php?post_type=lazyblocks))
   3. Click "Add New Post" button to create new block
   4. Enter block name (e.g. "Home Page Hero Section")
   5. Add required fields for block via "Inspector Controls"
   6. Configure block properties (location, category, etc.)
   7. In Code > Output method select "Theme Template"
   8. Publish block

2. Create new theme template file

   1. Go to theme folder (`/wp-content/themes/bridgecap/blocks/`)
   2. Create new folder with name like this: `lazyblock-home-page-hero-section`, where `home-page-hero-section` is name of your block
   3. Inside this folder create new file `block.php`
   4. Add next code to the `block.php` file:

   ```php
   <?php

 
   /** example
   $button_text = $attributes['button-text'] ?? '';
   $button_link = $attributes['button-link']['url'] ?? '';
   */
   ?>
   <div class="lazyblock-home-page-hero-section">
     <!-- Your block content -->
   </div>
   ```

   5. And create `style.scss` file inside this folder too
   6. Import `lazyblock-home-page-hero-section/style.scss` to `/wp-content/themes/bridgecap/scss/style.scss` file

3. Add block to page

   1. Go to Pages ([WP Admin > Pages](http://bridgecap.local/wp-admin/edit.php?post_type=page))
   2. Select your page
   3. Add your block (Top Left plus button > Blocks > TEXT > _Name of your block_)
   4. Configure block fields
   5. Save page

