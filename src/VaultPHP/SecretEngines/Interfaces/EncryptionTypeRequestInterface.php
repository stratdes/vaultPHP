<?php

namespace VaultPHP\SecretEngines\Interfaces;

/**
 * Interface EncryptionTypeRequestInterface
 * @package VaultPHP\SecretEngines\Interfaces
 */
interface EncryptionTypeRequestInterface
{
    /**
     * @return string|null
     */
    public function getType();

    /**
     * @param string $type
     * @return self
     */
    public function setType($type);
}
