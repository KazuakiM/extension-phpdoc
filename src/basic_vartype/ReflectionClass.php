<?php

/**
 * ReflectionClass.
 * The ReflectionClass class reports information about a class.
 *
 * @property $name
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectionclass.php
 */
class ReflectionClass implements Reflector
{
    const IS_IMPLICIT_ABSTRACT = 16;
    const IS_EXPLICIT_ABSTRACT = 32;
    const IS_FINAL = 64;

    public $name;

    /**
     * __construct.
     * Constructs a ReflectionClass.
     *
     * @param mixed $argument
     *
     * @throws ReflectionException
     *
     * @see http://php.net/manual/en/reflectionclass.construct.php
     */
    public function __construct(mixed $argument)
    {
    }

    /**
     * __toString.
     * Returns the string representation of the ReflectionClass object.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionclass.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * export.
     * Exports a class.
     *
     * @param mixed $argument
     * @param bool  $return   = false
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionclass.export.php
     */
    public static function export(mixed $argument, bool $return = false): string
    {
    }

    /**
     * getConstant.
     * Gets defined constant.
     *
     * @param string $name
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/reflectionclass.getconstant.php
     */
    public function getConstant(string $name): mixed
    {
    }

    /**
     * getConstants.
     * Gets constants.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionclass.getconstants.php
     */
    public function getConstants(): array
    {
    }

    /**
     * getConstructor.
     * Gets the constructor of the class.
     *
     * @return ReflectionMethod
     *
     * @see http://php.net/manual/en/reflectionclass.getconstructor.php
     */
    public function getConstructor(): ReflectionMethod
    {
    }

    /**
     * getDefaultProperties.
     * Gets default properties.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionclass.getdefaultproperties.php
     */
    public function getDefaultProperties(): array
    {
    }

    /**
     * getDocComment.
     * Gets doc comments.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionclass.getdoccomment.php
     */
    public function getDocComment(): string
    {
    }

    /**
     * getEndLine.
     * Gets end line.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectionclass.getendline.php
     */
    public function getEndLine(): int
    {
    }

    /**
     * getExtension.
     * Gets a ReflectionExtension object for the extension which defined the class.
     *
     * @return ReflectionExtension
     *
     * @see http://php.net/manual/en/reflectionclass.getextension.php
     */
    public function getExtension(): ReflectionExtension
    {
    }

    /**
     * getExtensionName.
     * Gets the name of the extension which defined the class.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionclass.getextensionname.php
     */
    public function getExtensionName(): string
    {
    }

    /**
     * getFileName.
     * Gets the filename of the file in which the class has been defined.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionclass.getfilename.php
     */
    public function getFileName(): string
    {
    }

    /**
     * getInterfaceNames.
     * Gets the interface names.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionclass.getinterfacenames.php
     */
    public function getInterfaceNames(): array
    {
    }

    /**
     * getInterfaces.
     * Gets the interfaces.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionclass.getinterfaces.php
     */
    public function getInterfaces(): array
    {
    }

    /**
     * getMethod.
     * Gets a ReflectionMethod for a class method.
     *
     * @param string $name
     *
     * @throws ReflectionException
     *
     * @return ReflectionMethod
     *
     * @see http://php.net/manual/en/reflectionclass.getmethod.php
     */
    public function getMethod(string $name): ReflectionMethod
    {
    }

    /**
     * getMethods.
     * Gets an array of methods.
     *
     * @param int $filter (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionclass.getmethods.php
     */
    public function getMethods(int $filter): array
    {
    }

    /**
     * getModifiers.
     * Gets the class modifiers.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectionclass.getmodifiers.php
     */
    public function getModifiers(): int
    {
    }

    /**
     * getName.
     * Gets class name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionclass.getname.php
     */
    public function getName(): string
    {
    }

    /**
     * getNamespaceName.
     * Gets namespace name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionclass.getnamespacename.php
     */
    public function getNamespaceName(): string
    {
    }

    /**
     * getParentClass.
     * Gets parent class.
     *
     * @return ReflectionClass
     *
     * @see http://php.net/manual/en/reflectionclass.getparentclass.php
     */
    public function getParentClass(): ReflectionClass
    {
    }

    /**
     * getProperties.
     * Gets properties.
     *
     * @param int $filter (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionclass.getproperties.php
     */
    public function getProperties(int $filter): array
    {
    }

    /**
     * getProperty.
     * Gets a ReflectionProperty for a class's property.
     *
     * @param string $name
     *
     * @return ReflectionProperty
     *
     * @see http://php.net/manual/en/reflectionclass.getproperty.php
     */
    public function getProperty(string $name): ReflectionProperty
    {
    }

    /**
     * getReflectionConstant.
     * Gets a ReflectionClassConstant for a class's constant.
     *
     * @param string $name
     *
     * @return ReflectionClassConstant
     *
     * @see http://php.net/manual/en/reflectionclass.getreflectionconstant.php
     */
    public function getReflectionConstant(string $name): ReflectionClassConstant
    {
    }

    /**
     * getReflectionConstants.
     * Gets class constants.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionclass.getreflectionconstants.php
     */
    public function getReflectionConstants(): array
    {
    }

