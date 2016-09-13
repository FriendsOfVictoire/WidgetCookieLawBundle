<?php

namespace Victoire\Widget\CookieLawBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\FormBundle\Form\Type\LinkType;

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
            ->add('link', LinkType::class, [
                    'label' => 'widget_cookielaw.form.link.label',
            ])
            ->add('cookieTheme', ChoiceType::class, [
                    'label'   => 'widget_cookielaw.form.theme.label',
                    'choices' => [
                        'widget_cookielaw.form.theme.choice.dark_top.label'       => 'dark-top',
                        'widget_cookielaw.form.theme.choice.dark_floating.label'  => 'dark-floating',
                        'widget_cookielaw.form.theme.choice.dark_bottom.label'    => 'dark-bottom',
                        'widget_cookielaw.form.theme.choice.light_top.label'      => 'light-top',
                        'widget_cookielaw.form.theme.choice.light_floating.label' => 'light-floating',
                        'widget_cookielaw.form.theme.choice.light_bottom.label'   => 'light-bottom',
                    ],
            ]);
        parent::buildForm($builder, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\CookieLawBundle\Entity\WidgetCookieLaw',
            'widget'             => 'CookieLaw',
            'translation_domain' => 'victoire',
        ]);
    }
}
