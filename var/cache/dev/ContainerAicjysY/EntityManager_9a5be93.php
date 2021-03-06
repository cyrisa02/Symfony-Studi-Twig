<?php

namespace ContainerAicjysY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder76093 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5b5e7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7391b = [
        
    ];

    public function getConnection()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getConnection', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getMetadataFactory', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getExpressionBuilder', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'beginTransaction', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getCache', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'transactional', array('func' => $func), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'commit', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->commit();
    }

    public function rollback()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'rollback', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getClassMetadata', array('className' => $className), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'createQuery', array('dql' => $dql), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'createNamedQuery', array('name' => $name), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'createQueryBuilder', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'flush', array('entity' => $entity), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'clear', array('entityName' => $entityName), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->clear($entityName);
    }

    public function close()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'close', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->close();
    }

    public function persist($entity)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'persist', array('entity' => $entity), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'remove', array('entity' => $entity), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'refresh', array('entity' => $entity), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'detach', array('entity' => $entity), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'merge', array('entity' => $entity), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'contains', array('entity' => $entity), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getEventManager', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getConfiguration', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'isOpen', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getUnitOfWork', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getProxyFactory', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'initializeObject', array('obj' => $obj), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'getFilters', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'isFiltersStateClean', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'hasFilters', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return $this->valueHolder76093->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer5b5e7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder76093) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder76093 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder76093->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, '__get', ['name' => $name], $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        if (isset(self::$publicProperties7391b[$name])) {
            return $this->valueHolder76093->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76093;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder76093;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76093;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder76093;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, '__isset', array('name' => $name), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76093;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder76093;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, '__unset', array('name' => $name), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76093;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder76093;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, '__clone', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        $this->valueHolder76093 = clone $this->valueHolder76093;
    }

    public function __sleep()
    {
        $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, '__sleep', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;

        return array('valueHolder76093');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5b5e7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5b5e7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5b5e7 && ($this->initializer5b5e7->__invoke($valueHolder76093, $this, 'initializeProxy', array(), $this->initializer5b5e7) || 1) && $this->valueHolder76093 = $valueHolder76093;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder76093;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder76093;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
