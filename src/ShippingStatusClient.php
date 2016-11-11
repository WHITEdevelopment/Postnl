<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's shipping status service.
 */
class ShippingStatusClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/ShippingStatusWebService/1_6/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/ShippingStatusWebService/1_6/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes
        = array(
            'CurrentStatusRequest',
            'Message',
            'RequestCustomer',
            'RequestShipment',
            'CurrentStatusResponse',
            'ArrayOfCurrentStatusResponseShipment',
            'CurrentStatusResponseShipment',
            'ArrayOfResponseAddress',
            'ResponseAddress',
            'ArrayOfResponseAmount',
            'ResponseAmount',
            'ResponseDimension',
            'ResponseExpectation',
            'ArrayOfResponseGroup',
            'ResponseGroup',
            'ArrayOfResponseProductOption',
            'ResponseProductOption',
            'ResponseStatus',
            'ArrayOfWarning',
            'Warning',
            'CompleteStatusRequest',
            'CompleteStatusResponse',
            'ArrayOfCompleteStatusResponseShipment',
            'CompleteStatusResponseShipment',
            'ResponseCustomer',
            'ArrayOfCompleteStatusResponseEvent',
            'CompleteStatusResponseEvent',
            'ArrayOfCompleteStatusResponseOldStatus',
            'CompleteStatusResponseOldStatus',
            'CurrentStatusByReferenceRequest',
            'CompleteStatusByReferenceRequest',
            'CurrentStatusByStatusRequest',
            'RequestShipmentStatus',
            'CurrentStatusByPhaseRequest',
            'RequestShipmentPhase',
            'GetSignatureRequest',
            'RequestSignature',
            'GetSignatureResponse',
            'ArrayOfGetSignatureResponseSignature',
            'GetSignatureResponseSignature',
        );

    /**
     * @param ComplexTypes\CurrentStatusRequest $CurrentStatus
     *
     * @return ComplexTypes\CurrentStatusResponse
     */
    public function currentStatus(ComplexTypes\CurrentStatusRequest $CurrentStatus)
    {
        return $this->__soapCall('CurrentStatus', array($CurrentStatus));
    }

    /**
     * @param ComplexTypes\CompleteStatusRequest $CompleteStatus
     *
     * @return ComplexTypes\CompleteStatusResponse
     */
    public function completeStatus(ComplexTypes\CompleteStatusRequest $CompleteStatus)
    {
        return $this->__soapCall('CompleteStatus', array($CompleteStatus));
    }

    /**
     * @param ComplexTypes\CurrentStatusByReferenceRequest $CurrentStatusByReference
     *
     * @return ComplexTypes\CurrentStatusResponse
     */
    public function currentStatusByReference(ComplexTypes\CurrentStatusByReferenceRequest $CurrentStatusByReference)
    {
        return $this->__soapCall('CurrentStatusByReference', array($CurrentStatusByReference));
    }

    /**
     * @param ComplexTypes\CompleteStatusByReferenceRequest $CompleteStatusByReference
     *
     * @return ComplexTypes\CompleteStatusResponse
     */
    public function completeStatusByReference(ComplexTypes\CompleteStatusByReferenceRequest $CompleteStatusByReference)
    {
        return $this->__soapCall('CompleteStatusByReference', array($CompleteStatusByReference));
    }

    /**
     * @param ComplexTypes\CurrentStatusByStatusRequest $CurrentStatusByStatus
     *
     * @return ComplexTypes\CurrentStatusResponse
     */
    public function currentStatusByStatus(ComplexTypes\CurrentStatusByStatusRequest $CurrentStatusByStatus)
    {
        return $this->__soapCall('CurrentStatusByStatus', array($CurrentStatusByStatus));
    }

    /**
     * @param ComplexTypes\CurrentStatusByPhaseRequest $CurrentStatusByPhase
     *
     * @return ComplexTypes\CurrentStatusResponse
     */
    public function currentStatusByPhase(ComplexTypes\CurrentStatusByPhaseRequest $CurrentStatusByPhase)
    {
        return $this->__soapCall('CurrentStatusByPhase', array($CurrentStatusByPhase));
    }

    /**
     * @param ComplexTypes\GetSignatureRequest $GetSignature
     *
     * @return ComplexTypes\GetSignatureResponse
     */
    public function getSignature(ComplexTypes\GetSignatureRequest $GetSignature)
    {
        return $this->__soapCall('GetSignature', array($GetSignature));
    }
}
