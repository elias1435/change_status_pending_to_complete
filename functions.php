<?php
// use this snippet to your child theme function.php to automatically change the donation status from pending to complete in the Give - Donation Plugin 
add_action('give_update_payment_status', 'auto_complete_donations', 10, 3);
function auto_complete_donations($payment_id, $new_status, $old_status) {
    // Check if the new status is 'pending'
    if ($new_status === 'pending') {
        // Change the status to 'complete'
        give_update_payment_status($payment_id, 'complete');
    }
}
