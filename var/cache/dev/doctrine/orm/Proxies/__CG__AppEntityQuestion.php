<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Question extends \App\Entity\Question implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'question', 'captchaCode', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'nbrVue', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'nbrReponse', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'reponse', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'Tag'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'question', 'captchaCode', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'nbrVue', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'nbrReponse', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'reponse', '' . "\0" . 'App\\Entity\\Question' . "\0" . 'Tag'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Question $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestion', []);

        return parent::getQuestion();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestion(string $question): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestion', [$question]);

        return parent::setQuestion($question);
    }

    /**
     * {@inheritDoc}
     */
    public function getCaptchaCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCaptchaCode', []);

        return parent::getCaptchaCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCaptchaCode($captchaCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCaptchaCode', [$captchaCode]);

        return parent::setCaptchaCode($captchaCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie(): ?\App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', []);

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(?\App\Entity\Categorie $categorie): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', [$categorie]);

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrVue(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrVue', []);

        return parent::getNbrVue();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrVue(?int $nbrVue): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrVue', [$nbrVue]);

        return parent::setNbrVue($nbrVue);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbrReponse(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbrReponse', []);

        return parent::getNbrReponse();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbrReponse(?int $nbrReponse): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbrReponse', [$nbrReponse]);

        return parent::setNbrReponse($nbrReponse);
    }

    /**
     * {@inheritDoc}
     */
    public function getReponse(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReponse', []);

        return parent::getReponse();
    }

    /**
     * {@inheritDoc}
     */
    public function getTag(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTag', []);

        return parent::getTag();
    }

    /**
     * {@inheritDoc}
     */
    public function setTag(?string $Tag): \App\Entity\Question
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTag', [$Tag]);

        return parent::setTag($Tag);
    }

}
