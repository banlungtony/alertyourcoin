<?php
$access_token = 't/0hmZR9lUaOSZu3nzMRtJA6xo97S+HmIfLBxihhtzkR1e0ZqEfyP2lJ4MDIGZlUZb5QJVlzv6UO+1ycWWjxH+G5Fb5SqwBmWGgdU8KkTuh780eEHa8FdExxG7GNlfE3pVAZ6qgVkHKC1jBsLRpSFwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
echo "<hr/>";
echo $headers;