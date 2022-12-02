<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

class StructuredRemittanceInformation
{
    /**
     * @var null|CreditorReferenceInformation
     */
    private $creditorReferenceInformation;

    /**
     * @var null|string
     */
    private $additionalRemittanceInformation;

    private ?ReferredDocumentInformation $referredDocumentInformation = null;
    private ?ReferredDocumentAmount $referredDocumentAmount = null;

    public function getAdditionalRemittanceInformation(): ?string
    {
        return $this->additionalRemittanceInformation;
    }

    public function setAdditionalRemittanceInformation(?string $additionalRemittanceInformation): void
    {
        $this->additionalRemittanceInformation = $additionalRemittanceInformation;
    }

    public function getCreditorReferenceInformation(): ?CreditorReferenceInformation
    {
        return $this->creditorReferenceInformation;
    }

    public function setCreditorReferenceInformation(?CreditorReferenceInformation $creditorReferenceInformation): void
    {
        $this->creditorReferenceInformation = $creditorReferenceInformation;
    }

    public function getReferredDocumentInformation(): ?ReferredDocumentInformation
    {
        return $this->referredDocumentInformation;
    }

    public function setReferredDocumentInformation(?ReferredDocumentInformation $referredDocumentInformation): void
    {
        $this->referredDocumentInformation = $referredDocumentInformation;
    }

    public function getReferredDocumentAmount(): ?ReferredDocumentAmount
    {
        return $this->referredDocumentAmount;
    }

    public function setReferredDocumentAmount(?ReferredDocumentAmount $referredDocumentAmount): void
    {
        $this->referredDocumentAmount = $referredDocumentAmount;
    }

}
