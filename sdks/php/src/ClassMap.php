<?php
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'AdditionalLabelsDetail' => '\\StructType\\AdditionalLabelsDetail',
            'Address' => '\\StructType\\Address',
            'AlcoholDetail' => '\\StructType\\AlcoholDetail',
            'AncillaryFeeAndTax' => '\\StructType\\AncillaryFeeAndTax',
            'BatteryClassificationDetail' => '\\StructType\\BatteryClassificationDetail',
            'BrokerDetail' => '\\StructType\\BrokerDetail',
            'CertificateOfOriginDetail' => '\\StructType\\CertificateOfOriginDetail',
            'CleansedAddressAndLocationDetail' => '\\StructType\\CleansedAddressAndLocationDetail',
            'ClientDetail' => '\\StructType\\ClientDetail',
            'CodAddTransportationChargesDetail' => '\\StructType\\CodAddTransportationChargesDetail',
            'CodDetail' => '\\StructType\\CodDetail',
            'CommercialInvoice' => '\\StructType\\CommercialInvoice',
            'CommercialInvoiceDetail' => '\\StructType\\CommercialInvoiceDetail',
            'CommitDetail' => '\\StructType\\CommitDetail',
            'Commodity' => '\\StructType\\Commodity',
            'ConfigurableLabelReferenceEntry' => '\\StructType\\ConfigurableLabelReferenceEntry',
            'ConsolidationKey' => '\\StructType\\ConsolidationKey',
            'Contact' => '\\StructType\\Contact',
            'ContactAndAddress' => '\\StructType\\ContactAndAddress',
            'ContentRecord' => '\\StructType\\ContentRecord',
            'CurrencyExchangeRate' => '\\StructType\\CurrencyExchangeRate',
            'CustomDeliveryWindowDetail' => '\\StructType\\CustomDeliveryWindowDetail',
            'CustomDocumentDetail' => '\\StructType\\CustomDocumentDetail',
            'CustomLabelBarcodeEntry' => '\\StructType\\CustomLabelBarcodeEntry',
            'CustomLabelBoxEntry' => '\\StructType\\CustomLabelBoxEntry',
            'CustomLabelDetail' => '\\StructType\\CustomLabelDetail',
            'CustomLabelGraphicEntry' => '\\StructType\\CustomLabelGraphicEntry',
            'CustomLabelPosition' => '\\StructType\\CustomLabelPosition',
            'CustomLabelTextBoxEntry' => '\\StructType\\CustomLabelTextBoxEntry',
            'CustomLabelTextEntry' => '\\StructType\\CustomLabelTextEntry',
            'CustomerImageUsage' => '\\StructType\\CustomerImageUsage',
            'CustomerReference' => '\\StructType\\CustomerReference',
            'CustomerSpecifiedLabelDetail' => '\\StructType\\CustomerSpecifiedLabelDetail',
            'CustomsClearanceDetail' => '\\StructType\\CustomsClearanceDetail',
            'CustomsOptionDetail' => '\\StructType\\CustomsOptionDetail',
            'DangerousGoodsContainer' => '\\StructType\\DangerousGoodsContainer',
            'DangerousGoodsDetail' => '\\StructType\\DangerousGoodsDetail',
            'DangerousGoodsShippersDeclarationDetail' => '\\StructType\\DangerousGoodsShippersDeclarationDetail',
            'DangerousGoodsSignatory' => '\\StructType\\DangerousGoodsSignatory',
            'DateRange' => '\\StructType\\DateRange',
            'DelayDetail' => '\\StructType\\DelayDetail',
            'DeliveryOnInvoiceAcceptanceDetail' => '\\StructType\\DeliveryOnInvoiceAcceptanceDetail',
            'DestinationControlDetail' => '\\StructType\\DestinationControlDetail',
            'Dimensions' => '\\StructType\\Dimensions',
            'Distance' => '\\StructType\\Distance',
            'DocTabContent' => '\\StructType\\DocTabContent',
            'DocTabContentBarcoded' => '\\StructType\\DocTabContentBarcoded',
            'DocTabContentZone001' => '\\StructType\\DocTabContentZone001',
            'DocTabZoneSpecification' => '\\StructType\\DocTabZoneSpecification',
            'DocumentFormatOptionsRequested' => '\\StructType\\DocumentFormatOptionsRequested',
            'DocumentLineItem' => '\\StructType\\DocumentLineItem',
            'EMailDetail' => '\\StructType\\EMailDetail',
            'EdtCommodityTax' => '\\StructType\\EdtCommodityTax',
            'EdtExciseCondition' => '\\StructType\\EdtExciseCondition',
            'EdtTaxDetail' => '\\StructType\\EdtTaxDetail',
            'EtdDetail' => '\\StructType\\EtdDetail',
            'ExportDeclarationDetail' => '\\StructType\\ExportDeclarationDetail',
            'ExportDetail' => '\\StructType\\ExportDetail',
            'ExpressFreightDetail' => '\\StructType\\ExpressFreightDetail',
            'ExpressFreightDetailContact' => '\\StructType\\ExpressFreightDetailContact',
            'FlatbedTrailerDetail' => '\\StructType\\FlatbedTrailerDetail',
            'FreightAddressLabelDetail' => '\\StructType\\FreightAddressLabelDetail',
            'FreightBaseCharge' => '\\StructType\\FreightBaseCharge',
            'FreightCommitDetail' => '\\StructType\\FreightCommitDetail',
            'FreightGuaranteeDetail' => '\\StructType\\FreightGuaranteeDetail',
            'FreightRateDetail' => '\\StructType\\FreightRateDetail',
            'FreightRateNotation' => '\\StructType\\FreightRateNotation',
            'FreightServiceCenterDetail' => '\\StructType\\FreightServiceCenterDetail',
            'FreightShipmentDetail' => '\\StructType\\FreightShipmentDetail',
            'FreightShipmentLineItem' => '\\StructType\\FreightShipmentLineItem',
            'FreightSpecialServicePayment' => '\\StructType\\FreightSpecialServicePayment',
            'GeneralAgencyAgreementDetail' => '\\StructType\\GeneralAgencyAgreementDetail',
            'HazardousCommodityContent' => '\\StructType\\HazardousCommodityContent',
            'HazardousCommodityDescription' => '\\StructType\\HazardousCommodityDescription',
            'HazardousCommodityInnerReceptacleDetail' => '\\StructType\\HazardousCommodityInnerReceptacleDetail',
            'HazardousCommodityOptionDetail' => '\\StructType\\HazardousCommodityOptionDetail',
            'HazardousCommodityPackagingDetail' => '\\StructType\\HazardousCommodityPackagingDetail',
            'HazardousCommodityPackingDetail' => '\\StructType\\HazardousCommodityPackingDetail',
            'HazardousCommodityQuantityDetail' => '\\StructType\\HazardousCommodityQuantityDetail',
            'HoldAtLocationDetail' => '\\StructType\\HoldAtLocationDetail',
            'HomeDeliveryPremiumDetail' => '\\StructType\\HomeDeliveryPremiumDetail',
            'InternationalControlledExportDetail' => '\\StructType\\InternationalControlledExportDetail',
            'InternationalTrafficInArmsRegulationsDetail' => '\\StructType\\InternationalTrafficInArmsRegulationsDetail',
            'KeyValueDetail' => '\\StructType\\KeyValueDetail',
            'LabelSpecification' => '\\StructType\\LabelSpecification',
            'LiabilityCoverageDetail' => '\\StructType\\LiabilityCoverageDetail',
            'LinearMeasure' => '\\StructType\\LinearMeasure',
            'Localization' => '\\StructType\\Localization',
            'Measure' => '\\StructType\\Measure',
            'Money' => '\\StructType\\Money',
            'NaftaCertificateOfOriginDetail' => '\\StructType\\NaftaCertificateOfOriginDetail',
            'NaftaCommodityDetail' => '\\StructType\\NaftaCommodityDetail',
            'NaftaProducer' => '\\StructType\\NaftaProducer',
            'NetExplosiveDetail' => '\\StructType\\NetExplosiveDetail',
            'Notification' => '\\StructType\\Notification',
            'NotificationDetail' => '\\StructType\\NotificationDetail',
            'NotificationParameter' => '\\StructType\\NotificationParameter',
            'Op900Detail' => '\\StructType\\Op900Detail',
            'PackageRateDetail' => '\\StructType\\PackageRateDetail',
            'PackageSpecialServicesRequested' => '\\StructType\\PackageSpecialServicesRequested',
            'Party' => '\\StructType\\Party',
            'Payment' => '\\StructType\\Payment',
            'Payor' => '\\StructType\\Payor',
            'PendingShipmentDetail' => '\\StructType\\PendingShipmentDetail',
            'PendingShipmentProcessingOptionsRequested' => '\\StructType\\PendingShipmentProcessingOptionsRequested',
            'PickupDetail' => '\\StructType\\PickupDetail',
            'PriorityAlertDetail' => '\\StructType\\PriorityAlertDetail',
            'RadioactivityDetail' => '\\StructType\\RadioactivityDetail',
            'RadionuclideActivity' => '\\StructType\\RadionuclideActivity',
            'RadionuclideDetail' => '\\StructType\\RadionuclideDetail',
            'RateDiscount' => '\\StructType\\RateDiscount',
            'RateReply' => '\\StructType\\RateReply',
            'RateReplyDetail' => '\\StructType\\RateReplyDetail',
            'RateRequest' => '\\StructType\\RateRequest',
            'RatedPackageDetail' => '\\StructType\\RatedPackageDetail',
            'RatedShipmentDetail' => '\\StructType\\RatedShipmentDetail',
            'Rebate' => '\\StructType\\Rebate',
            'RecipientCustomsId' => '\\StructType\\RecipientCustomsId',
            'RecommendedDocumentSpecification' => '\\StructType\\RecommendedDocumentSpecification',
            'RegulatoryLabelContentDetail' => '\\StructType\\RegulatoryLabelContentDetail',
            'RequestedPackageLineItem' => '\\StructType\\RequestedPackageLineItem',
            'RequestedShipment' => '\\StructType\\RequestedShipment',
            'ReturnAssociationDetail' => '\\StructType\\ReturnAssociationDetail',
            'ReturnEMailDetail' => '\\StructType\\ReturnEMailDetail',
            'ReturnInstructionsDetail' => '\\StructType\\ReturnInstructionsDetail',
            'ReturnShipmentDetail' => '\\StructType\\ReturnShipmentDetail',
            'Rma' => '\\StructType\\Rma',
            'ServiceSubOptionDetail' => '\\StructType\\ServiceSubOptionDetail',
            'ShipmentAuthorizationDetail' => '\\StructType\\ShipmentAuthorizationDetail',
            'ShipmentConfigurationData' => '\\StructType\\ShipmentConfigurationData',
            'ShipmentDryIceDetail' => '\\StructType\\ShipmentDryIceDetail',
            'ShipmentDryIceProcessingOptionsRequested' => '\\StructType\\ShipmentDryIceProcessingOptionsRequested',
            'ShipmentEventNotificationDetail' => '\\StructType\\ShipmentEventNotificationDetail',
            'ShipmentEventNotificationSpecification' => '\\StructType\\ShipmentEventNotificationSpecification',
            'ShipmentLegRateDetail' => '\\StructType\\ShipmentLegRateDetail',
            'ShipmentNotificationFormatSpecification' => '\\StructType\\ShipmentNotificationFormatSpecification',
            'ShipmentRateDetail' => '\\StructType\\ShipmentRateDetail',
            'ShipmentSpecialServicesRequested' => '\\StructType\\ShipmentSpecialServicesRequested',
            'ShipmentVariationOptionDetail' => '\\StructType\\ShipmentVariationOptionDetail',
            'ShippingDocumentDispositionDetail' => '\\StructType\\ShippingDocumentDispositionDetail',
            'ShippingDocumentEMailDetail' => '\\StructType\\ShippingDocumentEMailDetail',
            'ShippingDocumentEMailRecipient' => '\\StructType\\ShippingDocumentEMailRecipient',
            'ShippingDocumentFormat' => '\\StructType\\ShippingDocumentFormat',
            'ShippingDocumentPrintDetail' => '\\StructType\\ShippingDocumentPrintDetail',
            'ShippingDocumentSpecification' => '\\StructType\\ShippingDocumentSpecification',
            'SignatureOptionDetail' => '\\StructType\\SignatureOptionDetail',
            'SmartPostShipmentDetail' => '\\StructType\\SmartPostShipmentDetail',
            'SmartPostShipmentProcessingOptionsRequested' => '\\StructType\\SmartPostShipmentProcessingOptionsRequested',
            'Surcharge' => '\\StructType\\Surcharge',
            'Tax' => '\\StructType\\Tax',
            'TaxpayerIdentification' => '\\StructType\\TaxpayerIdentification',
            'TrackingId' => '\\StructType\\TrackingId',
            'TransactionDetail' => '\\StructType\\TransactionDetail',
            'UploadDocumentReferenceDetail' => '\\StructType\\UploadDocumentReferenceDetail',
            'VariableHandlingChargeDetail' => '\\StructType\\VariableHandlingChargeDetail',
            'VariableHandlingCharges' => '\\StructType\\VariableHandlingCharges',
            'Volume' => '\\StructType\\Volume',
            'Weight' => '\\StructType\\Weight',
            'WebAuthenticationDetail' => '\\StructType\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\StructType\\WebAuthenticationCredential',
            'VersionId' => '\\StructType\\VersionId',
        );
    }
}