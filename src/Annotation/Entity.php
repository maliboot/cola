<?php

declare(strict_types=1);

namespace MaliBoot\Cola\Annotation;

use Attribute;
use Hyperf\Di\Annotation\AbstractAnnotation;
use MaliBoot\Dto\Contract\StructureObjectAnnotationInterface;

#[Attribute(Attribute::TARGET_CLASS)]
class Entity extends AbstractAnnotation implements StructureObjectAnnotationInterface
{
    /**
     * @param ?string $getterSetterDelegate GetterSetter委托类<div><p>默认为null，无委托</p><p>委托类需要实现<a href='psi_element://\MaliBoot\Lombok\Contract\GetterSetterDelegateInterface'>GetterSetterDelegateInterface</a></p></div>
     */
    public function __construct(public string $domain = '', public string $name = '', public string $desc = '', public ?string $getterSetterDelegate = null)
    {
    }

    public function getterDelegate(): ?string
    {
        return $this->getterSetterDelegate;
    }

    public function setterDelegate(): ?string
    {
        return $this->getterSetterDelegate;
    }
}
