<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's location service.
 */
class LocationClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v2_1/locations/soap.wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v2_1/locations/soap.wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes
        = array(
            'Address',
            'ArrayOfExceptionData',
            'ArrayOfResponseLocation',
            'ArrayOfWarning',
            'BaseLocation',
            'CifException',
            'Coordinate',
            'ExceptionData',
            'GetLocationRequest',
            'GetLocationsInAreaRequest',
            'GetLocationsResponse',
            'GetNearestLocationsRequest',
            'Location',
            'LocationArea',
            'Message',
            'OpeningHours',
            'ResponseLocation',
            'Warning',
        );

    /**
     * @param ComplexTypes\GetNearestLocationsRequest $getNearestLocations
     *
     * @return ComplexTypes\GetLocationsResult
     */
    public function getNearestLocation(ComplexTypes\GetNearestLocationsRequest $getNearestLocations)
    {
        return $this->__soapCall('GetNearestLocations', array($getNearestLocations));
    }

    /**
     * @param ComplexTypes\GetLocationRequest $getLocations
     *
     * @return ComplexTypes\GetLocationsResponse
     */
    public function getLocation(ComplexTypes\GetLocationRequest $getLocations)
    {
        return $this->__soapCall('GetLocation', array($getLocations));
    }
}
