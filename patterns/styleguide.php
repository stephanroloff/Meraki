<?php
/**
 * Title: SYTLEGUIDE
 * Slug: theme-slug/styleguide
 * Categories: STYLEGUIDE, text
 * Description: Styleguide Pattern
 * Keywords: Meraki Theme
 * Block Types: core/navigation, core/site-title, core/social-links
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center","wideSize":""}} -->
    <div class="wp-block-group"><!-- wp:spacer {"height":"30px"} -->
        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:heading {"level":1} -->
        <h1 class="wp-block-heading">Styleguide</h1>
        <!-- /wp:heading -->

        <!-- wp:spacer {"height":"30px"} -->
        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"textColor":"emerald-green"} -->
        <p class="has-emerald-green-color has-text-color"><strong>Headings Semantic</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:html -->
        <h1>Heading H1</h1>
        <h2>Heading H2</h2>
        <h3>Heading H3</h3>
        <h4>Heading H4</h4>
        <h5>Heading H5</h5>
        <h6>Heading H6</h6>
        <p>Paragraph</p>
        <!-- /wp:html -->

        <!-- wp:spacer {"height":"50px"} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"textColor":"emerald-green"} -->
        <p class="has-emerald-green-color has-text-color"><strong>Headings Wordpress Blocks</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":1} -->
        <h1 class="wp-block-heading">Heading H1</h1>
        <!-- /wp:heading -->

        <!-- wp:heading -->
        <h2 class="wp-block-heading">Heading H2</h2>
        <!-- /wp:heading -->

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Heading H3</h3>
        <!-- /wp:heading -->

        <!-- wp:heading {"level":4} -->
        <h4 class="wp-block-heading">Heading H4</h4>
        <!-- /wp:heading -->

        <!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading">Heading H5</h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"level":6} -->
        <h6 class="wp-block-heading">Heading H6</h6>
        <!-- /wp:heading -->

        <!-- wp:spacer {"height":"50px"} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"textColor":"emerald-green"} -->
        <p class="has-emerald-green-color has-text-color"><strong>Inputs</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:html -->
        <p><label>Name: <label /><input type="text" id="lname" name="lname" placeholder="Add Text..."></p>
        <!-- /wp:html -->

        <!-- wp:spacer {"height":"10px"} -->
        <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:html -->
        <p><textarea placeholder="Add Text..."></textarea></p>
        <!-- /wp:html -->

        <!-- wp:html -->
        <p><label for="cars">Choose a car:</label><br />
            <select id="cars" name="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
            </select>
        </p>
        <!-- /wp:html -->

        <!-- wp:html -->
        <p><input type="button"><br />
            <input type="checkbox"><br />
            <input type="color"><br />
            <input type="date"><br />
            <input type="datetime-local"><br />
            <input type="email"><br />
            <input type="file"><br />
            <input type="hidden"><br />
            <input type="image"><br />
            <input type="month"><br />
            <input type="number"><br />
            <input type="password"><br />
            <input type="radio"><br />
            <input type="range"><br />
            <input type="reset"><br />
            <input type="search"><br />
            <input type="submit"><br />
            <input type="tel"><br />
            <input type="text"><br />
            <input type="time"><br />
            <input type="url"><br />
            <input type="week">
        </p>
        <!-- /wp:html -->

        <!-- wp:spacer {"height":"50px"} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"textColor":"emerald-green"} -->
        <p class="has-emerald-green-color has-text-color">List</p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul><!-- wp:list-item -->
            <li>List Item 1</li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li>List Item 2</li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li>List Item 3</li>
            <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->

        <!-- wp:spacer {"height":"50px"} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:paragraph {"textColor":"emerald-green"} -->
        <p class="has-emerald-green-color has-text-color">Button</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Click me!</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->