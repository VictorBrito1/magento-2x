<?php
namespace Paymee\Transferencia\Model\Session;
class Storage extends \Magento\Framework\Session\Storage
{
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        $namespace = 'paymee',
        array $data = []
    ) {
        parent::__construct($namespace, $data);
    }
}