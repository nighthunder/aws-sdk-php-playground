<?php
/**
 * Copyright 2010-2019 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * This file is licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License. A copy of
 * the License is located at
 *
 * http://aws.amazon.com/apache2.0/
 *
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *
 *
 */
// snippet-start:[cloudwatchevents.php.delete_rule.complete]
// snippet-start:[cloudwatchevents.php.delete_rule.import]

require '../../vendor/autoload.php';

use Aws\CloudWatchEvents\CloudWatchEventsClient; 
use Aws\Exception\AwsException;
// snippet-end:[cloudwatchevents.php.delete_rule.import]

/**
 * Delete Rule
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */
 
// snippet-start:[cloudwatchevents.php.delete_rule.main]
$client = new Aws\cloudwatchevents\cloudwatcheventsClient([
    'profile' => 'default',
    'region' => 'us-west-2',
    'version' => '2015-10-07'
]);

try {
    $result = $client->deleteRule([
        'Name' => 'DEMO_EVENT', // REQUIRED
    ]);
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    error_log($e->getMessage());
}
 
 
// snippet-end:[cloudwatchevents.php.delete_rule.main]
// snippet-end:[cloudwatchevents.php.delete_rule.complete]
// snippet-comment:[These are tags for the AWS doc team's sample catalog. Do not remove.]
// snippet-sourcedescription:[DeleteRule.php demonstrates how to delete the specified rule. When you delete a rule, incoming events might continue to match to the deleted rule. Allow a short period of time for changes to take effect.]
// snippet-keyword:[PHP]
// snippet-sourcesyntax:[php]
// snippet-keyword:[AWS SDK for PHP v3]
// snippet-keyword:[Code Sample]
// snippet-keyword:[Amazon CloudWatch Events]
// snippet-service:[events]
// snippet-sourcetype:[full-example]
// snippet-sourcedate:[2018-12-27]
// snippet-sourceauthor:[jschwarzwalder (AWS)]

