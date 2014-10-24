<?php return [
  'metadata' => [
    'apiVersion' => '2014-06-30',
    'endpointPrefix' => 'cognito-sync',
    'jsonVersion' => '1.1',
    'serviceFullName' => 'Amazon Cognito Sync',
    'signatureVersion' => 'v4',
    'protocol' => 'rest-json',
  ],
  'operations' => [
    'DeleteDataset' => [
      'name' => 'DeleteDataset',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'DeleteDatasetRequest',
      ],
      'output' => [
        'shape' => 'DeleteDatasetResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeDataset' => [
      'name' => 'DescribeDataset',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'DescribeDatasetRequest',
      ],
      'output' => [
        'shape' => 'DescribeDatasetResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeIdentityPoolUsage' => [
      'name' => 'DescribeIdentityPoolUsage',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/identitypools/{IdentityPoolId}',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'DescribeIdentityPoolUsageRequest',
      ],
      'output' => [
        'shape' => 'DescribeIdentityPoolUsageResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DescribeIdentityUsage' => [
      'name' => 'DescribeIdentityUsage',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'DescribeIdentityUsageRequest',
      ],
      'output' => [
        'shape' => 'DescribeIdentityUsageResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListDatasets' => [
      'name' => 'ListDatasets',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'ListDatasetsRequest',
      ],
      'output' => [
        'shape' => 'ListDatasetsResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListIdentityPoolUsage' => [
      'name' => 'ListIdentityPoolUsage',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/identitypools',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'ListIdentityPoolUsageRequest',
      ],
      'output' => [
        'shape' => 'ListIdentityPoolUsageResponse',
      ],
      'errors' => [
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListRecords' => [
      'name' => 'ListRecords',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}/records',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'ListRecordsRequest',
      ],
      'output' => [
        'shape' => 'ListRecordsResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateRecords' => [
      'name' => 'UpdateRecords',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'UpdateRecordsRequest',
      ],
      'output' => [
        'shape' => 'UpdateRecordsResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'Boolean' => [
      'type' => 'boolean',
    ],
    'ClientContext' => [
      'type' => 'string',
    ],
    'Dataset' => [
      'type' => 'structure',
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'DatasetName' => [
          'shape' => 'DatasetName',
        ],
        'CreationDate' => [
          'shape' => 'Date',
        ],
        'LastModifiedDate' => [
          'shape' => 'Date',
        ],
        'LastModifiedBy' => [
          'shape' => 'String',
        ],
        'DataStorage' => [
          'shape' => 'Long',
        ],
        'NumRecords' => [
          'shape' => 'Long',
        ],
      ],
    ],
    'DatasetList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Dataset',
      ],
    ],
    'DatasetName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
      'pattern' => '[a-zA-Z0-9_.:-]+',
    ],
    'Date' => [
      'type' => 'timestamp',
    ],
    'DeleteDatasetRequest' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
        'IdentityId',
        'DatasetName',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
          'location' => 'uri',
          'locationName' => 'IdentityPoolId',
        ],
        'IdentityId' => [
          'shape' => 'IdentityId',
          'location' => 'uri',
          'locationName' => 'IdentityId',
        ],
        'DatasetName' => [
          'shape' => 'DatasetName',
          'location' => 'uri',
          'locationName' => 'DatasetName',
        ],
      ],
    ],
    'DeleteDatasetResponse' => [
      'type' => 'structure',
      'members' => [
        'Dataset' => [
          'shape' => 'Dataset',
        ],
      ],
    ],
    'DescribeDatasetRequest' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
        'IdentityId',
        'DatasetName',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
          'location' => 'uri',
          'locationName' => 'IdentityPoolId',
        ],
        'IdentityId' => [
          'shape' => 'IdentityId',
          'location' => 'uri',
          'locationName' => 'IdentityId',
        ],
        'DatasetName' => [
          'shape' => 'DatasetName',
          'location' => 'uri',
          'locationName' => 'DatasetName',
        ],
      ],
    ],
    'DescribeDatasetResponse' => [
      'type' => 'structure',
      'members' => [
        'Dataset' => [
          'shape' => 'Dataset',
        ],
      ],
    ],
    'DescribeIdentityPoolUsageRequest' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
          'location' => 'uri',
          'locationName' => 'IdentityPoolId',
        ],
      ],
    ],
    'DescribeIdentityPoolUsageResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityPoolUsage' => [
          'shape' => 'IdentityPoolUsage',
        ],
      ],
    ],
    'DescribeIdentityUsageRequest' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
        'IdentityId',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
          'location' => 'uri',
          'locationName' => 'IdentityPoolId',
        ],
        'IdentityId' => [
          'shape' => 'IdentityId',
          'location' => 'uri',
          'locationName' => 'IdentityId',
        ],
      ],
    ],
    'DescribeIdentityUsageResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityUsage' => [
          'shape' => 'IdentityUsage',
        ],
      ],
    ],
    'ExceptionMessage' => [
      'type' => 'string',
    ],
    'IdentityId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 50,
      'pattern' => '[\\w-]+:[0-9a-f-]+',
    ],
    'IdentityPoolId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 50,
      'pattern' => '[\\w-]+:[0-9a-f-]+',
    ],
    'IdentityPoolUsage' => [
      'type' => 'structure',
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'SyncSessionsCount' => [
          'shape' => 'Long',
        ],
        'DataStorage' => [
          'shape' => 'Long',
        ],
        'LastModifiedDate' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'IdentityPoolUsageList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'IdentityPoolUsage',
      ],
    ],
    'IdentityUsage' => [
      'type' => 'structure',
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'LastModifiedDate' => [
          'shape' => 'Date',
        ],
        'DatasetCount' => [
          'shape' => 'Integer',
        ],
        'DataStorage' => [
          'shape' => 'Long',
        ],
      ],
    ],
    'Integer' => [
      'type' => 'integer',
    ],
    'IntegerString' => [
      'type' => 'integer',
    ],
    'InternalErrorException' => [
      'type' => 'structure',
      'required' => [
        'message',
      ],
      'members' => [
        'message' => [
          'shape' => 'ExceptionMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 500,
      ],
      'exception' => true,
    ],
    'InvalidParameterException' => [
      'type' => 'structure',
      'required' => [
        'message',
      ],
      'members' => [
        'message' => [
          'shape' => 'ExceptionMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'LimitExceededException' => [
      'type' => 'structure',
      'required' => [
        'message',
      ],
      'members' => [
        'message' => [
          'shape' => 'ExceptionMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'ListDatasetsRequest' => [
      'type' => 'structure',
      'required' => [
        'IdentityId',
        'IdentityPoolId',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
          'location' => 'uri',
          'locationName' => 'IdentityPoolId',
        ],
        'IdentityId' => [
          'shape' => 'IdentityId',
          'location' => 'uri',
          'locationName' => 'IdentityId',
        ],
        'NextToken' => [
          'shape' => 'String',
          'location' => 'querystring',
          'locationName' => 'nextToken',
        ],
        'MaxResults' => [
          'shape' => 'IntegerString',
          'location' => 'querystring',
          'locationName' => 'maxResults',
        ],
      ],
    ],
    'ListDatasetsResponse' => [
      'type' => 'structure',
      'members' => [
        'Datasets' => [
          'shape' => 'DatasetList',
        ],
        'Count' => [
          'shape' => 'Integer',
        ],
        'NextToken' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ListIdentityPoolUsageRequest' => [
      'type' => 'structure',
      'members' => [
        'NextToken' => [
          'shape' => 'String',
          'location' => 'querystring',
          'locationName' => 'nextToken',
        ],
        'MaxResults' => [
          'shape' => 'IntegerString',
          'location' => 'querystring',
          'locationName' => 'maxResults',
        ],
      ],
    ],
    'ListIdentityPoolUsageResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityPoolUsages' => [
          'shape' => 'IdentityPoolUsageList',
        ],
        'MaxResults' => [
          'shape' => 'Integer',
        ],
        'Count' => [
          'shape' => 'Integer',
        ],
        'NextToken' => [
          'shape' => 'String',
        ],
      ],
    ],
    'ListRecordsRequest' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
        'IdentityId',
        'DatasetName',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
          'location' => 'uri',
          'locationName' => 'IdentityPoolId',
        ],
        'IdentityId' => [
          'shape' => 'IdentityId',
          'location' => 'uri',
          'locationName' => 'IdentityId',
        ],
        'DatasetName' => [
          'shape' => 'DatasetName',
          'location' => 'uri',
          'locationName' => 'DatasetName',
        ],
        'LastSyncCount' => [
          'shape' => 'Long',
          'location' => 'querystring',
          'locationName' => 'lastSyncCount',
        ],
        'NextToken' => [
          'shape' => 'String',
          'location' => 'querystring',
          'locationName' => 'nextToken',
        ],
        'MaxResults' => [
          'shape' => 'IntegerString',
          'location' => 'querystring',
          'locationName' => 'maxResults',
        ],
        'SyncSessionToken' => [
          'shape' => 'SyncSessionToken',
          'location' => 'querystring',
          'locationName' => 'syncSessionToken',
        ],
      ],
    ],
    'ListRecordsResponse' => [
      'type' => 'structure',
      'members' => [
        'Records' => [
          'shape' => 'RecordList',
        ],
        'NextToken' => [
          'shape' => 'String',
        ],
        'Count' => [
          'shape' => 'Integer',
        ],
        'DatasetSyncCount' => [
          'shape' => 'Long',
        ],
        'LastModifiedBy' => [
          'shape' => 'String',
        ],
        'MergedDatasetNames' => [
          'shape' => 'MergedDatasetNameList',
        ],
        'DatasetExists' => [
          'shape' => 'Boolean',
        ],
        'DatasetDeletedAfterRequestedSyncCount' => [
          'shape' => 'Boolean',
        ],
        'SyncSessionToken' => [
          'shape' => 'String',
        ],
      ],
    ],
    'Long' => [
      'type' => 'long',
    ],
    'MergedDatasetNameList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'String',
      ],
    ],
    'NotAuthorizedException' => [
      'type' => 'structure',
      'required' => [
        'message',
      ],
      'members' => [
        'message' => [
          'shape' => 'ExceptionMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 403,
      ],
      'exception' => true,
    ],
    'Operation' => [
      'type' => 'string',
      'enum' => [
        'replace',
        'remove',
      ],
    ],
    'Record' => [
      'type' => 'structure',
      'members' => [
        'Key' => [
          'shape' => 'RecordKey',
        ],
        'Value' => [
          'shape' => 'RecordValue',
        ],
        'SyncCount' => [
          'shape' => 'Long',
        ],
        'LastModifiedDate' => [
          'shape' => 'Date',
        ],
        'LastModifiedBy' => [
          'shape' => 'String',
        ],
        'DeviceLastModifiedDate' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'RecordKey' => [
      'type' => 'string',
      'min' => 1,
      'max' => 1024,
    ],
    'RecordList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Record',
      ],
    ],
    'RecordPatch' => [
      'type' => 'structure',
      'required' => [
        'Op',
        'Key',
        'SyncCount',
      ],
      'members' => [
        'Op' => [
          'shape' => 'Operation',
        ],
        'Key' => [
          'shape' => 'RecordKey',
        ],
        'Value' => [
          'shape' => 'RecordValue',
        ],
        'SyncCount' => [
          'shape' => 'Long',
        ],
        'DeviceLastModifiedDate' => [
          'shape' => 'Date',
        ],
      ],
    ],
    'RecordPatchList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'RecordPatch',
      ],
    ],
    'RecordValue' => [
      'type' => 'string',
      'max' => 1048575,
    ],
    'ResourceConflictException' => [
      'type' => 'structure',
      'required' => [
        'message',
      ],
      'members' => [
        'message' => [
          'shape' => 'ExceptionMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'ResourceNotFoundException' => [
      'type' => 'structure',
      'required' => [
        'message',
      ],
      'members' => [
        'message' => [
          'shape' => 'ExceptionMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'String' => [
      'type' => 'string',
    ],
    'SyncSessionToken' => [
      'type' => 'string',
    ],
    'TooManyRequestsException' => [
      'type' => 'structure',
      'required' => [
        'message',
      ],
      'members' => [
        'message' => [
          'shape' => 'ExceptionMessage',
        ],
      ],
      'error' => [
        'httpStatusCode' => 429,
      ],
      'exception' => true,
    ],
    'UpdateRecordsRequest' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
        'IdentityId',
        'DatasetName',
        'SyncSessionToken',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
          'location' => 'uri',
          'locationName' => 'IdentityPoolId',
        ],
        'IdentityId' => [
          'shape' => 'IdentityId',
          'location' => 'uri',
          'locationName' => 'IdentityId',
        ],
        'DatasetName' => [
          'shape' => 'DatasetName',
          'location' => 'uri',
          'locationName' => 'DatasetName',
        ],
        'RecordPatches' => [
          'shape' => 'RecordPatchList',
        ],
        'SyncSessionToken' => [
          'shape' => 'SyncSessionToken',
        ],
        'ClientContext' => [
          'shape' => 'ClientContext',
          'location' => 'header',
          'locationName' => 'x-amz-Client-Context',
        ],
      ],
    ],
    'UpdateRecordsResponse' => [
      'type' => 'structure',
      'members' => [
        'Records' => [
          'shape' => 'RecordList',
        ],
      ],
    ],
  ],
];