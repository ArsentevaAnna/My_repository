<?php

namespace App\Controller;

use App\Entity\CoeffFive;
use App\Entity\CoeffFour;
use App\Entity\CoeffOne;
use App\Entity\CoeffThree;
use App\Entity\CoeffTwo;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CoefficientController extends Controller
{

    /**
     * @Route("/coefficient")
     * @Method("POST")
     * @Security("has_role('ROLE_USER')")
     */
    public function add(Request $request)
    {
        $company = $request->request->get("company");
        $select_coeff = $request->request->get("coefficient");
        $index_1 = $request->request->get("index_1");
        $index_2 = $request->request->get("index_2");

        $coeff_value = $index_1 / $index_2;

        $coeff = null;

        switch ($select_coeff)
        {
            case "1":
                $coeffClass = CoeffOne::class;
                break;
            case "2":
                $coeffClass = CoeffTwo::class;
                break;
            case "3":
                $coeffClass = CoeffThree::class;
                break;
            case "4":
                $coeffClass = CoeffFour::class;
                break;
            case "5":
                $coeffClass = CoeffFive::class;
                break;
        }

        $entityManager = $this->getDoctrine()->getManager();

        $repository = $this->getDoctrine()->getRepository($coeffClass);

        $coeff = $repository->findOneBy([
            'company_name' => $company,
            'date' => new \DateTime()
        ]);

        if (is_null($coeff))
        {
            $coeff = new $coeffClass;

            $coeff->setCompanyName($company);
            $coeff->setDate(new \DateTime());
            $coeff->setCoeffValue($coeff_value);

            $entityManager->persist($coeff);
            $entityManager->flush();
        }
        else
        {
            return $this->render('message.html.twig', [
                'alert' => 'danger',
                'head' => 'Ошибка!',
                'content' => 'Для этой компании сегодня уже посчитан коэффициент'
            ]);
        }

        return $this->render('message.html.twig', [
            'alert' => 'success',
            'head' => 'Успешно!',
            'content' => 'Данные успешно добавлены'
        ]);
    }

    /**
     * @Route("/coefficient/{id}", requirements={"id" = "[0-5]"})
     * @Method("GET")
     */
    public function getAll(Request $request, $id)
    {
        $coeffClass = null;

        switch ($id)
        {
            case "1":
                $coeffClass = CoeffOne::class;
                break;
            case "2":
                $coeffClass = CoeffTwo::class;
                break;
            case "3":
                $coeffClass = CoeffThree::class;
                break;
            case "4":
                $coeffClass = CoeffFour::class;
                break;
            case "5":
                $coeffClass = CoeffFive::class;
                break;
        }

        $repository = $this->getDoctrine()->getRepository($coeffClass);

        $coefficients = [
            //"data" => $repository->findAllCoeff()
        ];

        $coefficients = $repository->findAllCoeff();

        $response = new JsonResponse($coefficients);
        $response->setEncodingOptions(JSON_UNESCAPED_UNICODE);

        return $response;
    }
}
