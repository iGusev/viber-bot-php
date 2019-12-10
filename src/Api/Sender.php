<?php

namespace Viber\Api;

/**
 * Message sender
 *
 * @author Novikov Bogdan <hcbogdan@gmail.com>
 */
class Sender extends Entity
{
    /**
     * Viber User id
     *
     * @var string
     */
    protected $id;

    /**
     * Viber name
     *
     * @var string
     */
    protected $name;

    /**
     * URL of the user's avatar
     *
     * @var string
     */
    protected $avatar;

    /**
     * User’s phone language. Will be returned according to the device language
     *
     * @see ISO 639-1
     *
     * @var string
     */
    protected $language;

    /**
     * User's country code
     *
     * @var string
     */
    protected $country;

    /**
     * Max API version, matching the most updated user's device
     *
     * @var integer
     */
    protected $api_version;

    /**
     * {@inheritDoc}
     */
    protected $propertiesMap = [
        'id' => 'setId',
        'name' => 'setName',
        'language' => 'setLanguage',
        'country' => 'setCountry',
        'api_version' => 'setApiVersion',
        'avatar' => 'setAvatar',
    ];

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'language' => $this->getLanguage(),
            'country' => $this->getCountry(),
            'api_version' => $this->getApiVersion(),
            'avatar' => $this->getAvatar(),
        ];
    }

    /**
     * Get the value of Viber User id
     *
     * @return [type]
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Viber User id
     *
     * @param string id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Viber name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Viber name
     *
     * @param string name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of URL of the user's avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set the value of URL of the user's avatar
     *
     * @param string avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return int
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * @param int $api_version
     */
    public function setApiVersion($api_version)
    {
        $this->api_version = $api_version;
    }
}
