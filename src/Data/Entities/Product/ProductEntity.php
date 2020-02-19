<?php
namespace App\Data\Entities\Product;

class ProductEntity
{
    private ?int $id = null;
    private string $name;
    private string $description;
    private ?string $domainExtension = null;

    /**
     * Get product id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set product id.
     *
     * @param int $id Product id.
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Get product name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set product name.
     *
     * @param string $name Product name.
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get product description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set product description.
     *
     * @param string $description Product description.
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Get product domain extension.
     */
    public function getDomainExtension(): ?string
    {
        return $this->domainExtension;
    }

    /**
     * Set product domain extension.
     *
     * @param string|null $domainExtension Product domain extension.
     */
    public function setDomainExtension(?string $domainExtension): void
    {
        $this->domainExtension = $domainExtension;
    }

    /**
     * Return product as array.
     *
     * @return array<string,mixed>
     */
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'type' => 'product',
            'attributes' => [
                'name' => $this->getName(),
                'description' => $this->getDescription(),
                'domainExtension' => $this->getDomainExtension(),
            ],
        ];
    }
}
