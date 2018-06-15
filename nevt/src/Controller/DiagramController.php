<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

class DiagramController extends Controller
{
    /**
     * @Route("/diagram/histogram", name="histogram")
     * @Method("POST")
     * @Security("has_role('ROLE_USER')")
     */
    public function indexHistogram(Request $request)
    {
        $coeff = $request->request->get("buildGraphForm");

        if ($coeff == "co")
        {
            return $this->render('diagram/company.html.twig', [
                'diagram' => 'diagramHistogram',
            ]);
        }

        return $this->render('diagram/index.html.twig', [
            'coeff' => $coeff,
            'diagram' => 'diagramHistogram',
            'data' => 2,
            'label' => 1
        ]);
    }

    /**
     * @Route("/diagram/pie", name="pie")
     * @Method("POST")
     * @Security("has_role('ROLE_USER')")
     */
    public function indexPie(Request $request)
    {
        $coeff = $request->request->get("buildGraphForm");

        if ($coeff == "co")
        {
            return $this->render('diagram/company.html.twig', [
                'diagram' => 'diagramPieChart',
            ]);
        }

        return $this->render('diagram/index.html.twig', [
            'coeff' => $coeff,
            'diagram' => 'diagramPieChart',
            'data' => 2,
            'label' => 2
        ]);
    }

}
