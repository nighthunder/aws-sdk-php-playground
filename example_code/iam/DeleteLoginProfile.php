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
// snippet-start:[iam.php.delete_login_profile.complete]
// snippet-start:[iam.php.delete_login_profile.import]

require '../../vendor/autoload.php';

use Aws\Iam\IamClient; 
use Aws\Exception\AwsException;
// snippet-end:[iam.php.delete_login_profile.import]

/**
 * Deletes the password for the specified user, which terminates the user's ability
 * to access AWS services through the AWS Management Console.
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */
 
//Create an IAM Client
// snippet-start:[iam.php.delete_login_profile.main]
$client = new IamClient([
    'profile' => 'default',
    'region' => 'us-west-2',
    'version' => '2010-05-08'
]);

try {
    $result = $client->deleteLoginProfile(array(
        // UserName is required
        'UserName' => 'string',
    ));
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    error_log($e->getMessage());
}
 
 
// snippet-end:[iam.php.delete_login_profile.main]
// snippet-end:[iam.php.delete_login_profile.complete]
// snippet-comment:[These are tags for the AWS doc team's sample catalog. Do not remove.]
// snippet-sourcedescription:[DeleteLoginProfile.php demonstrates how to delete the password for an IAM user, and terminate their access to the AWS Management Console.]
// snippet-keyword:[PHP]
// snippet-sourcesyntax:[php]
// snippet-keyword:[AWS SDK for PHP v3]
// snippet-keyword:[Code Sample]
// snippet-keyword:[AWS Identity and Access Management (IAM)]
// snippet-service:[iam]
// snippet-sourcetype:[full-example]
// snippet-sourcedate:[2018-09-20]
// snippet-sourceauthor:[jschwarzwalder (AWS)]

