<?php

namespace App\Form;

use App\Entity\LogUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LogUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaCrea')
            ->add('fechaModifica')
            ->add('ipUsuario')
            ->add('userAgent')
            ->add('codPais')
            ->add('claveEvent')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LogUser::class,
        ]);
    }
}
