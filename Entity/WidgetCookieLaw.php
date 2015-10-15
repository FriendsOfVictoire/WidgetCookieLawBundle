<?php

namespace Victoire\Widget\CookieLawBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetCookieLaw.
 *
 * @ORM\Table("vic_widget_cookielaw")
 * @ORM\Entity
 */
class WidgetCookieLaw extends Widget
{
    /**
     * @var text
     *
     * @ORM\Column(name="message", type="text")
     */
    protected $message;

    /**
     * @var string
     *
     * @ORM\Column(name="dismiss", type="string", length=55)
     */
    protected $dismiss;

    /**
     * @var string
     *
     * @ORM\Column(name="learnMore", type="string", length=255, nullable=true)
     */
    protected $learnMore;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    protected $link;

    /**
     * @var string
     *
     * @ORM\Column(name="cookie_theme", type="string", length=55)
     */
    protected $cookieTheme;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent.
     *
     * @return string
     */
    public function __toString()
    {
        return 'CookieLaw #'.$this->id;
    }

    /**
     * Set message.
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set dismiss.
     *
     * @param string $dismiss
     */
    public function setDismiss($dismiss)
    {
        $this->dismiss = $dismiss;

        return $this;
    }

    /**
     * Get dismiss.
     *
     * @return string
     */
    public function getDismiss()
    {
        return $this->dismiss;
    }

    /**
     * @return string
     */
    public function getLearnMore()
    {
        return $this->learnMore;
    }

    /**
     * @param string $learnMore
     */
    public function setLearnMore($learnMore)
    {
        $this->learnMore = $learnMore;
    }

    /**
     * Set link.
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return string
     */
    public function getCookieTheme()
    {
        return $this->cookieTheme;
    }

    /**
     * @param string $cookieTheme
     */
    public function setCookieTheme($cookieTheme)
    {
        $this->cookieTheme = $cookieTheme;
    }
}
