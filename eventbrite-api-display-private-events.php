<?php
/*
Plugin Name: Eventbrite API - Business & Professional/Investment Only
Plugin URI: https://github.com/infomaniac50/eventbrite-display-business-investment-events
Description: Only show events that are in the Business & Professional/Investment category.
Version: 1.0
Author: Automattic,infomaniac50
Author URI: http://automattic.com
License: GPL v2 or newer <https://www.gnu.org/licenses/gpl.txt>
*/

/**
 * Only show events that are in the Business & Professional/Investment category.
 */
function eventbrite_display_business_investment_events( $args ) {
  $args['category_id'] = 101; // Business & Professional
  $args['subcategory_id'] = 1011; // Investment

  // Return filtered args.
  return $args;
}
add_filter( 'eventbrite_query_args', 'eventbrite_display_business_investment_events' );
