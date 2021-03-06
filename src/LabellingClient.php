<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's labelling service.
 */
class LabellingClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://api.postnl.nl/shipment/v2_1/label/soap.wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://api-sandbox.postnl.nl/shipment/v2_1/label/soap.wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes
        = array(
            'GenerateLabelRequest',
            'Customer',
            'Address',
            'Message',
            'ArrayOfShipment',
            'Shipment',
            'ArrayOfAddress',
            'ArrayOfAmount',
            'Amount',
            'ArrayOfContact',
            'Contact',
            'Customs',
            'ArrayOfContent',
            'Content',
            'Dimension',
            'ArrayOfGroup',
            'Group',
            'ArrayOfProductOption',
            'ProductOption',
            'GenerateLabelResponse',
            'ArrayOfMergedLabel',
            'MergedLabel',
            'ResponseShipment',
            'ArrayOfLabel',
            'Label',
            'ArrayOfResponseShipment',
            'ArrayOfWarning',
            'Warning',
        );

    /**
     * @param ComplexTypes\GenerateLabelRequest $GenerateLabel
     *
     * @return ComplexTypes\ResponseShipment
     */
    public function generateLabel(ComplexTypes\GenerateLabelRequest $GenerateLabel)
    {
        return $this->__soapCall('GenerateLabel', array($GenerateLabel));
    }

    /**
     * @param ComplexTypes\GenerateLabelRequest $GenerateLabel
     *
     * @return ComplexTypes\ResponseShipment
     */
    public function generateLabelWithoutConfirm(ComplexTypes\GenerateLabelRequest $GenerateLabel)
    {
        return $this->__soapCall('GenerateLabelWithoutConfirm', array($GenerateLabel));
    }
}
