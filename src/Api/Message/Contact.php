<?php

namespace Viber\Api\Message;

use Viber\Api\Message;

/**
 * Contact as message
 *
 * @author Novikov Bogdan <hcbogdan@gmail.com>
 */
class Contact extends Message
{
    /**
     * Name of the contact. Max 28 characters.
     *
     * @var string
     */
    protected $name;

    /**
     * Phone number of the contact. Max 18 characters
     *
     * @var string
     */
    protected $phone_number;

    /**
     * Url to avatar
     *
     * @var string
     */
    protected $avatar;

    /**
     * Additional text (for share-phone action-type etc.)
     *
     * @var string
     */
    protected $text;

    /**
     * {@inheritdoc}
     */
    protected $propertiesMap = [
        'text' => 'setText',
        'contact' => 'setConcat'
    ];

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return Type::CONTACT;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return array_merge(parent::toArray(), [
            'text' => $this->getText(),
            'contact' => [
                'name' => $this->getName(),
                'phone_number' => $this->getPhoneNumber(),
                'avatar' => $this->getAvatar()
            ]
        ]);
    }

    /**
     * Get the value of Name of the contact. Max 28 characters.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name of the contact. Max 28 characters.
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
     * Get the value of Phone number of the contact. Max 18 characters
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set the value of Phone number of the contact. Max 18 characters
     *
     * @param string phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Set the value of Phone number of the contact from contact array.
     *
     * @param array contact
     *
     * @return self
     */
    public function setConcat($contact)
    {
        $this->name = $contact['name'];
        $this->phone_number = $contact['phone_number'];
        $this->avatar = $contact['avatar'];

        return $this;
    }
}
