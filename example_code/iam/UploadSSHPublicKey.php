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
// snippet-start:[iam.php.upload_ssh_public_key.complete]
// snippet-start:[iam.php.upload_ssh_public_key.import]

require '../../vendor/autoload.php';

use Aws\Iam\IamClient; 
use Aws\Exception\AwsException;
// snippet-end:[iam.php.upload_ssh_public_key.import]

/**
 * Uploads an SSH public key and associates it with the specified IAM user.
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */
 
//Create an IAM Client
// snippet-start:[iam.php.upload_ssh_public_key.main]
$client = new IamClient([
    'profile' => 'default',
    'region' => 'us-west-2',
    'version' => '2010-05-08'
]);

try {
    $result = $client->uploadSSHPublicKey([
        'SSHPublicKeyBody' => 'SSH_KEY', // REQUIRED
        'UserName' => 'IAM_USER_NAME', // REQUIRED
    ]);
    var_dump($result);
} catch (AwsException $e) {
    // output error message if fails
    error_log($e->getMessage());
}
 
 
// snippet-end:[iam.php.upload_ssh_public_key.main]
// snippet-end:[iam.php.upload_ssh_public_key.complete]
// snippet-comment:[These are tags for the AWS doc team's sample catalog. Do not remove.]
// snippet-sourcedescription:[UploadSSHPublicKey.php demonstrates how upload a SSH public key and associate it with an IAM user. ]
// snippet-keyword:[PHP]
// snippet-sourcesyntax:[php]
// snippet-keyword:[AWS SDK for PHP v3]
// snippet-keyword:[Code Sample]
// snippet-keyword:[AWS Identity and Access Management (IAM)]
// snippet-service:[iam]
// snippet-sourcetype:[full-example]
// snippet-sourcedate:[2018-09-20]
// snippet-sourceauthor:[jschwarzwalder (AWS)]