    /**
     * getShortName.
     * Gets short name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionclass.getshortname.php
     */
    public function getShortName(): string
    {
    }

    /**
     * getStartLine.
     * Gets starting line number.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectionclass.getstartline.php
     */
    public function getStartLine(): int
    {
    }

    /**
     * getStaticProperties.
     * Gets static properties.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionclass.getstaticproperties.php
     */
    public function getStaticProperties(): array
    {
    }

    /**
     * getStaticPropertyValue.
     * Gets static property value.
     *
     * @param string $name
     * @param mixed  &$def_value (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/reflectionclass.getstaticpropertyvalue.php
     */
    public function getStaticPropertyValue(string $name, mixed &$def_value): mixed
    {
    }

    /**
     * getTraitAliases.
     * Returns an array of trait aliases.
     *
     * @return array
     *
     * @see http://php.net/manual/en/relectionclass.gettraitaliases.php
     */
    public function getTraitAliases(): array
    {
    }

    /**
     * getTraitNames.
     * Returns an array of names of traits used by this class.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionclass.gettraitnames.php
     */
    public function getTraitNames(): array
    {
    }

    /**
     * getTraits.
     * Returns an array of traits used by this class.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionclass.gettraits.php
     */
    public function getTraits(): array
    {
    }

    /**
     * hasConstant.
     * Checks if constant is defined.
     *
     * @param string $name
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.hasconstant.php
     */
    public function hasConstant(string $name): bool
    {
    }

    /**
     * hasMethod.
     * Checks if method is defined.
     *
     * @param string $name
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.hasmethod.php
     */
    public function hasMethod(string $name): bool
    {
    }

    /**
     * hasProperty.
     * Checks if property is defined.
     *
     * @param string $name
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.hasproperty.php
     */
    public function hasProperty(string $name): bool
    {
    }

    /**
     * implementsInterface.
     * Implements interface.
     *
     * @param string $interface
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.implementsinterface.php
     */
    public function implementsInterface(string $interface): bool
    {
    }

    /**
     * inNamespace.
     * Checks if in namespace.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.innamespace.php
     */
    public function inNamespace(): bool
    {
    }

    /**
     * isAbstract.
     * Checks if class is abstract.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.isabstract.php
     */
    public function isAbstract(): bool
    {
    }

    /**
     * isAnonymous.
     * Checks if class is anonymous.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.isanonymous.php
     */
    public function isAnonymous(): bool
    {
    }

    /**
     * isCloneable.
     * Returns whether this class is cloneable.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.iscloneable.php
     */
    public function isCloneable(): bool
    {
    }

    /**
     * isFinal.
     * Checks if class is final.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.isfinal.php
     */
    public function isFinal(): bool
    {
    }

    /**
     * isInstance.
     * Checks class for instance.
     *
     * @param object $object
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.isinstance.php
     */
    public function isInstance(object $object): bool
    {
    }

    /**
     * isInstantiable.
     * Checks if the class is instantiable.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.isinstantiable.php
     */
    public function isInstantiable(): bool
    {
    }

    /**
     * isInterface.
     * Checks if the class is an interface.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.isinterface.php
     */
    public function isInterface(): bool
    {
    }

    /**
     * isInternal.
     * Checks if class is defined internally by an extension, or the core.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.isinternal.php
     */
    public function isInternal(): bool
    {
    }

    /**
     * isIterateable.
     * Checks if iterateable.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.isiterateable.php
     */
    public function isIterateable(): bool
    {
    }

    /**
     * isSubclassOf.
     * Checks if a subclass.
     *
     * @param string $class
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.issubclassof.php
     */
    public function isSubclassOf(string $class): bool
    {
    }

    /**
     * isTrait.
     * Returns whether this is a trait.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.istrait.php
     */
    public function isTrait(): bool
    {
    }

    /**
     * isUserDefined.
     * Checks if user defined.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclass.isuserdefined.php
     */
    public function isUserDefined(): bool
    {
    }

    /**
     * newInstance.
     * Creates a new class instance from given arguments.
     *
     * @param mixed $args
     * @param mixed $...  (optional)
     *
     * @throws ReflectionException
     *
     * @return object
     *
     * @see http://php.net/manual/en/reflectionclass.newinstance.php
     */
    public function newInstance(mixed $args, mixed $etc): object
    {
    }

    /**
     * newInstanceArgs.
     * Creates a new class instance from given arguments.
     *
     * @param array $args (optional)
     *
     * @return object
     *
     * @see http://php.net/manual/en/reflectionclass.newinstanceargs.php
     */
    public function newInstanceArgs(array $args): object
    {
    }

    /**
     * newInstanceWithoutConstructor.
     * Creates a new class instance without invoking the constructor.
     *
     * @return object
     *
     * @see http://php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php
     */
    public function newInstanceWithoutConstructor(): object
    {
    }

    /**
     * setStaticPropertyValue.
     * Sets static property value.
     *
     * @param string $name
     * @param string $value
     *
     * @see http://php.net/manual/en/reflectionclass.setstaticpropertyvalue.php
     */
    public function setStaticPropertyValue(string $name, string $value): void
    {
    }
}
