// Remove the default […]. 
// Update your functions.php file and change the 'excerpt_more' filter

function new_excerpt_more( $more ) {
	return 'Check out the full article...';
}
add_filter('excerpt_more', 'new_excerpt_more');

