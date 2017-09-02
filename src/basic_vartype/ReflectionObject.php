<?php

/**
 * ReflectionObject.
 * The ReflectionObject class reports information about an object.
 *
 * @property $name
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectionobject.php
 */
class ReflectionObject extends ReflectionClass implements Reflector
{
    const IS_IMPLICIT_ABSTRACT = 16;
    const IS_EXPLICIT_ABSTRACT = 32;
    const IS_FINAL = 64;

    public $name;

    /**
     * __construct.
     * Constructs a ReflectionObject.
     *
     * @param object $argument
     *
     * @see http://php.net/manual/en/reflectionobject.construct.php
     */
    public function __construct(object $argument)
    {
    }

    /**
     * export.
     * Export.
     *
     * @param string $argument
     * @param bool   $return   (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionobject.export.php
     */
    public static function export(string $argument, bool $return): string
    {
    }

    /* Inherited methods */
    //public function ReflectionClass::__construct(mixed $argument): void
    //public static function ReflectionClass::export(mixed $argument, bool $return = false): string
    //public function ReflectionClass::getConstant(string $name): mixed
    //public function ReflectionClass::getConstants(): array
    //public function ReflectionClass::getConstructor(): ReflectionMethod
    //public function ReflectionClass::getDefaultProperties(): array
    //public function ReflectionClass::getDocComment(): string
    //public function ReflectionClass::getEndLine(): int
    //public function ReflectionClass::getExtension(): ReflectionExtension
    //public function ReflectionClass::getExtensionName(): string
    //public function ReflectionClass::getFileName(): string
    //public function ReflectionClass::getInterfaceNames(): array
    //public function ReflectionClass::getInterfaces(): array
    //public function ReflectionClass::getMethod(string $name): ReflectionMethod
    //public function ReflectionClass::getMethods(int $filter): array
    //public function ReflectionClass::getModifiers(): int
    //public function ReflectionClass::getName(): string
    //public function ReflectionClass::getNamespaceName(): string
    //public function ReflectionClass::getParentClass(): ReflectionClass
    //public function ReflectionClass::getProperties(int $filter): array
    //public function ReflectionClass::getProperty(string $name): ReflectionProperty
    //public function ReflectionClass::getReflectionConstant(string $name): ReflectionClassConstant
    //public function ReflectionClass::getReflectionConstants(): array
    //public function ReflectionClass::getShortName(): string
    //public function ReflectionClass::getStartLine(): int
    //public function ReflectionClass::getStaticProperties(): array
    //public function ReflectionClass::getStaticPropertyValue(string $name, mixed &$def_value): mixed
    //public function ReflectionClass::getTraitAliases(): array
    //public function ReflectionClass::getTraitNames(): array
    //public function ReflectionClass::getTraits(): array
    //public function ReflectionClass::hasConstant(string $name): bool
    //public function ReflectionClass::hasMethod(string $name): bool
    //public function ReflectionClass::hasProperty(string $name): bool
    //public function ReflectionClass::implementsInterface(string $interface): bool
    //public function ReflectionClass::inNamespace(): bool
    //public function ReflectionClass::isAbstract(): bool
    //public function ReflectionClass::isAnonymous(): bool
    //public function ReflectionClass::isCloneable(): bool
    //public function ReflectionClass::isFinal(): bool
    //public function ReflectionClass::isInstance(object $object): bool
    //public function ReflectionClass::isInstantiable(): bool
    //public function ReflectionClass::isInterface(): bool
    //public function ReflectionClass::isInternal(): bool
    //public function ReflectionClass::isIterateable(): bool
    //public function ReflectionClass::isSubclassOf(string $class): bool
    //public function ReflectionClass::isTrait(): bool
    //public function ReflectionClass::isUserDefined(): bool
    //public function ReflectionClass::newInstance(mixed $args, mixed $...): object
    //public function ReflectionClass::newInstanceArgs(array $args): object
    //public function ReflectionClass::newInstanceWithoutConstructor(): object
    //public function ReflectionClass::setStaticPropertyValue(string $name, string $value): void
    //public function ReflectionClass::__toString(): string
}
