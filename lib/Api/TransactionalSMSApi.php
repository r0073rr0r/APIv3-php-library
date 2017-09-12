<?php
/**
 * TransactionalSMSApi
 * PHP version 5
 *
 * @category Class
 * @package  Sendinblue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Sendinblue\Client\Api;

use \Sendinblue\Client\ApiClient;
use \Sendinblue\Client\ApiException;
use \Sendinblue\Client\Configuration;
use \Sendinblue\Client\ObjectSerializer;

/**
 * TransactionalSMSApi Class Doc Comment
 *
 * @category Class
 * @package  Sendinblue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionalSMSApi
{
    /**
     * API Client
     *
     * @var \Sendinblue\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Sendinblue\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Sendinblue\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Sendinblue\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Sendinblue\Client\ApiClient $apiClient set the API client
     *
     * @return TransactionalSMSApi
     */
    public function setApiClient(\Sendinblue\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getSmsEvents
     *
     * Get all the SMS activity (unaggregated events)
     *
     * @param int $limit Number of documents per page (optional, default to 50)
     * @param \DateTime $startDate Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $endDate Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $offset Index of the first document of the page (optional, default to 0)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; (optional)
     * @param string $phoneNumber Filter the report for a specific phone number (optional)
     * @param string $event Filter the report for specific events (optional)
     * @param string $tags Filter the report for specific tags passed as a serialized urlencoded array (optional)
     * @throws \Sendinblue\Client\ApiException on non-2xx response
     * @return \Sendinblue\Client\Model\GetSmsEventReport
     */
    public function getSmsEvents($limit = '50', $startDate = null, $endDate = null, $offset = '0', $days = null, $phoneNumber = null, $event = null, $tags = null)
    {
        list($response) = $this->getSmsEventsWithHttpInfo($limit, $startDate, $endDate, $offset, $days, $phoneNumber, $event, $tags);
        return $response;
    }

    /**
     * Operation getSmsEventsWithHttpInfo
     *
     * Get all the SMS activity (unaggregated events)
     *
     * @param int $limit Number of documents per page (optional, default to 50)
     * @param \DateTime $startDate Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $endDate Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $offset Index of the first document of the page (optional, default to 0)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; (optional)
     * @param string $phoneNumber Filter the report for a specific phone number (optional)
     * @param string $event Filter the report for specific events (optional)
     * @param string $tags Filter the report for specific tags passed as a serialized urlencoded array (optional)
     * @throws \Sendinblue\Client\ApiException on non-2xx response
     * @return array of \Sendinblue\Client\Model\GetSmsEventReport, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSmsEventsWithHttpInfo($limit = '50', $startDate = null, $endDate = null, $offset = '0', $days = null, $phoneNumber = null, $event = null, $tags = null)
    {
        if (!is_null($limit) && ($limit > 100)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TransactionalSMSApi.getSmsEvents, must be smaller than or equal to 100.');
        }

        // parse inputs
        $resourcePath = "/transactionalSMS/statistics/events";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($startDate !== null) {
            $queryParams['startDate'] = $this->apiClient->getSerializer()->toQueryValue($startDate);
        }
        // query params
        if ($endDate !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($endDate);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($days !== null) {
            $queryParams['days'] = $this->apiClient->getSerializer()->toQueryValue($days);
        }
        // query params
        if ($phoneNumber !== null) {
            $queryParams['phoneNumber'] = $this->apiClient->getSerializer()->toQueryValue($phoneNumber);
        }
        // query params
        if ($event !== null) {
            $queryParams['event'] = $this->apiClient->getSerializer()->toQueryValue($event);
        }
        // query params
        if ($tags !== null) {
            $queryParams['tags'] = $this->apiClient->getSerializer()->toQueryValue($tags);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Sendinblue\Client\Model\GetSmsEventReport',
                '/transactionalSMS/statistics/events'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Sendinblue\Client\Model\GetSmsEventReport', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Sendinblue\Client\Model\GetSmsEventReport', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Sendinblue\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTransacAggregatedSmsReport
     *
     * Get your SMS activity aggregated over a period of time
     *
     * @param \DateTime $startDate Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $endDate Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with startDate and endDate (optional)
     * @param string $tag Filter on a tag (optional)
     * @throws \Sendinblue\Client\ApiException on non-2xx response
     * @return \Sendinblue\Client\Model\GetTransacAggregatedSmsReport
     */
    public function getTransacAggregatedSmsReport($startDate = null, $endDate = null, $days = null, $tag = null)
    {
        list($response) = $this->getTransacAggregatedSmsReportWithHttpInfo($startDate, $endDate, $days, $tag);
        return $response;
    }

    /**
     * Operation getTransacAggregatedSmsReportWithHttpInfo
     *
     * Get your SMS activity aggregated over a period of time
     *
     * @param \DateTime $startDate Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $endDate Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with startDate and endDate (optional)
     * @param string $tag Filter on a tag (optional)
     * @throws \Sendinblue\Client\ApiException on non-2xx response
     * @return array of \Sendinblue\Client\Model\GetTransacAggregatedSmsReport, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransacAggregatedSmsReportWithHttpInfo($startDate = null, $endDate = null, $days = null, $tag = null)
    {
        // parse inputs
        $resourcePath = "/transactionalSMS/statistics/aggregatedReport";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($startDate !== null) {
            $queryParams['startDate'] = $this->apiClient->getSerializer()->toQueryValue($startDate);
        }
        // query params
        if ($endDate !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($endDate);
        }
        // query params
        if ($days !== null) {
            $queryParams['days'] = $this->apiClient->getSerializer()->toQueryValue($days);
        }
        // query params
        if ($tag !== null) {
            $queryParams['tag'] = $this->apiClient->getSerializer()->toQueryValue($tag);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Sendinblue\Client\Model\GetTransacAggregatedSmsReport',
                '/transactionalSMS/statistics/aggregatedReport'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Sendinblue\Client\Model\GetTransacAggregatedSmsReport', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Sendinblue\Client\Model\GetTransacAggregatedSmsReport', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Sendinblue\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTransacSmsReport
     *
     * Get your SMS activity aggregated per day
     *
     * @param \DateTime $startDate Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $endDate Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; (optional)
     * @param string $tag Filter on a tag (optional)
     * @throws \Sendinblue\Client\ApiException on non-2xx response
     * @return \Sendinblue\Client\Model\GetTransacSmsReport
     */
    public function getTransacSmsReport($startDate = null, $endDate = null, $days = null, $tag = null)
    {
        list($response) = $this->getTransacSmsReportWithHttpInfo($startDate, $endDate, $days, $tag);
        return $response;
    }

    /**
     * Operation getTransacSmsReportWithHttpInfo
     *
     * Get your SMS activity aggregated per day
     *
     * @param \DateTime $startDate Mandatory if endDate is used. Starting date (YYYY-MM-DD) of the report (optional)
     * @param \DateTime $endDate Mandatory if startDate is used. Ending date (YYYY-MM-DD) of the report (optional)
     * @param int $days Number of days in the past including today (positive integer). Not compatible with &#39;startDate&#39; and &#39;endDate&#39; (optional)
     * @param string $tag Filter on a tag (optional)
     * @throws \Sendinblue\Client\ApiException on non-2xx response
     * @return array of \Sendinblue\Client\Model\GetTransacSmsReport, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransacSmsReportWithHttpInfo($startDate = null, $endDate = null, $days = null, $tag = null)
    {
        // parse inputs
        $resourcePath = "/transactionalSMS/statistics/reports";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($startDate !== null) {
            $queryParams['startDate'] = $this->apiClient->getSerializer()->toQueryValue($startDate);
        }
        // query params
        if ($endDate !== null) {
            $queryParams['endDate'] = $this->apiClient->getSerializer()->toQueryValue($endDate);
        }
        // query params
        if ($days !== null) {
            $queryParams['days'] = $this->apiClient->getSerializer()->toQueryValue($days);
        }
        // query params
        if ($tag !== null) {
            $queryParams['tag'] = $this->apiClient->getSerializer()->toQueryValue($tag);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Sendinblue\Client\Model\GetTransacSmsReport',
                '/transactionalSMS/statistics/reports'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Sendinblue\Client\Model\GetTransacSmsReport', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Sendinblue\Client\Model\GetTransacSmsReport', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Sendinblue\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sendTransacSms
     *
     * Send the SMS campaign to the specified mobile number
     *
     * @param \Sendinblue\Client\Model\SendTransacSms $sendTransacSms Values to send a transactional SMS (required)
     * @throws \Sendinblue\Client\ApiException on non-2xx response
     * @return \Sendinblue\Client\Model\SendSms
     */
    public function sendTransacSms($sendTransacSms)
    {
        list($response) = $this->sendTransacSmsWithHttpInfo($sendTransacSms);
        return $response;
    }

    /**
     * Operation sendTransacSmsWithHttpInfo
     *
     * Send the SMS campaign to the specified mobile number
     *
     * @param \Sendinblue\Client\Model\SendTransacSms $sendTransacSms Values to send a transactional SMS (required)
     * @throws \Sendinblue\Client\ApiException on non-2xx response
     * @return array of \Sendinblue\Client\Model\SendSms, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendTransacSmsWithHttpInfo($sendTransacSms)
    {
        // verify the required parameter 'sendTransacSms' is set
        if ($sendTransacSms === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sendTransacSms when calling sendTransacSms');
        }
        // parse inputs
        $resourcePath = "/transactionalSMS/sms";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($sendTransacSms)) {
            $_tempBody = $sendTransacSms;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Sendinblue\Client\Model\SendSms',
                '/transactionalSMS/sms'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Sendinblue\Client\Model\SendSms', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Sendinblue\Client\Model\SendSms', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Sendinblue\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Sendinblue\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
