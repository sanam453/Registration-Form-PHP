<?php
function get_user($conn, $email)
{
    /**
     * Create a query to select all the IDs from the DB if the email address of
     * those IDs is equal to the email that user typed.
     */
    $query = mysqli_query($conn, "SELECT user_id FROM usera WHERE email = '$email'");

    /**
     * Check if the email exist in the DB or not, mysqli_num_rows always return a number any number with out 0 means a user exists.
     */
    $countRow = mysqli_num_rows($query);

    /**
     * Check if the mysqli_num_rows result is greater than 0 if it is then
     * the follwing function will return false otherwise return true.
     */
    return $countRow > 0 ? false : true;
}
