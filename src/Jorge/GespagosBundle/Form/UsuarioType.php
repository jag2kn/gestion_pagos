<?php

namespace Jorge\GespagosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usuario', 'text', array('label' => 'Usuario'))
            ->add('clave', 'password', array('label' => 'Clave'))
            ->add('nombres', 'text', array('label' => 'Nombres'))
            ->add('apellidos', 'text', array('label' => 'Apellidos'))
            ->add('fecha', 'datetime', array('label' => 'Fecha Nacimiento'))
            ->add('correo', 'email', array('label' => 'Correo'))
//            ->add('salt')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jorge\GespagosBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jorge_gespagosbundle_usuario';
    }
}
