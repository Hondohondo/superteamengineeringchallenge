<?php

/*****************************************************
 *                                                   *
 *            1: [Connection Handling]               *
 *                                                   *
 *****************************************************/

// Function to connect to an SQLite database
function sqlite_connect($database)
{
    $db = new SQLite3($database);
    if (!$db) {
        die("Failed to connect to the SQLite database.");
    }
    return $db;
}

// Function to close the SQLite connection
function sqlite_close_connection($db)
{
    if ($db) {
        $db->close();
    }
}

/*****************************************************
 *                                                   *
 *            2: [Query Execution]                   *
 *                                                   *
 *****************************************************/

// Function to execute an SQLite query
function sqlite_query($db, $query)
{
    return $db->query($query);
}

/*****************************************************
 *                                                   *
 *            3: [Fetching Results]                  *
 *                                                   *
 *****************************************************/

// Function to fetch a single row from the result as an associative array
function sqlite_fetch_assoc($result)
{
    return $result->fetchArray(SQLITE3_ASSOC);
}

// Function to fetch a single row from the result as a numeric array
function sqlite_fetch_row($result)
{
    return $result->fetchArray(SQLITE3_NUM);
}

// Function to fetch all results as an associative array
function sqlite_fetch_all($result)
{
    $rows = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $rows[] = $row;
    }
    return $rows;
}

/*****************************************************
 *                                                   *
 *            4: [Error Handling]                    *
 *                                                   *
 *****************************************************/
// Function to get the last error message from the SQLite connection
function sqlite_error($db)
{
    return $db->lastErrorMsg();
}



