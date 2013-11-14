<?php

namespace Ticket\VentasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('idAuditorio')
            ->add('idPlanEventos')
            ->add('fecha')
            ->add('ingreso')
            ->add('estado')
            ->add('descripcion')
            ->add('duracionHorasIngreso')
            ->add('camposBoleta')
            ->add('ventaLinea')
            ->add('tipoRecoleccionDatos')
            ->add('estructura')
            ->add('jsonPropiedades')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ticket\VentasBundle\Entity\Evento'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ticket_ventasbundle_evento';
    }
}
