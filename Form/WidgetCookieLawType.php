<?php

namespace Victoire\Widget\CookieLawBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;

/**
 * WidgetCookieLaw form type.
 */
class WidgetCookieLawType extends WidgetType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('message', null, [
                    'label' => 'widget_cookielaw.form.message.label',
            ])
            ->add('dismiss', null, [
                    'label' => 'widget_cookielaw.form.dismiss.label',
            ])
            ->add('learnMore', null, [
                    'label' => 'widget_cookielaw.form.learnMore.label',
            ])
            ->add('link', null, [
                    'label' => 'widget_cookielaw.form.link.label',
            ])
            ->add('cookieTheme', 'choice', [
                    'label'   => 'widget_cookielaw.form.theme.label',
                    'choices' => [
                        'dark-top'       => 'widget_cookielaw.form.theme.choice.dark_top.label',
                        'dark-floating'  => 'widget_cookielaw.form.theme.choice.dark_floating.label',
                        'dark-bottom'    => 'widget_cookielaw.form.theme.choice.dark_bottom.label',
                        'light-top'      => 'widget_cookielaw.form.theme.choice.light_top.label',
                        'light-floating' => 'widget_cookielaw.form.theme.choice.light_floating.label',
                        'light-bottom'   => 'widget_cookielaw.form.theme.choice.light_bottom.label',
                    ],
            ]);
        parent::buildForm($builder, $options);
    }

    /**
     * bind form to WidgetCookieLaw entity.
     *
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\CookieLawBundle\Entity\WidgetCookieLaw',
            'widget'             => 'CookieLaw',
            'translation_domain' => 'victoire',
        ]);
    }

    /**
     * get form name.
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_cookielaw';
    }
}
